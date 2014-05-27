<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" version="g42dymwpi--nx">
<head>
<meta charset="<?php bloginfo('charset');?>" />
<title><?php if ( is_single() ) { ?> <?php } ?><?php wp_title(''); ?> <?php bloginfo(’name’); ?> </title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<?php if (is_single()){if($post->post_excerpt){$description=strip_tags($post->post_excerpt);}else{$description=substr(strip_tags($post->post_content),0,110);}$keywords='';$tags=wp_get_post_tags($post->ID);foreach($tags as $tag){$keywords=$keywords.$tag->name.', ';}}?>

<meta name="keywords" content="<?php if($SearchKey)echo $SearchKey;if(is_single())echo ', '.$keywords;?>" />
<?php wp_head() ?>

</head>
<body>
<div id="posttj">
<script language="javascript" type="text/javascript" src="http://js.users.51.la/15156642.js"></script>
<noscript><img src="http://img.users.51.la/15156642.asp" style="display:none" alt="" /></noscript>
</div>
<div id="header"></div>
<ul id="tab">
<?php if (is_page()) {?>
<li><a href="http://www.yfgeek.com">首页</a></li>
<?php }else {?>
<li class="vsss "><a href="http://www.yfgeek.com">首页</a></li>
<?php }?>
<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
</ul> 