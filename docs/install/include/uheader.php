<?php
/************************************************************************/
/* ATutor																*/
/************************************************************************/
/* Copyright (c) 2002-2003 by Greg Gay, Joel Kronenberg, Heidi Hazelton	*/
/* http://atutor.ca														*/
/*																		*/
/* This program is free software. You can redistribute it and/or		*/
/* modify it under the terms of the GNU General Public License			*/
/* as published by the Free Software Foundation.						*/
/************************************************************************/
if (!defined('AT_INCLUDE_PATH')) { exit; }

$install_steps[0] = array(	'name' => 'Introduction',
							'file' => 'index.php');

$install_steps[1] = array(	'name' => 'Locate Old Version',
							'file' => 'step1.php');

$install_steps[2] = array(	'name' => 'Database',
							'file' => 'step2.php');

$install_steps[3] = array(	'name' => 'Directories');

$install_steps[4] = array(	'name' => 'Content Files');

$install_steps[5] = array(	'name' => 'Preferences',
							'file' => 'step4.php');

$install_steps[6] = array(	'name' => 'Done!',
							'file' => 'step5.php');



?><!doctype html public "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title> Atutor Upgrade </title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" href="stylesheet.css" type="text/css" />
</head>

<body>
<table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0">
<tr height="50" bgcolor="#354A81">
	<td><h2 class="header">ATutor <?php echo $new_version ? $new_version : $_POST['step1']['new_version']; ?> Upgrade</h2></td>
	<td align="right" valign="middle"><img src="../images/logo.gif" height="29" width="84" alt="ATutor Logo" id="logo" />&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
	<td colspan="2" valign="top" class="content">