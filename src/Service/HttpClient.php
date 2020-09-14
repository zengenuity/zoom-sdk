<?php
/**
 * Created by PhpStorm.
 * User: wayne
 * Date: 3/4/17
 * Time: 10:30 AM
 */

namespace Zengenuity\Zoom\Service;

use Firebase\JWT\JWT;

class HttpClient {

  /**
   * @var string
   */
  protected $jwtKey;

  /**
   * @var int
   */
  protected $jwtExpires;

  /**
   * @var string
   */
  protected $apiKey;

  /**
   * @var string
   */
  protected $apiSecret;

  public function __construct(string $api_key, string $api_secret) {
    $this->apiKey = $api_key;
    $this->apiSecret = $api_secret;
  }

  protected function getJwt() {
    if ($this->jwtKey !== null || $this->jwtExpires < time()) {
      $payload = [
        "iss" => $this->apiKey,
        "exp" => time() + 3600,
      ];

      $this->jwtKey = JWT::encode($payload, $this->apiSecret, 'HS256');
      $this->jwtExpires = $payload['exp'];
    }
    return $this->jwtKey;
  }


  /**
   * @param string $url
   * @param array $data
   * @return object
   * @throws \Exception
   */
  public function post($url, $data = []){
    $postFields = http_build_query($data);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
      'authorization: Bearer {' . $this->getJwt() . '}',
      'content-type: application/json'
    ]);
    $response = curl_exec($ch);
    curl_close($ch);

    if (empty($response)) {
      throw new \Error("Response is empty");
    }
    $response = json_decode($response);
    if (!empty($response->error)) {
      throw new \Exception($response->error->message, $response->error->code);
    }

    return $response;
  }

}
