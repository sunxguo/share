<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link type="text/css" href="/assets/css/x_common.css" rel="stylesheet"/>
<link type="text/css" href="/assets/css/x_index.css" rel="stylesheet"/>
<style>
 body{ background-color:#ffffff;}
</style>
<title><?php echo $activity->activityName;?></title>
</head>

<body>
<ul class="x_Ctop" style="border-bottom:1px #000000 solid;">
	<li>
    	<a href="javascript:history.go(-1);">
        	<img src="/assets/images/20.png"/>
        </a>
    </li>
    <li>活动详情</li>
</ul>
<div class="x_At">
	<p class="x_Au"> <?php echo $activity->activityName;?></p>
    <p class="x_Av">发起人：<?php echo $activity->shopInfo->shopBranchName;?></p>
    <p class="x_Av">活动时间：<?php echo ($activity->activityBegintime)."~".($activity->activityEndtime);?></p>
</div>
<a href="#" class="x_Aw">
	<img src="/assets/images/17.png"/>
</a>
<a href="#" class="x_Ax"><?php echo $activity->content;?></a>
<ul class="x_Ay">
    <li>
        <a href="#" class="x_Az">
            <img src="<?php echo $activity->thumbnail1;?>"/>
        </a>
    </li>
    <li>
        <a href="#" class="x_Az">
            <img src="<?php echo $activity->thumbnail2;?>"/>
        </a>
    </li>
    <li>
        <a href="#" class="x_Az">
            <img src="<?php echo $activity->thumbnail3;?>"/>
        </a>
    </li>
    <li>
        <a href="#" class="x_Az">
            <img src="<?php echo $activity->thumbnail4;?>"/>
        </a>
    </li>
   <!--  <li>
    	<a href="#" class="x_Az">
        	<img src="/assets/images/16.png"/>
        </a>
        <a href="#" class="x_Ba">
        	为活动配上一段词为活动配上一段词为活动配上一段词
        </a>
    </li>
    <li>
    	<a href="#" class="x_Az">
        	<img src="/assets/images/16.png"/>
        </a>
        <a href="#" class="x_Ba">
        	为活动配上一段词为活动配上一段词为活动配上一段词
        </a>
    </li> -->
</ul>

</body>
</html>
