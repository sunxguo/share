<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<link rel="stylesheet" href="/assets/css/comman.css">
<link rel="stylesheet" href="/assets/css/zj.css">
<script type="text/javascript" src="/assets/js/jquery.js"></script>
<script type="text/javascript" src="/assets/js/sj.js"></script>
</head>

<body>
<p class="r_nzd"><!-- <a href=""><img src="/assets/images/fhx.png"/></a><span class="r_tgm">泰国/曼谷</span> -->问答详情</p>
<div class="r_zgd">
	<div class="r_gsl">
    	<a><img src="<?php echo $qa->user->icon;?>"/></a>
        <div class="r_yxs">
        	<p class="r_ysw"><?php echo $qa->user->nikeName;?></p>
            <p><?php echo $qa->user->signature;?></p>
        </div>
    </div>
    <p><?php echo $qa->content;?></p>
    <p>#<?php echo $qa->country;?> <?php echo $qa->city;?></p>
    <p class="r_qds"><?php echo round((time()-strtotime($qa->addTime))/3600/24);?>天前
    	<span style="width: inherit;">
            <em><img src="<?php echo $qa->travelTypeTab->icon;?>"/><?php echo $qa->travelTypeTab->name;?></em>
            <!-- <i class="r_ydz"><img src="/assets/images/shouca.png" class="r_zjs"/><img src="/assets/images/sho.png" class="zbs"/>收藏</i> -->
        </span>
    </p>
</div>
<p class="r_dwd"><?php echo sizeof($anwsers);?>条回答</p>
<?php foreach($anwsers as $a):?>
<div class="r_zgd r_yqs">
	<div class="r_gsl">
    	<a><img src="<?php echo $a->commAnwserOnwerVo->commAnwserOnwerIcon;?>"/></a>
        <div class="r_yxs">
        	<p class="r_ysw"><?php echo $a->commAnwserOnwerVo->commAnwserOnwerName;?></p>
            <p><?php echo $a->country;?> <?php echo $a->city;?></p>
        </div>
    </div>
    <p><?php echo $a->content;?></p>
    <p>#<?php echo $a->commAnwserOnwerVo->commAnwserOnwerCountry;?> <?php echo $a->commAnwserOnwerVo->commAnwserOnwerCity;?></p>
    <p class="r_qds"><?php echo round((time()-strtotime($a->addTime))/3600/24);?>天前
    	<!-- <span>
        	<em class="r_ydz"><img src="/assets/images/dian.png" class="r_zjs"/><img src="/assets/images/zan.png" class="zbs"/>赞</em>
            <i><img src="/assets/images/huif.png"/>回复</i>
        </span> -->
    </p>
</div>
<?php endforeach;?>
</body>
</html>
