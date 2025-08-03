<?php
/**
 * Plugin Name: Tối ưu heartbeat Wordpress
 * Plugin URI: https://wptangtoc.com
 * Description: Phát triển bởi WP Tăng Tốc
 * Version: 1.3.5
 * Author: Gia Tuấn
 * Author URI: https://wptangtoc.com
 * License: GPLv2 or later
 */
 
 
/*** tối ưu lại Heartbeat ****/
/* Disable Heartbeat
/***********************************************************************/
	add_action('init', 'wptangtoc_disable_heartbeat', 1);

function wptangtoc_disable_heartbeat() {

	//kiem tra pages in admin
	if(is_admin()) {
		global $pagenow;
		if(!empty($pagenow) && in_array($pagenow, array('admin.php'))) {
			if(!empty($_GET['page'])) {
				$exceptions = array(
					'gf_edit_forms',
					'gf_entries',
					'gf_settings'
				);
				if(in_array($_GET['page'], $exceptions)) {
					return;
				}
			}
		}
	}

	//disable hearbeat chi load bai viet
			global $pagenow;
			if($pagenow != 'post.php' && $pagenow != 'post-new.php') {
				wptangtoc_replace_hearbeat();
			}
		
	
}

function wptangtoc_replace_hearbeat() {
	wp_deregister_script('heartbeat');
	//wp_dequeue_script('heartbeat');
	if(is_admin()) {
		wp_register_script('hearbeat', plugins_url('heartbeat-wptangtoc/js/heartbeat.js', dirname(__FILE__)));
		wp_enqueue_script('heartbeat', plugins_url('heartbeat-wptangtoc/js/heartbeat.js', dirname(__FILE__)));
	}
}

/* Heartbeat Frequency thay doi thoi gian mac dinh
/***********************************************************************/
	add_filter('heartbeat_settings', 'wptangtoc_heartbeat_frequency');

function wptangtoc_heartbeat_frequency($settings) {
		$settings['interval'] = 120;
	return $settings;
}

function wptangtoc_cham_soc_khach_hang($links) {
    $plugin_shortcuts = array(
        '<a href="https://wptangtoc.com" target="_blank" style="color:#b40404;">Yêu cầu hỗ trợ</a>'
    );
    return array_merge($links, $plugin_shortcuts);
}
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'wptangtoc_cham_soc_khach_hang');
