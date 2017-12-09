<?php
namespace Xin\Thrift\MonitorService;
/**
 * Autogenerated by Thrift Compiler (0.11.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


class Github_updateFollowing_args {
  static $isValidate = false;

  static $_TSPEC = array(
    1 => array(
      'var' => 'username',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    2 => array(
      'var' => 'token',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    );

  /**
   * @var string
   */
  public $username = null;
  /**
   * @var string
   */
  public $token = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      if (isset($vals['username'])) {
        $this->username = $vals['username'];
      }
      if (isset($vals['token'])) {
        $this->token = $vals['token'];
      }
    }
  }

  public function getName() {
    return 'Github_updateFollowing_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->username);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->token);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Github_updateFollowing_args');
    if ($this->username !== null) {
      $xfer += $output->writeFieldBegin('username', TType::STRING, 1);
      $xfer += $output->writeString($this->username);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->token !== null) {
      $xfer += $output->writeFieldBegin('token', TType::STRING, 2);
      $xfer += $output->writeString($this->token);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

