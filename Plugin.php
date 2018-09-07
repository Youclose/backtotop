<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * 回到顶部
 *
 * @package backtotop
 * @author  pioauh
 * @version 0.1
 * @link http://www.pioauh.ooo
 */

class backtotop_Plugin implements Typecho_Plugin_Interface
{
    public static function activate(){
	Typecho_Plugin::factory('Widget_Archive')->footer = array('backtotop_Plugin', 'header');       
       return '插件安装成功';
}

    public static function deactivate(){}

    public static function config(Typecho_Widget_Helper_Form $form){
}

    public static function personalConfig(Typecho_Widget_Helper_Form $form){}

    public static function header(){
	$cssUrl = Helper::options()->pluginUrl . '/backtotop/css/style.css';
        $jsUrl = Helper::options()->pluginUrl . '/backtotop/js/main.js';
         
              
	      echo '<link rel="stylesheet" href="' . $cssUrl . '">';            
              echo '<a href="#0" class="cd-top js-cd-top">Top</a>';
              echo '<script src="' . $jsUrl . '"></script>';
                                                 		
}
}
