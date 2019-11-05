<?php
namespace app\admin\controller;

use app\Request;
use app\models\msg\WxBizMsgCrypt;

/**
 * 
 */
class Msg
{
	
	public function index(){
		$token = "123456789";
		$timeStamp = Request::param("timeStamp");
		$nonce = Request::param("nonce");
		$signature = Request::param("signature");
		// $result = WxBizMsgCrypt::
	}
	/**
	 *微信推送消息借口验证
	 */
	public function checkSignature()
	{
	    $signature = $_GET["signature"];
	    $timestamp = $_GET["timestamp"];
	    $nonce = $_GET["nonce"];

	    $token = "123456789";
	    $tmpArr = array($token, $timestamp, $nonce);
	    sort($tmpArr, SORT_STRING);
	    $tmpStr = implode( $tmpArr );
	    $tmpStr = sha1( $tmpStr );

	    if ($tmpStr == $signature ) {
	        return true;
	    } else {
	        return false;
	    }
	}
}