<?php 
if(!defined('ABSPATH')) die ('-1');

// Class strated
class jalilVCExtendAddonClass{
	function __construct(){
		//We safely integrate with vc with this hook
		add_action( 'init' , array($this , 'jalilIntegrateWithVC') );
	}

	public function jalilIntegrateWithVC(){
		//Checks if visual composer is not installed
		if(!defined('KC_VERSION')){
			add_action('admin_notices' , array($this , 'jalilShowVcVersionNotice'));
			return;
		}

		//King composer addon
		include JALIL_ACC_PATH .'/kc-addons/kc-slide.php';
		include JALIL_ACC_PATH .'/kc-addons/kc-count.php';
		include JALIL_ACC_PATH .'/kc-addons/kc-title.php';
		include JALIL_ACC_PATH .'/kc-addons/kc-btn.php';
		include JALIL_ACC_PATH .'/kc-addons/kc-video.php';
		include JALIL_ACC_PATH .'/kc-addons/kc-service.php';
		include JALIL_ACC_PATH .'/kc-addons/kc-team.php';
		include JALIL_ACC_PATH .'/kc-addons/kc-project.php';
		include JALIL_ACC_PATH .'/kc-addons/kc-testimonial.php';
		include JALIL_ACC_PATH .'/kc-addons/kc-pricing-table.php';
		include JALIL_ACC_PATH .'/kc-addons/kc-progress-bar.php';
		include JALIL_ACC_PATH .'/kc-addons/kc-post.php';
	}

	//Show Visual composer version
	public function jalilShowVcVersionNotice(){
		$theme_data = wp_get_theme();
		echo 
		'
		<div class="notice notice-warning">
			<p>'.sprintf(__('<strong>%s</strong> recommends <strong><a href="'.site_url( ).'/wp-admin/themes.php?page=jalil-install-plugins" target="_blank"> King Composer </a></strong> plugin to be installed and activated on your site.' , 'jalil-toolkit'), $theme_data->get('name')).'</p>
		</div>

		';
	}
}

// Finally initialize code
new jalilVCExtendAddonClass();