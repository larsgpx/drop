<?php
/**
 *  Functions and definitions for auxin framework
 *
 * 
 * @package    Auxin
 * @author     averta (c) 2014-2019
 * @link       http://averta.net
 */

/*-----------------------------------------------------------------------------------*/
/*  Add your custom functions here -  We recommend you to use "code-snippets" plugin instead
/*  https://wordpress.org/plugins/code-snippets/
/*-----------------------------------------------------------------------------------*/


// your code here

function admin_styles(){
	echo '<style>
	#adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap{
	background-color:white;
}

#adminmenu a,#adminmenu .wp-submenu a{
	color:#23282d;
}
body{
	background-color:white!important;
}
#adminmenu .wp-has-current-submenu .wp-submenu, #adminmenu .wp-has-current-submenu .wp-submenu.sub-open, #adminmenu .wp-has-current-submenu.opensub .wp-submenu, #adminmenu a.wp-has-current-submenu:focus+.wp-submenu, .no-js li.wp-has-current-submenu:hover .wp-submenu{
	background-color:white;
	-webkit-box-shadow: 0px 2px 8px -2px rgba(0,0,0,0.45);
	-moz-box-shadow: 0px 2px 8px -2px rgba(0,0,0,0.45);
	box-shadow: 0px 2px 8px -2px rgba(0,0,0,0.45);
}

input[type=checkbox]:focus, input[type=color]:focus, input[type=date]:focus, input[type=datetime-local]:focus, input[type=datetime]:focus, input[type=email]:focus, input[type=month]:focus, input[type=number]:focus, input[type=password]:focus, input[type=radio]:focus, input[type=search]:focus, input[type=tel]:focus, input[type=text]:focus, input[type=time]:focus, input[type=url]:focus, input[type=week]:focus, select:focus, textarea:focus{
	box-shadow: 0 0 0 1px transparent;
    outline: 2px solid transparent;
}


.edit-post-header {
    top: 46px;
}
.flatty-top-bar{
	height:50px;
}
.edit-post-sidebar{
	top: 102px;
}
/*barrita de wordpress gris de siempre*/
#wpadminbar{	
	background: #ffffff;
    box-shadow: 1px -1px 3px black;
}
#wpadminbar #wp-admin-bar-wp-logo>.ab-item{
	display:none;
}
/*hover de barrita wordpress*/
#wpadminbar .ab-top-menu>li.hover>.ab-item, #wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus, #wpadminbar:not(.mobile) .ab-top-menu>li:hover>.ab-item, #wpadminbar:not(.mobile) .ab-top-menu>li>.ab-item:focus{
	background:#32373c14;
}
#wpadminbar .ab-empty-item, #wpadminbar a.ab-item, #wpadminbar>#wp-toolbar span.ab-label, #wpadminbar>#wp-toolbar span.noticon{
	color:#000!important;
}
#wpadminbar #adminbarsearch:before, #wpadminbar .ab-icon:before, #wpadminbar .ab-item:before,div.wp-menu-image:before { 
    color: #01b995!important;
}
#wpadminbar #wp-admin-bar-wp-logo>.ab-item .ab-icon:before{
	
}

.wp-has-submenu[aria-haspopup="true"] .wp-menu-image::before{
	margin-top: 16px!important;
}
#adminmenu li.wp-has-submenu.wp-not-current-submenu.opensub:hover:after{
	border-right-color: #fff;
}
#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, .folded #adminmenu li.wp-has-current-submenu{
	background:#fff!important;
	border-left:2px solid #01b995;
	color: #01b995;
}

#wpadminbar .menupop .ab-sub-wrapper, #wpadminbar .shortlink-input{
	background:#fff!important;
}

.widefat thead td, .widefat thead th{
	border-bottom:0px!important;
}

#adminmenuwrap {
	width: 160px;
	background-color: transparent;
	background-image: url("https://senseireview.com/wp-content/uploads/thumbs_dir/DropshipMe-Review-6ndk9fhr5gkmd3kezh05ulyicawdtehsmwit26qxxkq.png");
	background-repeat: no-repeat;
	padding-top: 50px;
	background-size: 80%;
    background-position-x: 60%;
    background-position-y: -1%;
}


#adminmenu li.menu-top{
	-webkit-transition: all .5s; 
  	transition: all .5s;
}
#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, .folded #adminmenu li.wp-has-current-submenu{
	background:#72777c;
}
#adminmenu .opensub .wp-submenu li.current a, #adminmenu .wp-submenu li.current, #adminmenu .wp-submenu li.current a, #adminmenu .wp-submenu li.current a:focus, #adminmenu .wp-submenu li.current a:hover, #adminmenu a.wp-has-current-submenu:focus+.wp-submenu li.current a{
	color:#23282d;
}
#adminmenu .wp-submenu a:focus, #adminmenu .wp-submenu a:hover, #adminmenu a:hover, #adminmenu li.menu-top>a:focus{
	color:#76939a;
}
#adminmenu li.menu-top:hover, #adminmenu li.opensub>a.menu-top, #adminmenu li>a.menu-top:focus{
	background-color: #eee;
    color: #697e92;
}
#adminmenu div.wp-menu-name{
	padding:25px 0;
}
div.wp-menu-image:before,#adminmenu #toplevel_page_elementor div.wp-menu-image:before{
	margin-top:16px;
}

/* inputs */
.regular-text,#titlediv #title,.woocommerce_options_panel .short, .woocommerce_options_panel input[type=email].short, .woocommerce_options_panel input[type=number].short, .woocommerce_options_panel input[type=password].short, .woocommerce_options_panel input[type=text].short{
	border: 0!important;
	box-shadow: 0px 0px 3px grey!important;
	height: 38px!important;
}
/*dropdown*/
.wp-core-ui select,.select2-selection,.branch-5-3 .select2-container .select2-selection--single{	
	border: 0px;
    border-bottom: 1px solid #05aa8a;
    border-radius: 0px;
	min-height: 40px;
}

input[type=date], input[type=datetime-local], input[type=datetime], input[type=email], input[type=month], input[type=number], input[type=password], input[type=search], input[type=tel], input[type=text], input[type=time], input[type=url], input[type=week]{
	min-height: 38px;
	border: 0px;
    border-bottom: 1px solid #05aa8a;
    border-radius: 0px;
}
/* alertas */
#message{
	border-radius:6px;
	border:0px;
}
#message p a{
	color:white;
}
.notice-dismiss{
	color:white;
}
div.updated{
	background: #46b450;
	color: white;
	box-shadow: 0px 0px 5px #46b450!important;
}
.notice{
	background: #ccd0d4;
	box-shadow: 0px 0px 5px #ccd0d4!important;
	color:black;
} 
.notice-dismiss:before{
	color:white!important;
}
.notice p a{
	color:black;
}
div.error{
    background: #e53935;
    box-shadow: 0px 0px 5px #e53935!important;
    color: white;
}


/*botones*/

a{
	color:#555;
	-webkit-transition: all .5s; 
  	transition: all .5s;
}
a:active, a:hover{
	color:#05aa8a;
}
input[type=checkbox], input[type=radio]{
	box-shadow:inherit;
	border:2px solid #d8dbda;
	border-radius: 1px;
	width:1.15rem;
	height:1.15rem;
}

.wrap .add-new-h2, .wrap .add-new-h2:active, .wrap .page-title-action, .wrap .page-title-action:active{
	border-color: #5cc8b3!important;
	background: #5cc8b3!important;
	
	padding: 5px 10px;
	color:white;
	-webkit-transition: all .5s; 
  	transition: all .5s;
}
.wrap .add-new-h2:hover, .wrap .page-title-action:hover,#screen-meta-links .show-settings:active, #screen-meta-links .show-settings:focus, #screen-meta-links .show-settings:hover{
	color:white;
	background: #05aa8a!important;
	border-color: #05aa8a!important;
	-webkit-transition: all .5s; 
  	transition: all .5s;
}

.wp-core-ui .button{
	color: white;
    border-color: #01b995!important;
    background: #01b995!important;
	vertical-align: top;	
	padding: 0 20px;
	-webkit-transition: all .5s; 
  	transition: all .5s;
}

.wp-core-ui .button-secondary{
    color: white;
    border-color: #01b995!important;
    background: #01b995!important;
	vertical-align: top;
	height: 38px;
	padding: 0 20px;
	-webkit-transition: all .5s; 
  	transition: all .5s;
}
.wp-core-ui .button-secondary:hover, .wp-core-ui .button.hover, .wp-core-ui .button:hover{
	color:white;
	background:#05aa8a!important;
	border-color:#05aa8a!important;
	-webkit-transition: all .5s; 
  	transition: all .5s;
}
#screen-meta-links .show-settings,#screen-meta-links .show-settings:after{
	color:white;
	-webkit-transition: all .5s; 
  	transition: all .5s;
}

/* tables */

.wp-list-table {
    margin-top: 25px;
}
.wp-list-table thead tr{
	height:50px;
}

#menu-management .menu-edit, #menu-settings-column .accordion-container, .comment-ays, .feature-filter, .imgedit-group, .manage-menus, .menu-item-handle, .popular-tags, .stuffbox, .widget-inside, .widget-top, .widgets-holder-wrap, .wp-editor-container, p.popular-tags, table.widefat{
	border: 0px solid #ccd0d4;
    box-shadow: 0 0px 3px rgba(0,0,0,.3);
}

.row-actions span {
    background: #05aa8a;
    margin: 1px;
    padding: 2px 0px;
    border-radius: 4px;
    color: transparent;
	padding-left: 10px;
	-webkit-transition: all .5s; 
  	transition: all .5s;
}
.row-actions span:hover{
	background:#01b995;
}
.row-actions .view{
	padding-right:10px;
}

.row-actions span a, .row-actions span button,.row-actions span a:hover, .row-actions span button:hover {
    color: white!important;
}


	';
}
add_action('admin_head','admin_styles');
/*-----------------------------------------------------------------------------------*/
/*  Init theme framework
/*-----------------------------------------------------------------------------------*/
require( 'auxin/auxin-include/auxin.php' );
/*-----------------------------------------------------------------------------------*/
