<?php


namespace Weskiller\GeTuiPush\Library;


use Weskiller\GeTuiPush\Protobuf\PBMessage;
use Weskiller\GeTuiPush\Protobuf\Type\PBBool;
use Weskiller\GeTuiPush\Protobuf\Type\PBString;

class PushMMPSingleBatchMessage extends PBMessage
{
    protected int $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = PBString::class;
        $this->values["1"] = "";
        $this->fields["2"] = PushMMPSingleMessage::class;
        $this->values["2"] = array();
        $this->fields["3"] = PBBool::class;
        $this->values["3"] = "";
        $pool = new PBBool();
        $pool->value = true;
        $this->values["3"] = $pool;
    }
    function batchId()
    {
        return $this->_get_value("1");
    }
    function set_batchId($value)
    {
        $this->_set_value("1", $value);
    }
    function batchItem($offset)
    {
        return $this->_get_arr_value("2", $offset);
    }
    function add_batchItem()
    {
        return $this->_add_arr_value("2");
    }
    function set_batchItem($index, $value)
    {
        $this->_set_arr_value("2", $index, $value);
    }
    function remove_last_batchItem()
    {
        $this->_remove_last_arr_value("2");
    }
    function batchItem_size()
    {
        return $this->_get_arr_size("2");
    }
    function isSync()
    {
        return $this->_get_value("3");
    }
    function set_isSync($value)
    {
        $this->_set_value("3", $value);
    }
}