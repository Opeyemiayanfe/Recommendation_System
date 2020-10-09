<?php

require_once ('smartyHeader.php');

$title = "Smarty";

$smarty->assign('title', $title);

$smarty->display('login.tpl');