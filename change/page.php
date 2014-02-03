<?php 
/**
 * 自建页面模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="contentleft">
	<div class="m-post">
		<div id="an_article">
			<h2><?php echo $log_title; ?></h2>
			<?php echo $log_content; ?>
			<?php blog_comments($comments); ?>
			<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
			<div style="clear:both;"></div>
		</div>
	</div>
</div><!--end #contentleft-->
<?php
 // include View::getView('side');
 include View::getView('footer');
?>