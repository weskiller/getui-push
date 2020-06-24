<?php

namespace Weskiller\GeTuiPush\IGeTui;

class IGtMessage
{
	protected  $isOffline;
	/*
	 * 过多久该消息离线失效（单位毫秒） 支持1-72小时*3600000秒，默认1小时
	 */
	protected $offlineExpireTime;

    /**
     * 0:联网方式不限;1:仅wifi;2:仅4G/3G/2G
     */
    protected $pushNetWorkType = 0;

	protected $data;

	 public function __construct()
	 {

	 }

	function get_isOffline()
	{
		return $this->isOffline;
	}
	function set_isOffline($isOffline)
	{
		return $this->isOffline = $isOffline;
	}
	function get_offlineExpireTime()
	{
		return $this->offlineExpireTime;
	}
	function set_offlineExpireTime($offlineExpireTime)
	{
		return $this->offlineExpireTime = $offlineExpireTime;
	}
    function get_pushNetWorkType()
    {
        return $this->pushNetWorkType;
    }
    function set_pushNetWorkType($pushNetWorkType)
    {
        return $this->pushNetWorkType = $pushNetWorkType;
    }
	function get_data()
	{
		return $this->data;
	}
	function set_data($data)
	{
		return $this->data = $data;
	}
}