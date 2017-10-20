<?php
namespace Xin\Thrift\MonitorService;
/**
 * Autogenerated by Thrift Compiler (0.10.0)
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


class Github_commitsLog_args {
  static $_TSPEC;

  /**
   * @var string
   */
  public $committer = null;
  /**
   * @var int
   */
  public $btime = null;
  /**
   * @var int
   */
  public $etime = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        -1 => array(
          'var' => 'committer',
          'type' => TType::STRING,
          ),
        -2 => array(
          'var' => 'btime',
          'type' => TType::I32,
          ),
        -3 => array(
          'var' => 'etime',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['committer'])) {
        $this->committer = $vals['committer'];
      }
      if (isset($vals['btime'])) {
        $this->btime = $vals['btime'];
      }
      if (isset($vals['etime'])) {
        $this->etime = $vals['etime'];
      }
    }
  }

  public function getName() {
    return 'Github_commitsLog_args';
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
        case -1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->committer);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case -2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->btime);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case -3:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->etime);
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
    $xfer += $output->writeStructBegin('Github_commitsLog_args');
    if ($this->etime !== null) {
      $xfer += $output->writeFieldBegin('etime', TType::I32, -3);
      $xfer += $output->writeI32($this->etime);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->btime !== null) {
      $xfer += $output->writeFieldBegin('btime', TType::I32, -2);
      $xfer += $output->writeI32($this->btime);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->committer !== null) {
      $xfer += $output->writeFieldBegin('committer', TType::STRING, -1);
      $xfer += $output->writeString($this->committer);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

