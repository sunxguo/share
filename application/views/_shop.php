<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $shop->shopBranchName;?></title>
	<link href="/assets/Hui-iconfont/iconfont.css" rel="stylesheet" type="text/css" />
	<link href="/assets/css/base.css" rel="stylesheet" type="text/css" />
	<link href="/assets/css/shop.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<section class="top">
		<img class="shop-image" src="<?php echo $shop->shopTopPic1;?>">
		<div class="part comment">
			<div class="star fl" style="color:rgb(255,138,0);">
				<i class="Hui-iconfont">&#xe6ff;</i>
				<i class="Hui-iconfont">&#xe6ff;</i>
				<i class="Hui-iconfont">&#xe6ff;</i>
				<i class="Hui-iconfont">&#xe6ff;</i>
				<i class="Hui-iconfont color-w">&#xe6ff;</i>
			</div>
			<div class="followers bt fr">关注量 <span id="followNumber">50</span></div>
		</div>
		<div class="part info">
			<div class="coupon fl">领取优惠券：满50减5</div>
			<div class="command fr">口令集：<?php echo $shop->word;?></div>
		</div>
	</section>
	<section class="shop-info border-b1">
		<div class="name clearfix">
			<div class="name-txt fl">
				<?php echo $shop->shopBranchName;?>
			</div>
			<div class="bt fr">
				未关注
			</div>
		</div>
		<div class="notice">
			营业时间：<?php echo $shop->shopBusinessHours;?> <br>
			<?php if($shop->shopWifiStatus==1):?>用户名：<?php echo $shop->shopWifiUsername;?> 密码：<?php echo $shop->shopWifiPassword;?>（免费WIFI）<?php endif;?>
		</div>
	</section>
	<section class="contact border-b1 clearfix">
		<div class="address fl">
			<i class="Hui-iconfont">&#xe6c9;</i>
			<?php echo $shop->shopCity.$shop->shopArea.$shop->shopDetailAddress;?>
		</div>
		<div class="icon-phone border-l1 fr">
			<a href="tel:<?php echo $shop->shopTel;?>" class="call">
				<i class="Hui-iconfont">&#xe6c7;</i>
			</a>
		</div>
	</section>
	<?php /*foreach($activities as $activity):?>
	<section class="activity">
		<img src="<?php echo $activity->customBlockPic1;?>">
		<p class="title"><?php echo $activity->customBlockTitle;?></p>
	</section>
	<?php endforeach;*/?>
	<!-- <section>
		<div class="cat">
			<ul class="category-list">
				<li>店长推荐</li>
				<li>咖啡</li>
			</ul>
			<div class="detail"></div>
		</div>
	</section> -->
	<?php foreach($descriptions as $desc):?>
	<section class="pro-list border-t1 clearfix">
		<h2><?php echo $desc->customBlockTitle;?></h2>
		<p class="description">
			<?php echo $desc->customBlockContent;?>
		</p>
		<ul>
			<?php if(!is_null($desc->customBlockPic1)):?>
			<li>
				<a href="/share/block?id=<?php echo $desc->blockId;?>">
					<img src="<?php echo $desc->customBlockPic1;?>">
				</a>
			</li>
			<?php endif;?>
			<?php if(!is_null($desc->customBlockPic2)):?>
			<li>
				<a href="/share/block?id=<?php echo $desc->blockId;?>">
					<img src="<?php echo $desc->customBlockPic2;?>">
				</a>
			</li>
			<?php endif;?>
			<?php if(!is_null($desc->customBlockPic3)):?>
			<li>
				<a href="/share/block?id=<?php echo $desc->blockId;?>">
					<img src="<?php echo $desc->customBlockPic3;?>">
				</a>
			</li>
			<?php endif;?>
		</ul>
	</section>
	<?php endforeach;?>
</body>
</html>