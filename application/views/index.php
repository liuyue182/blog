<?php date_default_timezone_set("Asia/Shanghai");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
	<base href="<?php echo site_url();?>">
  <title>Johnny的博客 - SYSIT个人博客</title>
      <link rel="stylesheet" href="css/space2011.css" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/jquery.css" media="screen">
  <script type="text/javascript" src="js/jquery-1.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery_002.js"></script>
  <script type="text/javascript" src="js/oschina.js"></script>
  <style type="text/css">
    body,table,input,textarea,select {font-family:Verdana,sans-serif,宋体;}	
  </style>
</head>
<body>
<!--[if IE 8]>
<style>ul.tabnav {padding: 3px 10px 3px 10px;}</style>
<![endif]-->
<!--[if IE 9]>
<style>ul.tabnav {padding: 3px 10px 4px 10px;}</style>
<![endif]-->
<div id="OSC_Screen">
        <?php include 'header.php'?>
</div>
<div class="BlogList">
<ul>
	<?php foreach ($list as $blog){ ?>
  <li class='Blog' id='blog_<?php echo $blog->blog_id;?>'>

	<h2 class='BlogAccess_true BlogTop_0'><a href="viewPost_comment.htm"><?php echo $blog->blog_title;?></a></h2>

	<div class='outline'>

	  <span class='time'>发表于 <?php echo date('Y年m月d日 h:ia',strtotime($blog->post_time));?></span>

	  <span class='catalog'>分类: <a href="?catalog=92334"><?php echo $blog->catalog_name;?></a></span>

	  <span class='stat'>统计:  <?php echo $blog->num;?>评/<?php echo $blog->checked;?>阅</span>

	  	</div>

		<div class='TextContent' id='blog_content_<?php echo $blog->blog_id;?>'>

			<?php echo $blog->blog_content;?>

		<div class='fullcontent'><a href="viewPost_comment.htm">阅读全文...</a></div>

			</div>

	  </li>
	<?php }?>

</ul>
<div class="clear"></div>
	</div>
<div class="BlogMenu"><div class="catalogs SpaceModule">
  <strong>博客分类</strong>
  <ul class="LinkLine">
	  <?php foreach ($catalog_list as $list){?>
    	<li><a href="#"><?php echo $list->catalog_name;?>(2)</a></li>
		<?php }?>
	  </ul>
</div>
<div class="comments SpaceModule">
  <strong>最新网友评论</strong>
    	<p class="NoData">目前还没有任何评论</p>
  </div></div>
<div class="clear"></div>
<script type="text/javascript" src="js/brush.js"></script>
<link type="text/css" rel="stylesheet" href="css/shCore.css">
<link type="text/css" rel="stylesheet" href="css/shThemeDefault.css"></div>
	<div class="clear"></div>
	<div id="OSC_Footer">© 赛斯特(WWW.SYSIT.ORG)</div>
</div>
</body></html>