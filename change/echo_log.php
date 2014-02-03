<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="contentleft">
	<div class="m-post">
		<div id="an_article">
			<h2><?php topflg($top); ?><?php echo $log_title; ?></h2>
			
			<?php echo $log_content; ?>
			
			<div class="tag little"><?php blog_tag($logid); ?></div>
			<div class="date little"><?php echo gmdate('Y.n.j', $date); ?>
			<span>/</span> 热度：<?php echo $views; ?> <span>/</span> <?php blog_sort($logid); ?><?php editflg($logid,$author); ?>
			</div>
			
			<?php doAction('log_related', $logData); ?>
			
			<div class="nextlog"><?php neighbor_log($neighborLog); ?></div>
			
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