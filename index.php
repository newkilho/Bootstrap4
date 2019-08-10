<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');

if(is_file(G5_PATH.'/main.php'))
{
	include G5_PATH.'/main.php';
}else{
?>
Index
<?php
}

include_once(G5_THEME_PATH.'/tail.php');
?>