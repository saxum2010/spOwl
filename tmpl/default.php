<?php
/**
* @title		SP owl
* @website		http://www.joomshaper.com
* @copyright	Copyright (C) 2010 - 2014 JoomShaper.com. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<script type="text/javascript">
jQuery(function($){
	$(document).ready(function(){
	  $('.owl-carousel').owlCarousel({
		items : <?=$items?>,
		autoPlay : <?=$autoPlay?>,
		autoplayTimeout: <?=$autoplayTimeout?>,
		nav : <?=$nav?>,
		autoplaySpeed : <?=$slideSpeed?>,
		loop : <?=$loop?>,
		margin : <?=$margin?>,
		navText: [
		"<i class='icon-chevron-left icon-white'></i>",
		"<i class='icon-chevron-right icon-white'></i>"
		]
		});
	<? if($colorbox=='1'){?>$(".owl_gallery_item").colorbox({rel:'owl-itema'});<?}?>
	});
});
</script>
<div id="owl-carousel<?php echo $uniqid ?>" class="owl-carousel <?php echo $params->get('moduleclass_sfx'); ?>">
	<?php foreach($list as $item) { ?>
		<div class="item">
			<a href="<?php echo $item['image'] ?>" class="owl_gallery_item" rel="owl-itema" title="<?php echo $item['title'] ?>">
				<img class="owl_gallery" src="<?php echo $item['thumb'] ?>" alt="<?php echo $item['title'] ?>" />
			</a>
		</div>
	<?php } ?>
</div>