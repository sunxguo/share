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
	public function activity(){
		// $id=isset($_GET['id'])?$_GET['id']:1;
		// $blockUrl="http://182.92.156.106:8080/AEWebApp/userShop/queryCustomBlock?blockId=".$id;
		// $result=httpGet($blockUrl);
		// $block=json_decode($result)->data;
		// $this->load->view('block',array("block"=>$block));
		$id=isset($_GET['shopId'])?$_GET['shopId']:1;
		$activityListUrl="http://182.92.156.106:8080/AEWebApp/userShop/queryActivityList?activityShopId=".$id;
		$result=httpGet($activityListUrl);
		$activityList=json_decode($result)->data;
		foreach ($activityList as $key => $value) {
			if ($value->activityId==$_GET['activityId']) {
				$activity=$value;
				break;
			}
		}
		// print_r($activity);
		$this->load->view('activity',array("activity"=>$activity));
	}
	public function block(){
		$id=isset($_GET['id'])?$_GET['id']:1;
		$blockUrl="http://182.92.156.106:8080/AEWebApp/userShop/queryCustomBlock?blockId=".$id;
		$result=httpGet($blockUrl);
		$block=json_decode($result)->data;
		$this->load->view('block',array("block"=>$block));
	}
}
