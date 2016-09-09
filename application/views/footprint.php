<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>足迹</title>
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<link rel="stylesheet" href="/assets/css/comman.css">
<link rel="stylesheet" href="/assets/css/zj.css">
</head>
<body style="padding-bottom:50px;">
<p class="r_nzd"><a href=""><!-- <img src="/assets/images/fhx.png"/> --></a>足迹详情</p>
<div class="r_xyw">
	<div class="r_png"><a href=""><img src="<?php echo $footPrint->ownerIcon;?>"/></a></div>
    <div class="r_jsn">
    	<a class="r_hlf" href=""><?php echo $footPrint->ownerName;?></a>
        <span class="r_rtf"><i><a href="">加我为好友</a></i><em><a href="">附近足迹</a></em></span>
        <div style="clear:both;"></div>
        <div class="r_sae"><?php echo $footPrint->content;?></div>
        <div class="r_gwl">
			<?php if($footPrint->image1):?>
            <img src="<?php echo $footPrint->image1;?>">
            <?php endif;?>
            <?php if($footPrint->image2):?>
            <img src="<?php echo $footPrint->image2;?>">
            <?php endif;?>
            <?php if($footPrint->image3):?>
            <img src="<?php echo $footPrint->image3;?>">
            <?php endif;?>
            <?php if($footPrint->image4):?>
            <img src="<?php echo $footPrint->image4;?>">
            <?php endif;?>
            <?php if($footPrint->image5):?>
            <img src="<?php echo $footPrint->image5;?>">
            <?php endif;?>
            <?php if($footPrint->image6):?>
            <img src="<?php echo $footPrint->image6;?>">
            <?php endif;?>
            <?php if($footPrint->image7):?>
            <img src="<?php echo $footPrint->image7;?>">
            <?php endif;?>
            <?php if($footPrint->image8):?>
            <img src="<?php echo $footPrint->image8;?>">
            <?php endif;?>
            <?php if($footPrint->image9):?>
            <img src="<?php echo $footPrint->image9;?>">
            <?php endif;?> 
        </div>
        <p class="r_yqo">#<?php echo $footPrint->country;?> <?php echo $footPrint->city;?></p>
        <p class="r_yqo"><?php echo round((time()-strtotime($footPrint->addTime))/3600/24);?>天前<span class="r_rtp"><i><?php echo sizeof($laud);?></i><!-- <em>1</em> --></span></p>
    </div>
</div>
<div class="r_nze">
    <?php foreach($laud as $l):?>
	<img src="<?php echo $l->laudatorIcon;?>"/>
    <?php endforeach;?>
</div>
<div class="r_nzx">
	<div class="r_xsr">
        <?php foreach($comment as $c):?>
    	<div class="r_bjk">
            <img src="<?php echo $c->reviewerIcon;?>" class="r_pbs"/>
            <div class="r_wya">
                <p style="clear:both; overflow:hidden;"><span class="r_nmz"><?php echo $c->reviewerName;?></span><em class="r_wmz"><?php echo $c->time;?></em></p>
                <p style="clear:both;"><?php echo $c->content;?></p>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>
<!-- <p class="r_sxm"><input type="text" placeholder="评论"/><span>发送</span></p> -->
</body>
</html>
