<?php 
/**
 * 页面底部信息
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
</div><!--end #content-->
<div style="clear:both;"></div>
<div style="width:960px; margin:0 auto;">
	<div id="footerbar" class="span6 offset3">
		<a href="http://www.miibeian.gov.cn" target="_blank"><?php echo $icp; ?></a>
		<?php if ($footer_info!==''){echo ' <span>/</span> '.$footer_info;} ?>
		<?php doAction('index_footer'); ?>
	</div><!--end #footerbar-->
</div>
</div><!--end #wrap-->
<script>prettyPrint();</script>
</body>
</html>