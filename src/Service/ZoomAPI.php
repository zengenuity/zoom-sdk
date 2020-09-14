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
    $request_url = $this->apiUrl . '/users/' . $email;
    $data = [
      'login_type' => $login_type,
    ];
    $response = $this->client->get($request_url, $data);
    return User::fromArray((array) $response);
  }

  private function getEndpoint(Meeting $meeting) {
    $webinar_types = [
      Meeting::TYPE_WEBINAR,
      Meeting::TYPE_RECURRENCE_WEBINAR,
      Meeting::TYPE_RECURRING_WEBINAR_FIXED_TIME,
    ];
    return in_array($meeting->getType(), $webinar_types) ? 'webinars' : 'users/' . $meeting->getHostId() . '/meetings';
  }

  /**
   * @param \Zengenuity\Zoom\Entity\Meeting $meeting
   * @return \Zengenuity\Zoom\Entity\Meeting
   */
  public function createMeeting(Meeting $meeting) {
    $endpoint = $this->getEndpoint($meeting);
    $request_url = $this->apiUrl . '/' . $endpoint;
    $data = $meeting->toArray();
    $response = $this->client->post($request_url, $data);
    return Meeting::fromArray((array) $response);
  }

  /**
   * @param \Zengenuity\Zoom\Entity\Meeting $meeting
   * @return \Zengenuity\Zoom\Entity\Meeting
   */
  public function updateMeeting(Meeting $meeting) {
    $endpoint = $this->getEndpoint($meeting);
    $request_url = $this->apiUrl . '/meetings/' . $meeting->getId();
    $update_meeting = new Meeting($meeting->getHostId(), $meeting->getTopic(), $meeting->getType());
    $update_meeting->setStartTime($meeting->getStartTime())
      ->setTimezone($meeting->getTimezone())
      ->setDuration($meeting->getDuration());
    $data = $update_meeting->toArray();
    $response = $this->client->patch($request_url, $data);
    return $meeting;
  }

  /**
   * @param string $id
   *
   * @return \Zengenuity\Zoom\Entity\Meeting
   */
  public function getMeeting($id, $endpoint = 'meetings') {
    $request_url = $this->apiUrl . '/meetings/' . $id;
    $response = $this->client->get($request_url, []);
    return Meeting::fromArray((array) $response);
  }

  /**
   * @param Meeting $id
   * @param string $host_id
   */
  public function deleteMeeting(Meeting $meeting) {
    $request_url = $this->apiUrl . '/meetings/' . $meeting->getId();
    $this->client->delete($request_url);
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
