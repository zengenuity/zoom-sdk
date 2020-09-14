<?php

namespace Zengenuity\Zoom\Service;

use Zengenuity\Zoom\Entity\Meeting;
use Zengenuity\Zoom\Entity\User;
use Zengenuity\Zoom\Entity\Webinar;

class ZoomAPI {

  const LOGIN_TYPE_FACEBOOK = 0;
  const LOGIN_TYPE_GOOGLE = 1;
  const LOGIN_TYPE_API = 99;
  const LOGIN_TYPE_ZOOM = 100;
  const LOGIN_TYPE_SSO = 101;

  /**
   * @var string
   */
  protected $apiUrl;

  /**
   * @var string
   */
  protected $apiKey;

  /**
   * @var
   */
  protected $apiSecret;

  /**
   * @var HttpClient
   */
  protected $client;

  /**
   * ZoomAPI constructor.
   * @param string $apiKey
   * @param $apiSecret
   * @param string $apiUrl
   */
  public function __construct($apiKey, $apiSecret, $apiUrl = 'https://api.zoom.us/v2') {
    $this->apiUrl = $apiUrl;
    $this->apiKey = $apiKey;
    $this->apiSecret = $apiSecret;
    $this->client = new HttpClient($apiKey, $apiSecret);
  }

  /**
   * @param string $email
   * @param int $login_type
   * @return User
   */
  public function getUserByEmail($email, $login_type = ZoomAPI::LOGIN_TYPE_ZOOM) {
    $request_url = $this->apiUrl . '/user/getbyemail';
    $data = $this->prepareData([
      'email' => $email,
      'login_type' => $login_type,
    ]);
    $response = $this->client->post($request_url, $data);
    return User::fromArray((array) $response);
  }

  private function getEndpoint(Meeting $meeting) {
    $webinar_types = [
      Meeting::TYPE_WEBINAR,
      Meeting::TYPE_RECURRENCE_WEBINAR,
      Meeting::TYPE_RECURRING_WEBINAR_FIXED_TIME,
    ];
    return in_array($meeting->getType(), $webinar_types) ? 'webinar' : 'meeting';
  }

  /**
   * @param \Zengenuity\Zoom\Entity\Meeting $meeting
   * @return \Zengenuity\Zoom\Entity\Meeting
   */
  public function createMeeting(Meeting $meeting) {
    $endpoint = $this->getEndpoint($meeting);
    $request_url = $this->apiUrl . '/' . $endpoint . '/create';
    $data = $this->prepareData($meeting->toArray());
    $response = $this->client->post($request_url, $data);
    return Meeting::fromArray((array) $response);
  }

  /**
   * @param \Zengenuity\Zoom\Entity\Meeting $meeting
   * @return \Zengenuity\Zoom\Entity\Meeting
   */
  public function updateMeeting(Meeting $meeting) {
    $endpoint = $this->getEndpoint($meeting);
    $request_url = $this->apiUrl . '/' . $endpoint . '/update';
    $data = $this->prepareData($meeting->toArray());
    $response = $this->client->post($request_url, $data);
    return $this->getMeeting($response->id, $meeting->getHostId(), $endpoint);
  }

  /**
   * @param string $id
   * @param string $host_id
   *
   * @return \Zengenuity\Zoom\Entity\Meeting
   */
  public function getMeeting($id, $host_id, $endpoint = 'meeting') {
    $request_url = $this->apiUrl . '/' . $endpoint . '/get';
    $data = $this->prepareData(['id' => $id, 'host_id' => $host_id]);
    $response = $this->client->post($request_url, $data);
    return Meeting::fromArray((array) $response);
  }

  /**
   * @param string $id
   * @param string $host_id
   */
  public function deleteMeeting($id, $host_id, $endpoint = 'meeting') {
    $request_url = $this->apiUrl . '/' . $endpoint . '/delete';
    $data = $this->prepareData(['id' => $id, 'host_id' => $host_id]);
    $this->client->post($request_url, $data);
  }

  /**
   * @param array $data
   * @return array
   */
  private function prepareData($data) {
    $data['api_key'] = $this->apiKey;
    $data['api_secret'] = $this->apiSecret;
    $data['data_type'] = 'JSON';
    return $data;
  }



}
