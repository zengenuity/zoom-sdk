<?php
/**
 * Created by PhpStorm.
 * User: wayne
 * Date: 3/4/17
 * Time: 10:30 AM
 */

namespace Zengenuity\Zoom\Service;


class HttpClient {

  /**
   * @param string $url
   * @param array $data
   * @return object
   * @throws \Error
   */
  public function post($url, $data = []){
    $postFields = http_build_query($data);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    $response = curl_exec($ch);
    curl_close($ch);

    if (empty($response)) {
      throw new \Error("Response is empty");
    }
    $response = json_decode($response);
    if (!empty($response->error)) {
      throw new \Error($response->error->message, $response->error->code);
    }
    
    return $response;
  }

}
