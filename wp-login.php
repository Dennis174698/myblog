<!DOCTYPE html>
	<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="zh-CN">
	<![endif]-->
	<!--[if !(IE 8) ]><!-->
		<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
	<!--<![endif]-->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>登录 &lsaquo; Dennis_Chen &#8212; WordPress</title>
	<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' id='dashicons-css'  href='./wp-includes/css/dashicons.min.css?ver=5.2.4' type='text/css' media='all' />
<link rel='stylesheet' id='buttons-css'  href='./wp-includes/css/buttons.min.css?ver=5.2.4' type='text/css' media='all' />
<link rel='stylesheet' id='forms-css'  href='./wp-admin/css/forms.min.css?ver=5.2.4' type='text/css' media='all' />
<link rel='stylesheet' id='l10n-css'  href='./wp-admin/css/l10n.min.css?ver=5.2.4' type='text/css' media='all' />
<link rel='stylesheet' id='login-css'  href='./wp-admin/css/login.min.css?ver=5.2.4' type='text/css' media='all' />
	<meta name='robots' content='noindex,noarchive' />
	<meta name='referrer' content='strict-origin-when-cross-origin' />
		<meta name="viewport" content="width=device-width" />
		</head>
	<body class="login login-action-login wp-core-ui  locale-zh-cn">
		<div id="login">
		<h1><a href="https://cn.wordpress.org/">基于WordPress</a></h1>
	
	<form name="loginform" id="loginform" action="./" method="post">
	<p>
		<label for="user_login">用户名或电子邮件地址<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" /></label>
	</p>
	<p>
		<label for="user_pass">密码<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
	</p>
			<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> 记住我的登录信息</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="登录" />
				<input type="hidden" name="redirect_to" value="./wp-admin/" />
					<input type="hidden" name="testcookie" value="1" />
	</p>
	</form>

			<p id="nav">
					<a href="./?action=lostpassword">忘记密码？</a>
				</p>
	
	<script type="text/javascript">
	function wp_attempt_focus(){
	setTimeout( function(){ try{
			d = document.getElementById('user_login');
				d.focus();
	d.select();
	} catch(e){}
	}, 200);
	}

			wp_attempt_focus();
			if(typeof wpOnload=='function')wpOnload();
			</script>

			<p id="backtoblog"><a href="./index.html">
		&larr; 返回到Dennis_Chen	</a></p>
			
	</div>

	
		<div class="clear"></div>
	</body>
	</html>
	