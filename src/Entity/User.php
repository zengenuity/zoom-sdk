<?php

namespace Zengenuity\Zoom\Entity;

class User {

  const TYPE_BASIC = 1;
  const TYPE_PRO = 2;
  const TYPE_CORP = 3;
  
  const CAPACITY_ACCOUNT = 0;

  /**
   * @var string
   */
  protected $email;

  /**
   * @var string
   */
  protected $id;

  /**
   * @var \DateTime
   */
  protected $createdAt;

  /**
   * @var string
   */
  protected $firstName;

  /**
   * @var string
   */
  protected $lastName;

  /**
   * @var string
   */
  protected $picUrl;

  /**
   * @var int
   */
  protected $type;

  /**
   * @var bool
   */
  protected $disableChat;

  /**
   * @var bool
   */
  protected $enableE2EEncryption;

  /**
   * @var bool
   */
  protected $enableSilentMode;

  /**
   * @var bool
   */
  protected $disabledGroupHd;

  /**
   * @var bool
   */
  protected $disableRecording;

  /**
   * @var bool
   */
  protected $enableCloudMeetingRecord;

  /**
   * @var bool
   */
  protected $enableAutoRecording;

  /**
   * @var bool
   */
  protected $enableCloudAutoRecording;

  /**
   * @var bool
   */
  protected $verified;

  /**
   * @var int
   */
  protected $personalMeetingId;

  /**
   * @var int
   */
  protected $meetingCapacity;

  /**
   * @var bool
   */
  protected $enableWebinar;

  /**
   * @var int
   */
  protected $webinarCapacity;

  /**
   * @var bool
   */
  protected $enableLarge;

  /**
   * @var int
   */
  protected $largeCapacity;

  /**
   * @var bool
   */
  protected $disableFeedback;

  /**
   * @var bool
   */
  protected $disableJoinBeforeHostReminder;

  /**
   * @var bool
   */
  protected $enableBreakoutRoom;

  /**
   * @var bool
   */
  protected $enablePolling;

  /**
   * @var bool
   */
  protected $enableAnnotation;

  /**
   * @var bool
   */
  protected $enableShareDualCamera;

  /**
   * @var bool
   */
  protected $enableFarEndCameraControl;

  /**
   * @var bool
   */
  protected $disablePrivateChat;

  /**
   * @var bool
   */
  protected $enableEnterExitChime;

  /**
   * @var bool
   */
  protected $disableCancelMeetingNotification;

  /**
   * @var bool
   */
  protected $enableRemoteSupport;

  /**
   * @var bool
   */
  protected $enableFileTransfer;

  /**
   * @var bool
   */
  protected $enableVirtualBackground;

  /**
   * @var bool
   */
  protected $enableClosedCaption;

  /**
   * @var bool
   */
  protected $enableCoHost;

  /**
   * @var bool
   */
  protected $enableAutoSavingChats;

  /**
   * @var bool
   */
  protected $enablePhoneParticipantsPassword;

  /**
   * @var bool
   */
  protected $enableAutoDeleteCloudMeetingRecord;

  /**
   * @var string
   */
  protected $department;

  /**
   * @var string
   */
  protected $lastClientVersion;

  /**
   * @var \DateTime
   */
  protected $lastLoginTime;

  /**
   * @var string
   */
  protected $token;

  /**
   * @var string
   */
  protected $zpk;

  /**
   * @var string
   */
  protected $defaultGroupId;

  /**
   * @var string
   */
  protected $defaultIMGroupId;

  /**
   * @var string
   */
  protected $vanityUrl;

  /**
   * User constructor.
   * @param string $email
   * @param int $type
   */
  public function __construct($email, $type) {
    $this->email = $email;
    $this->type = $type;
  }

  /**
   * @return string
   */
  public function getEmail() {
    return $this->email;
  }

  /**
   * @param string $email
   * @return User
   */
  public function setEmail($email) {
    $this->email = $email;
    return $this;
  }

  /**
   * @return string
   */
  public function getId() {
    return $this->id;
  }

  /**
   * @param string $id
   * @return User
   */
  public function setId($id) {
    $this->id = $id;
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
   * @return User
   */
  public function setCreatedAt($createdAt) {
    $this->createdAt = $createdAt;
    return $this;
  }

  /**
   * @return string
   */
  public function getFirstName() {
    return $this->firstName;
  }

  /**
   * @param string $firstName
   * @return User
   */
  public function setFirstName($firstName) {
    $this->firstName = $firstName;
    return $this;
  }

  /**
   * @return string
   */
  public function getLastName() {
    return $this->lastName;
  }

  /**
   * @param string $lastName
   * @return User
   */
  public function setLastName($lastName) {
    $this->lastName = $lastName;
    return $this;
  }

  /**
   * @return string
   */
  public function getPicUrl() {
    return $this->picUrl;
  }

  /**
   * @param string $picUrl
   * @return User
   */
  public function setPicUrl($picUrl) {
    $this->picUrl = $picUrl;
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
   * @return User
   */
  public function setType($type) {
    $this->type = $type;
    return $this;
  }

  /**
   * @return bool
   */
  public function getDisableChat() {
    return $this->disableChat;
  }

  /**
   * @param bool $disableChat
   * @return User
   */
  public function setDisableChat($disableChat) {
    $this->disableChat = $disableChat;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnableE2EEncryption() {
    return $this->enableE2EEncryption;
  }

  /**
   * @param bool $enableE2EEncryption
   * @return User
   */
  public function setEnableE2EEncryption($enableE2EEncryption) {
    $this->enableE2EEncryption = $enableE2EEncryption;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnableSilentMode() {
    return $this->enableSilentMode;
  }

  /**
   * @param bool $enableSilentMode
   * @return User
   */
  public function setEnableSilentMode($enableSilentMode) {
    $this->enableSilentMode = $enableSilentMode;
    return $this;
  }

  /**
   * @return bool
   */
  public function getDisabledGroupHd() {
    return $this->disabledGroupHd;
  }

  /**
   * @param bool $disabledGroupHd
   * @return User
   */
  public function setDisabledGroupHd($disabledGroupHd) {
    $this->disabledGroupHd = $disabledGroupHd;
    return $this;
  }

  /**
   * @return bool
   */
  public function getDisableRecording() {
    return $this->disableRecording;
  }

  /**
   * @param bool $disableRecording
   * @return User
   */
  public function setDisableRecording($disableRecording) {
    $this->disableRecording = $disableRecording;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnableCloudMeetingRecord() {
    return $this->enableCloudMeetingRecord;
  }

  /**
   * @param bool $enableCloudMeetingRecord
   * @return User
   */
  public function setEnableCloudMeetingRecord($enableCloudMeetingRecord) {
    $this->enableCloudMeetingRecord = $enableCloudMeetingRecord;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnableAutoRecording() {
    return $this->enableAutoRecording;
  }

  /**
   * @param bool $enableAutoRecording
   * @return User
   */
  public function setEnableAutoRecording($enableAutoRecording) {
    $this->enableAutoRecording = $enableAutoRecording;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnableCloudAutoRecording() {
    return $this->enableCloudAutoRecording;
  }

  /**
   * @param bool $enableCloudAutoRecording
   * @return User
   */
  public function setEnableCloudAutoRecording($enableCloudAutoRecording) {
    $this->enableCloudAutoRecording = $enableCloudAutoRecording;
    return $this;
  }

  /**
   * @return bool
   */
  public function getVerified() {
    return $this->verified;
  }

  /**
   * @param bool $verified
   * @return User
   */
  public function setVerified($verified) {
    $this->verified = $verified;
    return $this;
  }

  /**
   * @return int
   */
  public function getPersonalMeetingId() {
    return $this->personalMeetingId;
  }

  /**
   * @param int $personalMeetingId
   * @return User
   */
  public function setPersonalMeetingId($personalMeetingId) {
    $this->personalMeetingId = $personalMeetingId;
    return $this;
  }

  /**
   * @return int
   */
  public function getMeetingCapacity() {
    return $this->meetingCapacity;
  }

  /**
   * @param int $meetingCapacity
   * @return User
   */
  public function setMeetingCapacity($meetingCapacity) {
    $this->meetingCapacity = $meetingCapacity;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnableWebinar() {
    return $this->enableWebinar;
  }

  /**
   * @param bool $enableWebinar
   * @return User
   */
  public function setEnableWebinar($enableWebinar) {
    $this->enableWebinar = $enableWebinar;
    return $this;
  }

  /**
   * @return int
   */
  public function getWebinarCapacity() {
    return $this->webinarCapacity;
  }

  /**
   * @param int $webinarCapacity
   * @return User
   */
  public function setWebinarCapacity($webinarCapacity) {
    $this->webinarCapacity = $webinarCapacity;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnableLarge() {
    return $this->enableLarge;
  }

  /**
   * @param bool $enableLarge
   * @return User
   */
  public function setEnableLarge($enableLarge) {
    $this->enableLarge = $enableLarge;
    return $this;
  }

  /**
   * @return int
   */
  public function getLargeCapacity() {
    return $this->largeCapacity;
  }

  /**
   * @param int $largeCapacity
   * @return User
   */
  public function setLargeCapacity($largeCapacity) {
    $this->largeCapacity = $largeCapacity;
    return $this;
  }

  /**
   * @return bool
   */
  public function getDisableFeedback() {
    return $this->disableFeedback;
  }

  /**
   * @param bool $disableFeedback
   * @return User
   */
  public function setDisableFeedback($disableFeedback) {
    $this->disableFeedback = $disableFeedback;
    return $this;
  }

  /**
   * @return bool
   */
  public function getDisableJoinBeforeHostReminder() {
    return $this->disableJoinBeforeHostReminder;
  }

  /**
   * @param bool $disableJoinBeforeHostReminder
   * @return User
   */
  public function setDisableJoinBeforeHostReminder($disableJoinBeforeHostReminder) {
    $this->disableJoinBeforeHostReminder = $disableJoinBeforeHostReminder;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnableBreakoutRoom() {
    return $this->enableBreakoutRoom;
  }

  /**
   * @param bool $enableBreakoutRoom
   * @return User
   */
  public function setEnableBreakoutRoom($enableBreakoutRoom) {
    $this->enableBreakoutRoom = $enableBreakoutRoom;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnablePolling() {
    return $this->enablePolling;
  }

  /**
   * @param bool $enablePolling
   * @return User
   */
  public function setEnablePolling($enablePolling) {
    $this->enablePolling = $enablePolling;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnableAnnotation() {
    return $this->enableAnnotation;
  }

  /**
   * @param bool $enableAnnotation
   * @return User
   */
  public function setEnableAnnotation($enableAnnotation) {
    $this->enableAnnotation = $enableAnnotation;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnableShareDualCamera() {
    return $this->enableShareDualCamera;
  }

  /**
   * @param bool $enableShareDualCamera
   * @return User
   */
  public function setEnableShareDualCamera($enableShareDualCamera) {
    $this->enableShareDualCamera = $enableShareDualCamera;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnableFarEndCameraControl() {
    return $this->enableFarEndCameraControl;
  }

  /**
   * @param bool $enableFarEndCameraControl
   * @return User
   */
  public function setEnableFarEndCameraControl($enableFarEndCameraControl) {
    $this->enableFarEndCameraControl = $enableFarEndCameraControl;
    return $this;
  }

  /**
   * @return bool
   */
  public function getDisablePrivateChat() {
    return $this->disablePrivateChat;
  }

  /**
   * @param bool $disablePrivateChat
   * @return User
   */
  public function setDisablePrivateChat($disablePrivateChat) {
    $this->disablePrivateChat = $disablePrivateChat;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnableEnterExitChime() {
    return $this->enableEnterExitChime;
  }

  /**
   * @param bool $enableEnterExitChime
   * @return User
   */
  public function setEnableEnterExitChime($enableEnterExitChime) {
    $this->enableEnterExitChime = $enableEnterExitChime;
    return $this;
  }

  /**
   * @return bool
   */
  public function getDisableCancelMeetingNotification() {
    return $this->disableCancelMeetingNotification;
  }

  /**
   * @param bool $disableCancelMeetingNotification
   * @return User
   */
  public function setDisableCancelMeetingNotification($disableCancelMeetingNotification) {
    $this->disableCancelMeetingNotification = $disableCancelMeetingNotification;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnableRemoteSupport() {
    return $this->enableRemoteSupport;
  }

  /**
   * @param bool $enableRemoteSupport
   * @return User
   */
  public function setEnableRemoteSupport($enableRemoteSupport) {
    $this->enableRemoteSupport = $enableRemoteSupport;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnableFileTransfer() {
    return $this->enableFileTransfer;
  }

  /**
   * @param bool $enableFileTransfer
   * @return User
   */
  public function setEnableFileTransfer($enableFileTransfer) {
    $this->enableFileTransfer = $enableFileTransfer;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnableVirtualBackground() {
    return $this->enableVirtualBackground;
  }

  /**
   * @param bool $enableVirtualBackground
   * @return User
   */
  public function setEnableVirtualBackground($enableVirtualBackground) {
    $this->enableVirtualBackground = $enableVirtualBackground;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnableClosedCaption() {
    return $this->enableClosedCaption;
  }

  /**
   * @param bool $enableClosedCaption
   * @return User
   */
  public function setEnableClosedCaption($enableClosedCaption) {
    $this->enableClosedCaption = $enableClosedCaption;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnableCoHost() {
    return $this->enableCoHost;
  }

  /**
   * @param bool $enableCoHost
   * @return User
   */
  public function setEnableCoHost($enableCoHost) {
    $this->enableCoHost = $enableCoHost;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnableAutoSavingChats() {
    return $this->enableAutoSavingChats;
  }

  /**
   * @param bool $enableAutoSavingChats
   * @return User
   */
  public function setEnableAutoSavingChats($enableAutoSavingChats) {
    $this->enableAutoSavingChats = $enableAutoSavingChats;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnablePhoneParticipantsPassword() {
    return $this->enablePhoneParticipantsPassword;
  }

  /**
   * @param bool $enablePhoneParticipantsPassword
   * @return User
   */
  public function setEnablePhoneParticipantsPassword($enablePhoneParticipantsPassword) {
    $this->enablePhoneParticipantsPassword = $enablePhoneParticipantsPassword;
    return $this;
  }

  /**
   * @return bool
   */
  public function getEnableAutoDeleteCloudMeetingRecord() {
    return $this->enableAutoDeleteCloudMeetingRecord;
  }

  /**
   * @param bool $enableAutoDeleteCloudMeetingRecord
   * @return User
   */
  public function setEnableAutoDeleteCloudMeetingRecord($enableAutoDeleteCloudMeetingRecord) {
    $this->enableAutoDeleteCloudMeetingRecord = $enableAutoDeleteCloudMeetingRecord;
    return $this;
  }

  /**
   * @return string
   */
  public function getDepartment() {
    return $this->department;
  }

  /**
   * @param string $department
   * @return User
   */
  public function setDepartment($department) {
    $this->department = $department;
    return $this;
  }

  /**
   * @return string
   */
  public function getLastClientVersion() {
    return $this->lastClientVersion;
  }

  /**
   * @param string $lastClientVersion
   * @return User
   */
  public function setLastClientVersion($lastClientVersion) {
    $this->lastClientVersion = $lastClientVersion;
    return $this;
  }

  /**
   * @return string
   */
  public function getToken() {
    return $this->token;
  }

  /**
   * @param string $token
   * @return User
   */
  public function setToken($token) {
    $this->token = $token;
    return $this;
  }

  /**
   * @return string
   */
  public function getZpk() {
    return $this->zpk;
  }

  /**
   * @param string $zpk
   * @return User
   */
  public function setZpk($zpk) {
    $this->zpk = $zpk;
    return $this;
  }

  /**
   * @return string
   */
  public function getDefaultGroupId() {
    return $this->defaultGroupId;
  }

  /**
   * @param string $defaultGroupId
   * @return User
   */
  public function setDefaultGroupId($defaultGroupId) {
    $this->defaultGroupId = $defaultGroupId;
    return $this;
  }

  /**
   * @return string
   */
  public function getDefaultIMGroupId() {
    return $this->defaultIMGroupId;
  }

  /**
   * @param string $defaultIMGroupId
   * @return User
   */
  public function setDefaultIMGroupId($defaultIMGroupId) {
    $this->defaultIMGroupId = $defaultIMGroupId;
    return $this;
  }

  /**
   * @return \DateTime
   */
  public function getLastLoginTime() {
    return $this->lastLoginTime;
  }

  /**
   * @param \DateTime $lastLoginTime
   * @return User
   */
  public function setLastLoginTime($lastLoginTime) {
    $this->lastLoginTime = $lastLoginTime;
    return $this;
  }

  /**
   * @return string
   */
  public function getVanityUrl() {
    return $this->vanityUrl;
  }

  /**
   * @param string $vanityUrl
   * @return User
   */
  public function setVanityUrl($vanityUrl) {
    $this->vanityUrl = $vanityUrl;
    return $this;
  }
  

  /**
   * @return array
   */
  public function toArray() {
    $array = [];

    if (!is_null($this->getEmail())) {
      $array['email'] = $this->getEmail();
    }
    if (!is_null($this->getId())) {
      $array['id'] = $this->getId();
    }
    if (!is_null($this->getCreatedAt())) {
      $array['created_at'] = $this->getCreatedAt()->setTimezone(new \DateTimeZone('UTC'))->format('Y-m-d\TH:i:s\Z');
    }
    if (!is_null($this->getFirstName())) {
      $array['first_name'] = $this->getFirstName();
    }
    if (!is_null($this->getLastName())) {
      $array['last_name'] = $this->getLastName();
    }
    if (!is_null($this->getPicUrl())) {
      $array['pic_url'] = $this->getPicUrl();
    }
    if (!is_null($this->getType())) {
      $array['type'] = $this->getType();
    }
    if (!is_null($this->getDisableChat())) {
      $array['disable_chat'] = $this->getDisableChat();
    }
    if (!is_null($this->getEnableE2EEncryption())) {
      $array['enable_e2e_encryption'] = $this->getEnableE2EEncryption();
    }
    if (!is_null($this->getEnableSilentMode())) {
      $array['enable_silent_mode'] = $this->getEnableSilentMode();
    }
    if (!is_null($this->getDisabledGroupHd())) {
      $array['disable_group_hd'] = $this->getDisabledGroupHd();
    }
    if (!is_null($this->getDisableRecording())) {
      $array['disable_recording'] = $this->getDisableRecording();
    }
    if (!is_null($this->getEnableCloudMeetingRecord())) {
      $array['enable_cmr'] = $this->getEnableCloudMeetingRecord();
    }
    if (!is_null($this->getEnableAutoRecording())) {
      $array['enable_auto_recording'] = $this->getEnableAutoRecording();
    }
    if (!is_null($this->getEnableAutoDeleteCloudMeetingRecord())) {
      $array['enable_cloud_auto_recording'] = $this->getEnableAutoDeleteCloudMeetingRecord();
    }
    if (!is_null($this->getVerified())) {
      $array['verified'] = (int) $this->getVerified();
    }
    if (!is_null($this->getPersonalMeetingId())) {
      $array['pmi'] = $this->getPersonalMeetingId();
    }
    if (!is_null($this->getMeetingCapacity())) {
      $array['meeting_capacity'] = $this->getMeetingCapacity();
    }
    if (!is_null($this->getEnableWebinar())) {
      $array['enable_webinar'] = $this->getEnableWebinar();
    }
    if (!is_null($this->getWebinarCapacity())) {
      $array['webinar_capacity'] = $this->getWebinarCapacity();
    }
    if (!is_null($this->getEnableLarge())) {
      $array['enable_large'] = $this->getEnableLarge();
    }
    if (!is_null($this->getLargeCapacity())) {
      $array['large_capacity'] = $this->getLargeCapacity();
    }
    if (!is_null($this->getEnableLarge())) {
      $array['enable_large'] = $this->getEnableLarge();
    }
    if (!is_null($this->getDisableFeedback())) {
      $array['disable_feedback'] = $this->getDisableFeedback();
    }
    if (!is_null($this->getDisableJoinBeforeHostReminder())) {
      $array['disable_jbh_reminder'] = $this->getDisableJoinBeforeHostReminder();
    }
    if (!is_null($this->getEnableBreakoutRoom())) {
      $array['enable_breakout_room'] = $this->getEnableBreakoutRoom();
    }
    if (!is_null($this->getEnablePolling())) {
      $array['enable_polling'] = $this->getEnablePolling();
    }
    if (!is_null($this->getEnableAnnotation())) {
      $array['enable_annotation'] = $this->getEnableAnnotation();
    }
    if (!is_null($this->getEnableShareDualCamera())) {
      $array['enable_share_dual_camera'] = $this->getEnableShareDualCamera();
    }
    if (!is_null($this->getEnableFarEndCameraControl())) {
      $array['enable_far_end_camera_control'] = $this->getEnableFarEndCameraControl();
    }
    if (!is_null($this->getDisablePrivateChat())) {
      $array['disable_private_chat'] = $this->getDisablePrivateChat();
    }
    if (!is_null($this->getEnableEnterExitChime())) {
      $array['enable_enter_exit_chime'] = $this->getEnableEnterExitChime();
    }
    if (!is_null($this->getDisableCancelMeetingNotification())) {
      $array['disable_cancel_meeting_notification'] = $this->getDisableCancelMeetingNotification();
    }
    if (!is_null($this->getEnableRemoteSupport())) {
      $array['enable_remote_support'] = $this->getEnableRemoteSupport();
    }
    if (!is_null($this->getEnableFileTransfer())) {
      $array['enable_file_transfer'] = $this->getEnableFileTransfer();
    }
    if (!is_null($this->getEnableVirtualBackground())) {
      $array['enable_virtual_background'] = $this->getEnableVirtualBackground();
    }
    if (!is_null($this->getEnableClosedCaption())) {
      $array['enable_closed_caption'] = $this->getEnableClosedCaption();
    }
    if (!is_null($this->getEnableCoHost())) {
      $array['enable_co_host'] = $this->getEnableCoHost();
    }
    if (!is_null($this->getEnableAutoSavingChats())) {
      $array['enable_auto_saving_chats'] = $this->getEnableAutoSavingChats();
    }
    if (!is_null($this->getEnablePhoneParticipantsPassword())) {
      $array['enable_phone_participants_password'] = $this->getEnablePhoneParticipantsPassword();
    }
    if (!is_null($this->getEnableAutoDeleteCloudMeetingRecord())) {
      $array['enable_auto_delete_cmr'] = $this->getEnableAutoDeleteCloudMeetingRecord();
    }
    if (!is_null($this->getDepartment())) {
      $array['dept'] = $this->getDepartment();
    }
    if (!is_null($this->getLastClientVersion())) {
      $array['lastClientVersion'] = $this->getLastClientVersion();
    }
    if (!is_null($this->getLastLoginTime())) {
      $array['lastLoginTime'] = $this->getLastLoginTime()->setTimezone(new \DateTimeZone('UTC'))->format('Y-m-d\TH:i:s\Z');
    }
    if (!is_null($this->getToken())) {
      $array['token'] = $this->getToken();
    }
    if (!is_null($this->getZpk())) {
      $array['zpk'] = $this->getZpk();
    }
    if (!is_null($this->getDefaultGroupId())) {
      $array['group_id'] = $this->getDefaultGroupId();
    }
    if (!is_null($this->getDefaultIMGroupId())) {
      $array['imgroup_id'] = $this->getDefaultIMGroupId();
    }
    if (!is_null($this->getVanityUrl())) {
      $array['vanity_url'] = $this->getVanityUrl();
    }
    
    return $array;
  }

  /**
   * @param $array
   * @return User
   */
  static function fromArray($array) {
    $user = new User($array['email'], $array['type']);

    if (!empty($array['id'])) {
      $user->setId($array['id']);
    }
    if (!empty($array['created_at'])) {
      $user->setCreatedAt(new \DateTime($array['created_at']));
    }
    if (!empty($array['first_name'])) {
      $user->setFirstName($array['first_name']);
    }
    if (!empty($array['last_name'])) {
      $user->setLastName($array['last_name']);
    }
    if (!is_null($array['verified'])) {
      $user->setVerified((bool) $array['verified']);
    }
    if (!empty($array['pmi'])) {
      $user->setPersonalMeetingId($array['pmi']);
    }
    if (!empty($array['lastClientVersion'])) {
      $user->setLastClientVersion($array['lastClientVersion']);
    }
    if (!empty($array['lastLoginTime'])) {
      $user->setLastLoginTime(new \DateTime($array['lastLoginTime']));
    }
    return $user;
  }
  
}
