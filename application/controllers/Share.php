<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Share extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper("base");
	}
	public function index(){
		$id=isset($_GET['id'])?$_GET['id']:1;
		$descriptionUrl="http://182.92.156.106:8080/AEWebApp/userShop/getCustomBlockListByShopId?customBlockShopId=".$id;
		$result=httpGet($descriptionUrl);
		$descriptions=json_decode($result)->data;
		$shopUrl="http://182.92.156.106:8080/AEWebApp/userShop/getShopByShopId?shopId=".$id;
		$result=httpGet($shopUrl);
		$shop=json_decode($result)->data;
		$this->load->view('shop',array("shop"=>$shop,"descriptions"=>$descriptions));
	}
	public function block(){
		$id=isset($_GET['id'])?$_GET['id']:1;
		$blockUrl="http://182.92.156.106:8080/AEWebApp/userShop/queryCustomBlock?blockId=".$id;
		$result=httpGet($blockUrl);
		$block=json_decode($result)->data;
		$this->load->view('block',array("block"=>$block));
	}
}
