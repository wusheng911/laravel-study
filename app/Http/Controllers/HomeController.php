<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JavaScript;
use Cache;
use Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /* $this->middleware('auth'); */
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $documentRoot = $_SERVER['DOCUMENT_ROOT'];
        $musicDir = $documentRoot.'/assets/music/';
        $files=scandir($musicDir);
        $musicNames = array();
        foreach($files as $key=>$value)
        {
           $tmpArr = explode('.',$value);  
           if(array_pop($tmpArr) == 'mp3')
           {
                $musicNames[] = $value;
           }
        }
        return view('main.main',['musicList'=>$musicNames]);

	}
	public function get_wechat_signature(Request $request){

		//微信分享
		$minutes = 120;
		$appId = 'wx4dcfa2241b96bcb2';
		$secret = 'dd1b7839a21c0ac7fa8e492500ed656c';
		$access_token = Cache::get('wechat:access_token', function() use ($appId,$secret,$minutes){
			$url='https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$appId.'&secret='.$secret;
			$html = file_get_contents($url);
			$obj = json_decode($html);
			if(isset($obj->access_token)){
				$access_token = $obj->access_token;
			}else{
				$access_token = '';
			}
			Cache::put('wechat:access_token', $access_token, $minutes);
			return $access_token;
		});
		$ticket = Cache::get('wechat:ticket', function() use ($access_token, $minutes){
			$url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=".$access_token."&type=jsapi";
			$html = file_get_contents($url);
			$obj = json_decode($html);
			if(isset($obj->ticket)){
				$ticket = $obj->ticket;
			}else{
				$ticket = '';
			}
			Cache::put('wechat:ticket', $ticket, $minutes);
			return $ticket;
		});
		$timestamp = time();
		$noncestr = $this->generate_password(15);
		$weburl = 'http://'.$_SERVER['HTTP_HOST'].'/';
		$string1 = 'jsapi_ticket='.$ticket.'&noncestr='.$noncestr.'&timestamp='.$timestamp.'&url='.$weburl;
		$signature = sha1($string1);
        $json = ['timestamp' => $timestamp,
                 'noncestr' => $noncestr,
				 'signature' => $signature,
				 'appid' => $appId,
				 'secret' => $secret
                 ];
        return response()->json($json);
	}
	function generate_password( $length = 8 ) { 
		// 密码字符集，可任意添加你需要的字符 
		$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@$%^*()-_ []{}<>~`+=,.;:/?|'; 
		$password =''; 
		for ( $i = 0; $i < $length; $i++ ) 
		{ 
			// 这里提供两种字符获取方式 
			// 第一种是使用 substr 截取$chars中的任意一位字符； 
			// 第二种是取字符数组 $chars 的任意元素 
			// $password .= substr($chars, mt_rand(0, strlen($chars) – 1), 1); 
			$password .= $chars[ mt_rand(0, strlen($chars) - 1) ]; 
		} 
		return $password; 
	} 
}
