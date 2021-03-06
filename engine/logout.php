<?
define('AUTH_AUTHREQUIRED', true);
define('SETTINGS_INSTALLREQUIRED', false);
define('BERTA_ENVIRONMENT', 'engine');
require 'inc.page.php';


$berta->security->destroy();

//destroy cookies
reset($_COOKIE);
while(list($idx, ) = each($_COOKIE)) {
	if(strpos($idx, '_berta_') === 0) {
		//unset($_COOKIE[$idx]);
		setcookie($idx, "", time() - 3600);
	}
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><? echo $berta->settings->get('texts', 'page-title') ?> / logout</title>
<link href="<? echo $ENGINE_ABS_ROOT ?>css/default.css" rel="stylesheet" type="text/css" />
<link href="<? echo $ENGINE_ABS_ROOT ?>css/login.css" rel="stylesheet" type="text/css" />
<link href="<? echo $ENGINE_ABS_ROOT ?>css/editor.css.php" rel="stylesheet" type="text/css" />
</head>

<body class="xLoginPageBody" onload="setTimeout('window.location=\'<? echo $SITE_ABS_ROOT ?>\'', 1500)">
	<div class="xMAlign-container xPanel">
		<div class="xMAlign-outer">
			<div class="xMAlign-inner">
				<p class="xLogout"><?= I18n::_('Logout ok. Please wait...') ?></p>
			</div>
		</div>
	</div>
</body>
</html>
