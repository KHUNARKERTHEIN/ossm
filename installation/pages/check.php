<div style="color: #664d03; background-color: #fff3cd; border-color: #ffecb5; position: relative; padding: 1rem 1rem; border: 1px solid transparent; border-radius: .25rem; width: 920px; margin: 0 auto;">Please install premium social network on your actual domain as the license will be activated on your domain and can be changed only on request! Please don't install on localhost, IP address or local server it won't work. Install it on your actual domain!</div>
<?php
/**
 * Open Source Social Network
 *
 * @package   (openteknik.com).ossn
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
echo '<div><div class="layout-installation"><h2>' . ossn_installation_print('ossn:prerequisites') . '</h2><div style="margin:0 auto; width:900px;">';
//overwriting of php's default settings by Ossn not working on some servers #965
/*if(!preg_match('/apache/', php_sapi_name()) && !preg_match('/litespeed/', php_sapi_name())){
    echo '<div class="ossn-installation-message ossn-installation-fail">APACHE, PHP_SAPI ('.php_sapi_name().')</div>';
    $error[] = 'php_sapi_apache';	
}*/
$error = array();
if (OssnInstallation::isPhp()) {
    echo '<div class="ossn-installation-message ossn-installation-success">'. ossn_installation_print('ossn:install:php') . PHP_VERSION . ' </div>';
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail"> ' . ossn_installation_print('ossn:install:old:php') . '</div>';
    $error[] = 'php';
}
if(extension_loaded('ionCube Loader')){
    echo '<div class="ossn-installation-message ossn-installation-success">PHP Extension ionCube Loader </div>';
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">PHP Extension ionCube Loader</div>';
    $error[] = 'php';	
}
//can not add if message as we have too much to translate already
if(!OssnInstallation::isCacheWriteable()){
   echo '<div class="ossn-installation-message ossn-installation-fail">'. ossn_installation_print('ossn:install:cachedir:note:failed') . ' <a target="_blank" href="https://www.opensource-socialnetwork.org/wiki/view/4378/directories-and-files-permission">https://www.opensource-socialnetwork.org/wiki/view/4378/directories-and-files-permissiom</a></div>';	
   $error[] = 'cache';
}
if(OssnInstallation::allowUrlFopen()){
    echo '<div class="ossn-installation-message ossn-installation-success">'.ossn_installation_print('ossn:install:allowfopenurl').'</div>';	
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">'.ossn_installation_print('ossn:install:allowfopenurl:error').'</div>';
    $error[] = 'allowfopenurl:error';	
}
if(OssnInstallation::isZipClass()){
	    echo '<div class="ossn-installation-message ossn-installation-success">'.ossn_installation_print('ossn:install:ziparchive').'</div>';	
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">'.ossn_installation_print('ossn:install:ziparchive:error').'</div>';
    $error[] = 'ziparchive:error';		
}
if (OssnInstallation::isCurl()) {
    echo '<div class="ossn-installation-message ossn-installation-success">'.ossn_installation_print('ossn:install:curl').'</div>';
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">'.ossn_installation_print('ossn:install:curl:required').'</div>';
    $error[] = 'php:curl';
}
if (OssnInstallation::isPhpGd()) {
    echo '<div class="ossn-installation-message ossn-installation-success">'.ossn_installation_print('ossn:install:gd').'</div>';
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">'.ossn_installation_print('ossn:install:gd:required').'</div>';
    $error[] = 'php:gd';
}
//Missing mcrypt module causes installation crash #941
if(function_exists('openssl_encrypt')) {
	    echo '<div class="ossn-installation-message ossn-installation-success">PHP openssl</div>';		
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">PHP openssl</div>';
    $error[] = 'php:openssl:error';			
}
if(extension_loaded('SimpleXML')){
	  echo '<div class="ossn-installation-message ossn-installation-success">PHP SimpleXML</div>';			
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">PHP SimpleXML</div>';
    $error[] = 'php:simplexml:error';		
}
if(extension_loaded('json')){
	  echo '<div class="ossn-installation-message ossn-installation-success">PHP json</div>';			
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">PHP json</div>';
    $error[] = 'php:json:error';		
}
if(extension_loaded('fileinfo')){
	  echo '<div class="ossn-installation-message ossn-installation-success">PHP fileinfo</div>';			
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">PHP fileinfo</div>';
    $error[] = 'php:fileinfo:error';		
}
if(extension_loaded('mbstring')){
	  echo '<div class="ossn-installation-message ossn-installation-success">PHP mbstring</div>';			
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">PHP mbstring</div>';
    $error[] = 'php:mbstring:error';		
}
if(extension_loaded('exif')){
	  echo '<div class="ossn-installation-message ossn-installation-success">PHP exif</div>';			
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">PHP exif</div>';
    $error[] = 'php:exif:error';		
}
if (OssnInstallation::is_mysqli_enabled()) {
    echo '<div class="ossn-installation-message ossn-installation-success">'.ossn_installation_print('ossn:install:mysqli').'</div>';
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">'.ossn_installation_print('ossn:install:mysqli:required').'</div>';
    $error[] = 'mysqli';
}
if (OssnInstallation::isApache()) {
    echo '<div class="ossn-installation-message ossn-installation-success">'.ossn_installation_print('ossn:install:apache').'</div>';
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">'.ossn_installation_print('ossn:install:apache:required').'</div>';
    $error[] = 'apache';
}
if (!in_array('php:curl', $error)) {
	if (OssnInstallation::is_mod_rewrite()) {
	    echo '<div class="ossn-installation-message ossn-installation-success">'.ossn_installation_print('ossn:install:modrewrite').'</div>';
	} else {
	    echo '<div class="ossn-installation-message ossn-installation-fail">'.ossn_installation_print('ossn:install:modrewrite:required').'</div>';
	    $error[] = 'mod_rewrite';
	}
}	
if (OssnInstallation::isCon_WRITEABLE()) {
    echo '<div class="ossn-installation-message ossn-installation-success">'.ossn_installation_print('ossn:install:config').'</div>';
} else {
    echo '<div class="ossn-installation-message ossn-installation-fail">'.ossn_installation_print('ossn:install:config:error').'</div>';
    $error[] = 'permission:configuration';
}
echo '<br />';
if (empty($error)) {
    echo '<a href="' . ossn_installation_paths()->url . '?page=license" class="button-blue primary">'.ossn_installation_print('ossn:install:next').'</a>';
}

echo '</div><br /><br /></div>';
