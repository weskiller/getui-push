<?php


namespace Weskiller\GeTuiPush\Library;


use Weskiller\GeTuiPush\Protobuf\PBMessage;
use Weskiller\GeTuiPush\Protobuf\Type\PBString;

class StopBatchTask extends PBMessage
{
    protected int $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = PBString::class;
        $this->values["1"] = "";
        $this->fields["2"] = PBString::class;
        $this->values["2"] = "";
        $this->fields["3"] = PBString::class;
        $this->values["3"] = "";
        $this->fields["4"] = PBString::class;
        $this->values["4"] = "";
    }
    function taskId()
    {
        return $this->_get_value("1");
    }
    function set_taskId($value)
    {
        $this->_set_value("1", $value);
    }
    function appkey()
    {
        return $this->_get_value("2");
    }
    function set_appkey($value)
    {
        $this->_set_value("2", $value);
    }
    function appId()
    {
        return $this->_get_value("3");
    }
    function set_appId($value)
    {
        $this->_set_value("3", $value);
    }
    function seqId()
    {
        return $this->_get_value("4");
    }
    function set_seqId($value)
    {
        $this->_set_value("4", $value);
    }
}