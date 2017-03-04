<?php

namespace Zengenuity\Zoom\Entity;

class Meeting {
  
  const TYPE_INSTANT_MEETING = 1;
  const TYPE_SCHEDULED_MEETING = 2;
  const TYPE_RECURRING_MEETING = 3;
  const TYPE_RECURRING_MEETING_FIXED_TIME = 8;
  
  const AUDIO_TELEPHONY = 'telephony';
  const AUDIO_VOIP = 'voip';
  const AUDIO_BOTH = 'both';
  
  const STATUS_NOT_STARTED = 0;
  const STATUS_STARTED = 1;
  const STATUS_FINISHED = 2;

  /**
   * @var int
   */
  protected $id;

  /**
   * @var string
   */
  protected $uuid;

  /**
   * @var string
   */
  protected $startUrl;

  /**
   * @var string
   */
  protected $joinUrl;
  
  /**
   * @var string
   */
  protected $hostId;

  /**
   * @var string
   */
  protected $topic;

  /**
   * @var int
   */
  protected $type;

  /**
   * @var \DateTime
   */
  protected $startTime;

  /**
   * @var \DateTimeZone
   */
  protected $timezone;

  /**
   * @var int
   */
  protected $duration;

  /**
   * @var string
   */
  protected $password;

  /**
   * @var bool
   */
  protected $optionJoinBeforeHost;

  /**
   * @var bool
   */
  protected $optionStartHostVideo;

  /**
   * @var bool
   */
  protected $optionStartParticipantVideo;

  /**
   * @var string
   */
  protected $optionAudio;

  /**
   * @var bool
   */
  protected $optionEnforceLogin;

  /**
   * @var string
   */
  protected $optionEnforceLoginDomains;

  /**
   * @var string
   */
  protected $optionAlternateHosts;

  /**
   * @var string
   */
  protected $optionAlternateHostIds;

  /**
   * @var bool
   */
  protected $optionUsePmi;

  /**
   * @var string
   */
  protected $h323Password;

  /**
   * @var \DateTime
   */
  protected $createdAt;

  /**
   * @var int
   */
  protected $status;

  /**
   * Meeting constructor.
   * @param string $hostId
   * @param string $topic
   * @param int $type
   */
  public function __construct($hostId, $topic, $type) {
    $this->hostId = $hostId;
    $this->topic = $topic;
    $this->type = $type;
  }

  /**
   * @return int
   */
  public function getId() {
    return $this->id;
  }

  /**
   * @param int $id
   * @return Meeting
   */
  public function setId($id) {
    $this->id = $id;
    return $this;
  }

  /**
   * @return string
   */
  public function getUuid() {
    return $this->uuid;
  }

  /**
   * @param string $uuid
   * @return Meeting
   */
  public function setUuid($uuid) {
    $this->uuid = $uuid;
    return $this;
  }

  /**
   * @return string
   */
  public function getStartUrl() {
    return $this->startUrl;
  }

  /**
   * @param string $startUrl
   * @return Meeting
   */
  public function setStartUrl($startUrl) {
    $this->startUrl = $startUrl;
    return $this;
  }

  /**
   * @return string
   */
  public function getJoinUrl() {
    return $this->joinUrl;
  }

  /**
   * @param string $joinUrl
   * @return Meeting
   */
  public function setJoinUrl($joinUrl) {
    $this->joinUrl = $joinUrl;
    return $this;
  }

  /**
   * @return string
   */
  public function getHostId() {
    return $this->hostId;
  }

  /**
   * @param string $hostId
   * @return Meeting
   */
  public function setHostId($hostId) {
    $this->hostId = $hostId;
    return $this;
  }

  /**
   * @return string
   */
  public function getTopic() {
    return $this->topic;
  }

  /**
   * @param string $topic
   * @return Meeting
   */
  public function setTopic($topic) {
    $this->topic = $topic;
    return $this;
  }

  /**
   * @return int
   */
  public function getType() {
    return $this->type;
  }

  /**
   * @param int $type
   * @return Meeting
   */
  public function setType($type) {
    $this->type = $type;
    return $this;
  }

  /**
   * @return \DateTime
   */
  public function getStartTime() {
    return $this->startTime;
  }

  /**
   * @param \DateTime $startTime
   * @return Meeting
   */
  public function setStartTime($startTime) {
    $this->startTime = $startTime;
    return $this;
  }

  /**
   * @return \DateTimeZone
   */
  public function getTimezone() {
    return $this->timezone;
  }

  /**
   * @param \DateTimeZone $timezone
   * @return Meeting
   */
  public function setTimezone($timezone) {
    $this->timezone = $timezone;
    return $this;
  }

  /**
   * @return int
   */
  public function getDuration() {
    return $this->duration;
  }

  /**
   * @param int $duration
   * @return Meeting
   */
  public function setDuration($duration) {
    $this->duration = $duration;
    return $this;
  }

  /**
   * @return string
   */
  public function getPassword() {
    return $this->password;
  }

  /**
   * @param string $password
   * @return Meeting
   */
  public function setPassword($password) {
    $this->password = $password;
    return $this;
  }

  /**
   * @return bool
   */
  public function getOptionJoinBeforeHost() {
    return $this->optionJoinBeforeHost;
  }

  /**
   * @param bool $optionJoinBeforeHost
   * @return Meeting
   */
  public function setOptionJoinBeforeHost($optionJoinBeforeHost) {
    $this->optionJoinBeforeHost = $optionJoinBeforeHost;
    return $this;
  }

  /**
   * @return bool
   */
  public function getOptionStartHostVideo() {
    return $this->optionStartHostVideo;
  }

  /**
   * @param bool $optionStartHostVideo
   * @return Meeting
   */
  public function setOptionStartHostVideo($optionStartHostVideo) {
    $this->optionStartHostVideo = $optionStartHostVideo;
    return $this;
  }

  /**
   * @return bool
   */
  public function getOptionStartParticipantVideo() {
    return $this->optionStartParticipantVideo;
  }

  /**
   * @param bool $optionStartParticipantVideo
   * @return Meeting
   */
  public function setOptionStartParticipantVideo($optionStartParticipantVideo) {
    $this->optionStartParticipantVideo = $optionStartParticipantVideo;
    return $this;
  }

  /**
   * @return string
   */
  public function getOptionAudio() {
    return $this->optionAudio;
  }

  /**
   * @param string $optionAudio
   * @return Meeting
   */
  public function setOptionAudio($optionAudio) {
    $this->optionAudio = $optionAudio;
    return $this;
  }

  /**
   * @return bool
   */
  public function getOptionEnforceLogin() {
    return $this->optionEnforceLogin;
  }

  /**
   * @param bool $optionEnforceLogin
   * @return Meeting
   */
  public function setOptionEnforceLogin($optionEnforceLogin) {
    $this->optionEnforceLogin = $optionEnforceLogin;
    return $this;
  }

  /**
   * @return string
   */
  public function getOptionEnforceLoginDomains() {
    return $this->optionEnforceLoginDomains;
  }

  /**
   * @param string $optionEnforceLoginDomains
   * @return Meeting
   */
  public function setOptionEnforceLoginDomains($optionEnforceLoginDomains) {
    $this->optionEnforceLoginDomains = $optionEnforceLoginDomains;
    return $this;
  }

  /**
   * @return string
   */
  public function getOptionAlternateHosts() {
    return $this->optionAlternateHosts;
  }

  /**
   * @param string $optionAlternateHosts
   * @return Meeting
   */
  public function setOptionAlternateHosts($optionAlternateHosts) {
    $this->optionAlternateHosts = $optionAlternateHosts;
    return $this;
  }

  /**
   * @return string
   */
  public function getH323Password() {
    return $this->h323Password;
  }

  /**
   * @param string $h323Password
   * @return Meeting
   */
  public function setH323Password($h323Password) {
    $this->h323Password = $h323Password;
    return $this;
  }

  /**
   * @return \DateTime
   */
  public function getCreatedAt() {
    return $this->createdAt;
  }

  /**
   * @param \DateTime $createdAt
   * @return Meeting
   */
  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
    return $this;
  }

  /**
   * @return int
   */
  public function getStatus() {
    return $this->status;
  }

  /**
   * @param int $status
   * @return Meeting
   */
  public function setStatus($status) {
    $this->status = $status;
    return $this;
  }

  /**
   * @return string
   */
  public function getOptionAlternateHostIds() {
    return $this->optionAlternateHostIds;
  }

  /**
   * @param string $optionAlternateHostIds
   * @return Meeting
   */
  public function setOptionAlternateHostIds($optionAlternateHostIds) {
    $this->optionAlternateHostIds = $optionAlternateHostIds;
    return $this;
  }

  /**
   * @return bool
   */
  public function getOptionUsePmi() {
    return $this->optionUsePmi;
  }

  /**
   * @param bool $optionUsePmi
   * @return Meeting
   */
  public function setOptionUsePmi($optionUsePmi) {
    $this->optionUsePmi = $optionUsePmi;
    return $this;
  }

  /**
   * @return array
   */
  public function toArray() {
    $array = [];
    
    if (!is_null($this->getId())) {
      $array['id'] = $this->getId();
    }
    if (!is_null($this->getUuid())) {
      $array['uuid'] = $this->getUuid();
    }
    if (!is_null($this->getHostId())) {
      $array['host_id'] = $this->getHostId();
    }
    if (!is_null($this->getStartUrl())) {
      $array['start_url'] = $this->getStartUrl();
    }
    if (!is_null($this->getJoinUrl())) {
      $array['join_url'] = $this->getJoinUrl();
    }
    if (!is_null($this->getCreatedAt())) {
      $array['created_at'] = $this->getCreatedAt()->setTimezone(new \DateTimeZone('UTC'))->format('Y-m-d\TH:i:s\Z');
    }
    if (!is_null($this->getTopic())) {
      $array['topic'] = $this->getTopic();
    }
    if (!is_null($this->getType())) {
      $array['type'] = $this->getType();
    }
    if (!is_null($this->getStartTime())) {
      $array['start_time'] = $this->getStartTime()->setTimezone(new \DateTimeZone('UTC'))->format('Y-m-d\TH:i:s\Z');
    }
    if (!is_null($this->getDuration())) {
      $array['duration'] = $this->getDuration();
    }
    if (!is_null($this->getTimezone())) {
      $array['timezone'] = $this->getTimezone()->getName();
    }
    if (!is_null($this->getPassword())) {
      $array['password'] = $this->getPassword();
    }
    if (!is_null($this->getH323Password())) {
      $array['h323_password'] = $this->getH323Password();
    }
    if (!is_null($this->getOptionJoinBeforeHost())) {
      $array['option_jbh'] = $this->getOptionJoinBeforeHost();
    }
    if (!is_null($this->getOptionStartHostVideo())) {
      $array['option_host_video'] = $this->getOptionStartHostVideo();
    }
    if (!is_null($this->getOptionStartParticipantVideo())) {
      $array['option_participants_video'] = $this->getOptionStartParticipantVideo();
    }
    if (!is_null($this->getOptionAudio())) {
      $array['option_audio'] = $this->getOptionAudio();
    }
    if (!is_null($this->getOptionEnforceLogin())) {
      $array['option_enforce_login'] = $this->getOptionEnforceLogin();
    }
    if (!is_null($this->getOptionEnforceLoginDomains())) {
      $array['option_enforce_login_domains'] = $this->getOptionEnforceLoginDomains();
    }
    if (!is_null($this->getOptionAlternateHosts())) {
      $array['option_alternative_hosts'] = $this->getOptionAlternateHosts();
    }
    if (!is_null($this->getOptionAlternateHostIds())) {
      $array['option_alternative_host_ids'] = $this->getOptionAlternateHostIds();
    }
    if (!is_null($this->getOptionUsePmi())) {
      $array['option_use_pmi'] = $this->getOptionUsePmi();
    }
    if (!is_null($this->getStatus())) {
      $array['status'] = $this->getStatus();
    }
    
    return $array;
  }

  /**
   * @param array $array
   * @return Meeting
   */
  static function fromArray($array) {
    $meeting = new Meeting($array['host_id'], $array['topic'], $array['type']);
    
    if (!empty($array['id'])) {
      $meeting->setId($array['id']);
    }
    if (!empty($array['uuid'])) {
      $meeting->setUuid($array['uuid']);
    }
    if (!empty($array['join_url'])) {
      $meeting->setJoinUrl($array['join_url']);
    }
    if (!empty($array['start_url'])) {
      $meeting->setStartUrl($array['start_url']);
    }
    if (!empty($array['created_at'])) {
      $meeting->setCreatedAt(new \DateTime($array['created_at']));
    }
    if (!empty($array['start_time'])) {
      $meeting->setStartTime(new \DateTime($array['start_time']));
    }
    if (!is_null($array['duration'])) {
      $meeting->setDuration($array['duration']);
    }
    if (!empty($array['timezone'])) {
      $meeting->setTimezone($array['timezone']);
    }
    if (!empty($array['password'])) {
      $meeting->setPassword($array['password']);
    }
    if (!empty($array['h323_password'])) {
      $meeting->setH323Password($array['h323_password']);
    }
    if (!is_null($array['option_jbh'])) {
      $meeting->setOptionJoinBeforeHost($array['option_jbh']);
    }
    if (!is_null($array['option_host_video'])) {
      $meeting->setOptionStartHostVideo($array['option_host_video']);
    }
    if (!is_null($array['option_participants_video'])) {
      $meeting->setOptionStartParticipantVideo($array['option_participants_video']);
    }
    if (!is_null($array['option_audio'])) {
      $meeting->setOptionAudio($array['option_audio']);
    }
    if (!is_null($array['option_enforce_login'])) {
      $meeting->setOptionEnforceLogin($array['option_enforce_login']);
    }
    if (!is_null($array['option_enforce_login_domains'])) {
      $meeting->setOptionEnforceLoginDomains($array['option_enforce_login_domains']);
    }
    if (!empty($array['option_alternative_hosts'])) {
      $meeting->setOptionAlternateHosts($array['option_alternative_hosts']);
    }
    if (!empty($array['option_alternative_host_ids'])) {
      $meeting->setOptionAlternateHostIds($array['option_alternative_host_ids']);
    }
    if (!is_null($array['option_use_pmi'])) {
      $meeting->getOptionUsePmi($array['option_use_pmi']);
    }
    if (!empty($array['status'])) {
      $meeting->setStatus($array['status']);
    }
    
    return $meeting;
  }

}
