<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link type="text/css" href="/assets/css/x_common.css" rel="stylesheet"/>
<link type="text/css" href="/assets/css/footprint.css" rel="stylesheet"/>
<link href="/assets/Hui-iconfont/iconfont.css" rel="stylesheet" type="text/css" />
<style>
 body{ background-color:#ffffff;}
</style>
<title>足迹详情</title>
</head>

<body>
<div class="top">
	<!-- <li>
    	<a href="javascript:history.go(-1);">
        	<img src="/assets/images/20.png"/>
        </a>
    </li> -->
    足迹详情
</div>
<div class="main clearfix">
    <div class="avatar">
        <img src="<?php echo $footPrint->ownerIcon;?>">
        <div class="user-info">
            <div class="name"><?php echo $footPrint->ownerName;?>
                <!-- <span class="signature"><?php echo $footprint->ownerName;?></span> -->
            </div>
        </div>
    </div>
    <div class="right">
        <div class="content">
            <p class="text"><?php echo $footPrint->content;?></p>
            <div class="image-list">
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

        </div>
    </div>
</div>
<div class="comment">
    <div class="like-users">
        <i class="Hui-iconfont">&#xe649;</i>
        <ul>
            <?php foreach($laud as $l):?>
            <li><img src="<?php echo $l->laudatorIcon;?>"></li>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="comment-users">
         <i class="Hui-iconfont">&#xe686;</i>
         <ul>
            <?php foreach($comment as $c):?>
             <li>
                 <img src="<?php echo $c->reviewerIcon;?>">
                 <div class="comment-li">
                     <div class="info clearfix">
                         <p class="name"><?php echo $c->reviewerName;?></p>
                         <p class="time"><?php echo $c->time;?></p>
                     </div>
                     <div class="content">
                         <?php echo $c->content;?>
                     </div>
                 </div>
             </li>
            <?php endforeach;?>
         </ul>
    </div>
</div>

</body>
</html>
