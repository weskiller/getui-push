<?php


namespace Weskiller\GeTuiPush\Library;


use Weskiller\GeTuiPush\Protobuf\PBMessage;
use Weskiller\GeTuiPush\Protobuf\Type\PBString;

class EndBatchTask extends PBMessage
{
    protected int $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = PBString::class;
        $this->values["1"] = "";
        $this->fields["2"] = PBString::class;
        $this->values["2"] = "";
    }
    function taskId()
    {
        return $this->_get_value("1");
    }
    function set_taskId($value)
    {
        $this->_set_value("1", $value);
    }
    function seqId()
    {
        return $this->_get_value("2");
    }
    function set_seqId($value)
    {
        $this->_set_value("2", $value);
    }
}