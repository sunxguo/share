<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Share extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper("base");
	}
	public function index(){
		$id=isset($_GET['id'])?$_GET['id']:1;

		$blocksUrl="http://182.92.156.106:8080/AEWebApp/userShop/getCustomBlockListByShopId?customBlockShopId=".$id;
		$result=httpGet($blocksUrl);
		$blocks=json_decode($result)->data;

		$activitiesUrl="http://182.92.156.106:8080/AEWebApp/userShop/queryActivityList?activityShopId=".$id;
		$result=httpGet($activitiesUrl);
		$activities=json_decode($result)->data;

		$categoriesUrl="http://182.92.156.106:8080/AEWebApp/userShop/queryShopCategoryListByShopId?shopId=".$id;
		$result=httpGet($categoriesUrl);
		$categories=json_decode($result)->data;

		$shopUrl="http://182.92.156.106:8080/AEWebApp/userShop/getShopByShopId?shopId=".$id;
		$result=httpGet($shopUrl);
		$shop=json_decode($result)->data;
		$this->load->view('shop',array("shop"=>$shop,"blocks"=>$blocks,"activities"=>$activities,"categories"=>$categories));
	}
	public function footPrint(){
		$id=isset($_GET['id'])?$_GET['id']:1;
		$userId=isset($_GET['userId'])?$_GET['userId']:1;
		$url = 'http://119.28.54.18:8080/travel/footPrint/select'; //将要被调用的接口信息，$lang['java_url']为常量，为固定IP
		$prame = array('id'=>$id,'curUserId'=>$userId); //将要传输到接口的参数数组
		$prame = json_encode($prame); //将数组装换为json格式
		$result = $this->hp($url, $prame); //调用接口，httpPost（）为调用方法，该方法返回接口调用结果赋值给$result变量
		//结果为json字符串
		$footPrint = json_decode($result)->data; //将接口返回的结果转换成普通数组
		// print_r($footPrint[0]);

		$url = 'http://119.28.54.18:8080/travel/laud/select'; //将要被调用的接口信息，$lang['java_url']为常量，为固定IP
		$prame = array('targetType'=>"foot_print",'targetId'=>$id,'pagenum'=>1,'pagesize'=>100); //将要传输到接口的参数数组
		$prame = json_encode($prame); //将数组装换为json格式
		$result = $this->hp($url, $prame); //调用接口，httpPost（）为调用方法，该方法返回接口调用结果赋值给$result变量
		//结果为json字符串
		$laud = json_decode($result)->pageInfo->list; //将接口返回的结果转换成普通数组
		

		$url = 'http://119.28.54.18:8080/travel/comment/select'; //将要被调用的接口信息，$lang['java_url']为常量，为固定IP
		$prame = array('targetType'=>"foot_print",'targetId'=>$id,'pagenum'=>1,'pagesize'=>10);
		$prame = json_encode($prame); 
		$result = $this->hp($url, $prame);
		$comment = json_decode($result)->pageInfo->list; //将接口返回的结果转换成普通数组
		// print_r($result);

		$this->load->view('footPrint',array("footPrint"=>$footPrint[0],"laud"=>$laud,"comment"=>$comment));
	}
	public function qa(){
		$id=isset($_GET['id'])?$_GET['id']:1;
		$userId=isset($_GET['userId'])?$_GET['userId']:1;
		$url = 'http://119.28.54.18:8080/travel/commQuestion/select'; //将要被调用的接口信息，$lang['java_url']为常量，为固定IP
		$prame = array('id'=>$id,'curUserId'=>$userId); //将要传输到接口的参数数组
		$prame = json_encode($prame); //将数组装换为json格式
		$result = $this->hp($url, $prame); //调用接口，httpPost（）为调用方法，该方法返回接口调用结果赋值给$result变量
		//结果为json字符串
		$question = json_decode($result)->data; //将接口返回的结果转换成普通数组

		$id=isset($_GET['id'])?$_GET['id']:1;
		$userId=isset($_GET['userId'])?$_GET['userId']:1;
		$url = 'http://119.28.54.18:8080/travel/commAnwser/select'; //将要被调用的接口信息，$lang['java_url']为常量，为固定IP
		$prame = array('commQuestionId'=>$id,'pagenum'=>1,'pagesize'=>100); //将要传输到接口的参数数组
		$prame = json_encode($prame); //将数组装换为json格式
		$anwsers = $this->hp($url, $prame); //调用接口，httpPost（）为调用方法，该方法返回接口调用结果赋值给$result变量
		$anwsers = json_decode($anwsers)->data; //将接口返回的结果转换成普通数组
		// print_r($anwsers);
		$this->load->view('qa',array("qa"=>$question[0],"anwsers"=>$anwsers));
	}
	public function rqa(){
		$id=isset($_GET['id'])?$_GET['id']:1;
		$userId=isset($_GET['userId'])?$_GET['userId']:1;
		$url = 'http://119.28.54.18:8080/travel/rewardQuestion/select'; //将要被调用的接口信息，$lang['java_url']为常量，为固定IP
		$prame = array('id'=>$id,'curUserId'=>$userId); //将要传输到接口的参数数组
		$prame = json_encode($prame); //将数组装换为json格式
		$result = $this->hp($url, $prame); //调用接口，httpPost（）为调用方法，该方法返回接口调用结果赋值给$result变量
		//结果为json字符串
		$question = json_decode($result)->data; //将接口返回的结果转换成普通数组
// print_r($question);
		$id=isset($_GET['id'])?$_GET['id']:1;
		$userId=isset($_GET['userId'])?$_GET['userId']:1;
		$url = 'http://119.28.54.18:8080/travel/rewardAnwser/select'; //将要被调用的接口信息，$lang['java_url']为常量，为固定IP
		$prame = array('commQuestionId '=>$id,'pagenum'=>1,'pagesize'=>100); //将要传输到接口的参数数组
		$prame = json_encode($prame); //将数组装换为json格式
		$anwsers = $this->hp($url, $prame); //调用接口，httpPost（）为调用方法，该方法返回接口调用结果赋值给$result变量
		$anwsers=json_decode($anwsers);
		$anwsers = isset($anwsers->data)?$anwsers->data:array(); //将接口返回的结果转换成普通数组
		// print_r($anwsers);
		$this->load->view('rqa',array("rqa"=>$question[0],"anwsers"=>$anwsers));
	}
	function hp($url, $param){
	    if ($param == '[]')
	        $param = '{}';
	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	    curl_setopt($ch, CURLOPT_POST, true);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/json;charset=utf-8"));
	    $html = curl_exec($ch);
	    curl_close($ch);
	    return $html;
	}
	public function block(){
		$id=isset($_GET['id'])?$_GET['id']:1;
		$blockUrl="http://182.92.156.106:8080/AEWebApp/userShop/queryCustomBlock?blockId=".$id;
		$result=httpGet($blockUrl);
		$block=json_decode($result)->data;
		$this->load->view('block',array("block"=>$block));
	}

}
