<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo L('page_title');?></title>
<link rel="stylesheet" type="text/css" href="__TMPL__public/style.css" />
<script type="text/javascript" src="__TMPL__public/jquery.js"></script>
</head>
<body>
<!--header-->
<div class="header">
<div class="head">
<div class="logo"><a href="index.php"><img src="__TMPL__public/logo.gif" alt="<?php echo L('page_title');?>" /></a></div>
<div class="menu"><?php echo L('page_title');?> <?php echo ($IK_VERSION); ?>
</div>
</div>
</div>

<style>
h1 {
    border-bottom: 1px solid #DADADA;
    clear: both;
    color: #666666;
    font: 24px Georgia,"Times New Roman",Times,serif;
    margin: 5px 0 0 -4px;
    padding: 0 0 7px;
}
.main{
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #DFDFDF;
    border-radius: 11px 11px 11px 11px;
    color: #333333;
    font-family: "Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;
    margin: 2em auto;
    padding: 1em 2em;
    width: 700px;
}
p, li, dd, dt {
    font-size: 12px;
    line-height: 18px;
    padding-bottom: 2px;
}
.step {
    margin: 20px 0 15px;
}
.step, th {
    padding: 0;
    text-align: left;
}
.submit input, .button, .button-secondary {
    -moz-box-sizing: content-box;
    border: 1px solid #BBBBBB;
    border-radius: 15px 15px 15px 15px;
    color: #464646;
    cursor: pointer;
    font-family: "Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;
    font-size: 14px !important;
    line-height: 16px;
    padding: 6px 12px;
    text-decoration: none;
}
.button:hover, .button-secondary:hover, .submit input:hover {
    border-color: #666666;
    color: #000000;
}
.button, .submit input, .button-secondary {
    background:#F2F2F2;
}
.button:active, .submit input:active, .button-secondary:active {
    background: #EEEEEE;
}

.form-table {
    border-collapse: collapse;
    margin-top: 1em;
    width: 100%;
}
.form-table td {
    border-bottom: 8px solid #FFFFFF;
    font-size: 12px;
    margin-bottom: 9px;
    padding: 10px;
}
.form-table th {
    border-bottom: 8px solid #FFFFFF;
    font-size: 13px;
    padding: 16px 10px 10px;
    text-align: left;
    vertical-align: top;
    width: 130px;
}
.form-table tr {
    background: none repeat scroll 0 0 #F3F3F3;
}
.form-table code {
    font-size: 18px;
    line-height: 18px;
}
.form-table p {
    font-size: 11px;
    margin: 4px 0 0;
}
.form-table input {
    font-size: 15px;
    line-height: 20px;
    padding: 2px;
}
.form-table th p {
    font-weight: normal;
}
#error-page {
    margin-top: 50px;
}
#error-page p {
    font-size: 12px;
    line-height: 18px;
    margin: 25px 0 20px;
}
#error-page code, .code {
    font-family: Consolas,Monaco,Courier,monospace;
}
#pass-strength-result {
    background-color: #EEEEEE;
    border-color: #DDDDDD !important;
    border-style: solid;
    border-width: 1px;
    display: none;
    margin: 5px 5px 5px 1px;
    padding: 5px;
    text-align: center;
    width: 200px;
}
#pass-strength-result.bad {
    background-color: #FFB78C;
    border-color: #FF853C !important;
}
#pass-strength-result.good {
    background-color: #FFEC8B;
    border-color: #FFCC00 !important;
}
#pass-strength-result.short {
    background-color: #FFA0A0;
    border-color: #F04040 !important;
}
#pass-strength-result.strong {
    background-color: #C3FF88;
    border-color: #8DFF1C !important;
}
.message {
    background-color: #FFFFE0;
    border: 1px solid #E6DB55;
    margin: 5px 0 15px;
    padding: 0.3em 0.6em;
}

</style>

<!--main-->
<div class="midder">

<div class="main">

<h1>成功安装完成！</h1>
<p><?php echo L('step_finish_desc');?></p>
<table class="form-table">
	<tbody><tr>
		<th>登录Email：</th>
		<td><code><?php echo ($email); ?></code></td>
	</tr>
	<tr>
		<th>登录密码：</th>
		<td><code><?php echo ($password); ?></code></td>
	</tr>
</tbody></table>
<p class="step"><a class="button" href="<?php echo ($home_url); ?>">进入前台</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="button" href="<?php echo ($admin_url); ?>">进入后台</a></p>

</div>

</div>

<!--footer-->
<div class="footer">Powered by <a href="<?php echo (IKPHP_SITEURL); ?>" target="_blank"><?php echo (IKPHP_SITENAME); ?></a>&nbsp;版本 <?php echo (IKPHP_VERSION); ?> &copy; <?php echo (IKPHP_YEAR); ?>
</div>
</body>
</html>