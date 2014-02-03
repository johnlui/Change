<?php 
/**
 * 首页文章列表部分
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="contentleft">
<?php doAction('index_loglist_top'); ?>

<?php 
if (!empty($logs)):
foreach($logs as $value): 
?>
<div class="m-post">
	<div id="an_article">
		<h2><?php topflg($value['top']); ?><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h2>
		<?php echo $value['log_description']; ?>		
	</div>
		<div class="info box">
			<a class="date" href="<?php echo $value['log_url']; ?>"><?php echo gmdate('Y-n-j', $value['date']); ?></a>
		</div>
</div>
<?php 
endforeach;
else:
?>
	<h2>未找到</h2>
	<p>抱歉，没有符合您查询条件的结果。</p>
<?php endif;?>

<div id="pagenavi">
	<?php echo $page_url;?>
</div>

</div><!-- end #contentleft-->
<?php
 // include View::getView('side');
 include View::getView('footer');
?>