<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="email=no">
<title>期货交易系统</title>
<link rel="stylesheet" href="/Public/Home/css/global.css">
<link rel="stylesheet" href="/Public/Home/css/index.css">
<script id="G--xyscore-load" type="text/javascript" charset="utf-8" async="" src="/Public/Home/js/xyscore_main.js"></script>
</head>
<body>
<div class="wrap">
  <div class="index" style="min-height: 1782px; height: 1752px;">
    <header class="list-head">
      <nav class="list-nav clearfix"> <a href="javascript:history.go(-1)" class="list-back"></a>
        <h3 class="list-title"><?php echo ($newscat['fclass']); ?></h3>
      </nav>
    </header>
    <?php if(is_array($nlist)): $i = 0; $__LIST__ = $nlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="news-list clearfix">
        <div class="news_pic"> <a href="" class="clearfix"><img src="/Public/Home/images/pic.gif"></a> </div>
        <div class="news_text"> 
          <p class="zx"><img src="/Public/Home/images/zx.png"></p>
          <p class="n_t"><a href="<?php echo U('News/newsid');?>?nid=<?php echo ($vo['nid']); ?>" class="clearfix"> <span><?php echo ($vo['ntitle']); ?></span></a> </p>
          <p class="n_cs"><a href="<?php echo U('News/newsid');?>?nid=<?php echo ($vo['nid']); ?>" class="clearfix"> <span><?php echo ($vo['ncontent']); ?></span></a> </p>
          <p class="n_m"><a href="<?php echo U('News/newsid');?>?nid=<?php echo ($vo['nid']); ?>" class="news-more">查看更多&gt;</a></p>
         </div>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
</div>
<script src="/Public/Home/js/jquery-2.1.1.min.js"></script>
<script src="/Public/Home/js/script.js"></script>
<script src="/Public/Home/js/getNewList.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/Home/js/sea.js" async=""></script>
</body>
</html>