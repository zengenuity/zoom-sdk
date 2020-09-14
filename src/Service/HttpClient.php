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
      $header = '{"alg":"HS256","typ":"JWT"}';
      $payload = '{"iss":"' . $this->apiKey . '","exp":' . (time() + 3600) . '}';
      $signature = hash_hmac("sha256", $this->base64UrlEncode($header) . "." . $this->base64UrlEncode($payload), $this->apiSecret, true);
      $this->jwtKey = $this->base64UrlEncode($header) . "." . $this->base64UrlEncode($payload) . "." . $this->base64UrlEncode($signature);
      $this->jwtExpires = (time() + 3600);
    }
    return $this->jwtKey;
  }

  public function base64UrlEncode($data) {
    // Encode $data to Base64 string
    $b64 = base64_encode($data);

    // Valid result? Otherwise, return FALSE, as the base64_encode() function does
    if ($b64 === false) {
      return false;
    }

    // Convert Base64 to Base64URL by replacing "+" with "-" and "/" with "_"
    $url = strtr($b64, '+/', '-_');

    // Remove padding character from the end of line and return the Base64URL result
    return rtrim($url, '=');
  }

  public function base64UrlDecode($data, $strict = false) {
    // Convert Base64URL to Base64 by replacing "-" with "+" and "_" with "/"
    $b64 = strtr($data, '-_', '+/');

    // Decode Base64 string and return the original data
    return base64_decode($b64, $strict);
  }

  public function get($url, $data) {
    $fields = http_build_query($data);
    $url .= '?' . $fields;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
      'authorization: Bearer ' . $this->getJwt(),
      'content-type: application/json'
    ]);
    $response = curl_exec($ch);
    curl_close($ch);

    if (empty($response)) {
      return '';
    }
    $response = json_decode($response);
    if (!empty($response->error)) {
      throw new \Exception($response->error->message, $response->error->code);
    }
    return $response;
  }

  /**
   * @param string $url
   * @param array $data
   * @return object
   * @throws \Exception
   */
  public function post($url, $data = []){
    $postFields = json_encode($data);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
      'authorization: Bearer ' . $this->getJwt(),
      'content-type: application/json'
    ]);
    $response = curl_exec($ch);
    curl_close($ch);

    if (empty($response)) {
      return '';
    }
    $response = json_decode($response);
    if (!empty($response->error)) {
      throw new \Exception($response->error->message, $response->error->code);
    }

    return $response;
  }

  /**
   * @param string $url
   * @param array $data
   * @return object
   * @throws \Exception
   */
  public function patch($url, $data = []){
    $postFields = json_encode($data);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
      'authorization: Bearer ' . $this->getJwt(),
      'content-type: application/json'
    ]);
    $response = curl_exec($ch);
    curl_close($ch);

    if (empty($response)) {
      return '';
    }
    $response = json_decode($response);
    if (!empty($response->error)) {
      throw new \Exception($response->error->message, $response->error->code);
    }

    return $response;
  }

  /**
   * @param string $url
   * @param array $data
   * @return object
   * @throws \Exception
   */
  public function delete($url, $data = []){
    $postFields = json_encode($data);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
      'authorization: Bearer ' . $this->getJwt(),
      'content-type: application/json'
    ]);
    $response = curl_exec($ch);
    curl_close($ch);

    if (empty($response)) {
      return '';
    }
    $response = json_decode($response);
    if (!empty($response->error)) {
      throw new \Exception($response->error->message, $response->error->code);
    }

    return $response;
  }

}
