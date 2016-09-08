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
<title>问答详情</title>
</head>

<body>
<div class="top">
	<!-- <li>
    	<a href="javascript:history.go(-1);">
        	<img src="/assets/images/20.png"/>
        </a>
    </li> -->
    悬赏问答详情
</div>
<div class="main clearfix">
    <div class="avatar" style="margin-top:5px;">
        <img src="<?php echo $rqa->user->icon;?>">
        <div class="user-info">
            <div class="name"><?php echo $rqa->user->nikeName;?>
                <span class="signature"><?php echo $rqa->user->signature;?></span>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="content">
            <p class="text"><?php echo $rqa->content;?></p>
            #<?php echo $rqa->country;?> <?php echo $rqa->city;?><br>
            <?php echo round((time()-strtotime($rqa->addTime))/3600/24);?>天前
            <div class="travelTypeTab">
                <i class="Hui-iconfont" style="color:rgb(252,199,111);font-size:1.7em;vertical-align: middle;">&#xe6b5;</i>
                <?php echo $rqa->money;?>
                <img src="<?php echo $rqa->travelTypeTab->icon;?>">
                <?php echo $rqa->travelTypeTab->name;?>
            </div>
        </div>
    </div>
</div>
<div class="answer">
    <?php echo sizeof($anwsers);?>条回答（详情请在App中查看）
</div>
<div class="qa-comment" style="margin:0;background-color:#FFF;">
    <ul class="comment-users">
        <?php foreach($anwsers as $a):?>
         <li>
             <div class="a-user-info clearfix">
                 <div class="avatar">
                     <img src="<?php echo $a->commAnwserOnwerVo->commAnwserOnwerIcon;?>"><br>
                     #<?php echo $a->commAnwserOnwerVo->commAnwserOnwerCountry;?> <?php echo $a->commAnwserOnwerVo->commAnwserOnwerCity;?>
                 </div>
                 <div class="info">
                     <p class="name"><?php echo $a->commAnwserOnwerVo->commAnwserOnwerName;?></p>
                     <p class="signature">回复：<?php echo $a->content;?></p>
                 </div>
             </div>
         </li>
        <?php endforeach;?>
    </ul>
</div>

</body>
</html>
