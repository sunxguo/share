<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>悬赏问答详情</title>
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<link rel="stylesheet" href="/assets/css/comman.css">
<link rel="stylesheet" href="/assets/css/zj.css">
<link href="/assets/Hui-iconfont/iconfont.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/assets/js/jquery.js"></script>
<script type="text/javascript" src="/assets/js/sj.js"></script>
</head>

<body>
<p class="r_nzd"><!-- <a href=""><img src="/assets/images/fhx.png"/></a><span class="r_tgm">泰国/曼谷</span> -->悬赏问答详情</p>
<div class="r_zgd">
	<div class="r_gsl">
    	<a><img src="<?php echo $rqa->user->icon;?>"/></a>
        <div class="r_yxs">
        	<p class="r_ysw"><?php echo $rqa->user->nikeName;?></p>
            <p><?php echo $rqa->user->signature;?></p>
        </div>
    </div>
    <p><?php echo $rqa->content;?></p>
    <p>#<?php echo $rqa->country;?> <?php echo $rqa->city;?></p>
    <p class="r_qds"><?php echo round((time()-strtotime($rqa->addTime))/3600/24);?>天前
    	<span style="width: inherit;overflow:inherit;">
            <em>
                <i class="Hui-iconfont" style="color:rgb(252,199,111);font-size:1.7em;vertical-align: middle;">&#xe6b5;</i>
                <?php echo $rqa->money;?>
                <img src="<?php echo $rqa->travelTypeTab->icon;?>"/><?php echo $rqa->travelTypeTab->name;?>
            </em>
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
