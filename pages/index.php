<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/vnd.microsoft.icon" href="../favicon.ico">
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
	<link rel="stylesheet" href="css/main.css">

	<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>

<div class="header">
	<header class="header-container clearfix">
		<div class="logo inline-block"><a href="/"><img src="img/logo.png"></a></div>
		<div class="social inline-block">
			<a href="https://vk.com/steelcat"><i class="icon-vk"></i></a>
			<a href="https://twitter.com/steelpuppy"><i class="icon-twitter"></i></a>
			<a href="https://www.facebook.com/zorcaorcinus"><i class="icon-facebook"></i></a>
			<a href="https://github.com/steelcat"><i class="icon-github"></i></a>
		</div>
	</header>
</div>

<div class="main bg">
	<div class="main-container wrapper clearfix">
		<sidebar class="sidebar">
			<nav class="sidebar-menu">
				<ul class="nav">
					<li class="active"><a href="/">Обо мне</a></li>
					<li><a href="/my-works">Мои работы</a></li>
					<li><a href="/contact-me">Связаться со мной</a></li>
				</ul>
			</nav>
			<div class="contacts">
				<h2>Контакты</h2>
				<div class="mail"><i class="icon-mail"></i>me@steelcat.org</div>
				<div class="phone"><i class="icon-phone"></i>+79618115054</div>
				<div class="skype"><i class="icon-skype"></i>live:vitalyshutov</div>
			</div>
		</sidebar>
		<div class="content">
			<div class="block">
				<h2>Основная информация</h2>
				<div class="info">
					<div class="avatar"><img class="circle" src="img/steelcat-140x140.jpg"></div>
					<div class="info-main">
						<div class="row"><span class="desc">Меня зовут:</span><span class="value">Шутов Виталий Леонидович</span></div>
						<div class="row"><span class="desc">Мой возраст:</span><span class="value">41 год</span></div>
						<div class="row"><span class="desc">Мой город:</span><span class="value">Санкт-Петербург</span></div>
						<div class="row"><span class="desc">Моя специализация:</span><span class="value">Front-end разработчик</span></div>
						<div class="row"><span class="desc">Ключевые навыки:</span>
							<ul class="skill">
								<li>html</li><li>css</li><li>javascript</li><li>gulp</li><li>git</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="block">
				<h2>Опыт работы</h2>
				<div class="info skills">
					<div class="row">
						<img src="img/portfel.png">
						<div class="subrow"><span class="name">Системный администратор</span><br>С 2008 года по настоящее время</div>
					</div>
				</div>
			</div>
			<div class="block">
				<h2>Образование</h2>
				<div class="info skills">
					<div class="row">
						<img src="img/hat.png">
						<div class="subrow"><span class="name">Высшее - ЛЭТИ</span><br>С 1990 по 1996 год</div>
					</div>
					<div class="row">
						<img src="img/page.png">
						<div class="subrow"><span class="name">Курсы LoftSchool</span><br>С 10 января 2015 года - по настоящее время</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="footer">
	<footer class="footer-container wrapper">
			<div id="auth" class="auth left"><img src="img/lock.png"></div>
			<div class="copyright center">© 2015, Это мой сайт, пожалуйста, не копируйте и не воруйте его</div>
	</footer>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

<script src="../js/messi/messi.js"></script>
<script>
	jQuery.noConflict ();
	(function($) {
		$(document).ready(function() {
			$('#add-work').on('click', function() {
				Messi.load('blocks/add-work.php', {title: 'Добавление проекта', modal: true});
			});
			$('#auth').on('click', function() {
				Messi.load('blocks/auth.php', {title: 'Авторизуйтесь', modal: true});
			});
		});
	})(jQuery);
</script>

</body>
</html>