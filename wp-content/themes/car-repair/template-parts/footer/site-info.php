<?php
/**
 * Displays footer site info
 *
 * @package Car Repair
 * @subpackage car_repair
 */

?>
<div class="site-info">
	<div class="container">
		<p><?php car_repair_credit(); ?> <?php echo esc_html(get_theme_mod('automobile_hub_footer_text',__('By Themespride','car-repair'))); ?></p>
	</div>
</div>