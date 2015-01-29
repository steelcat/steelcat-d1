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
					<li><a href="/">Обо мне</a></li>
					<li class="active"><a href="/my-works">Мои работы</a></li>
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
			<div class="block works">
				<h2>Мои работы</h2>
				<div class="works-list">
					<ul>
						<li>
							<a target="_blank" href="http://clubznakomstv.spb.ru/" class="preview">
								<div class="work-tip"><span>clubznakomstv.spb.ru</span></div>
								<img src="img/preview.jpg">
							</a>
							<div class="site-info">
								<a target="_blank" href="http://clubznakomstv.spb.ru/" class="link">clubznakomstv.spb.ru</a>
								<div class="desc">Клуб знакомств "Коммун. квартира"</div>
							</div>
						</li>
						<li>
							<a target="_blank" href="http://kopia-ooo.ru/" class="preview">
								<div class="work-tip"><span>kopia-ooo.ru</span></div>
								<img src="img/preview.jpg">
							</a>
							<div class="site-info">
								<a target="_blank" href="http://kopia-ooo.ru/" class="link">kopia-ooo.ru</a>
								<div class="desc">Компания по продаже оргтехники</div>
							</div>
						</li>
						<li>
							<a href="http://transportspb.ru/" class="preview">
								<div class="work-tip"><span>transportspb.ru</span></div>
								<img src="img/preview.jpg">
							</a>
							<div class="site-info">
								<a target="_blank" href="http://transportspb.ru/" class="link">transportspb.ru</a>
								<div class="desc">Транспортная компания</div>
							</div>
						</li>
						<li>
							<a href="http://obydennosti.net/" class="preview">
								<div class="work-tip"><span>obydennosti.net</span></div>
								<img src="img/preview.jpg">
							</a>
							<div class="site-info">
								<a target="_blank" href="http://obydennosti.net/" class="link">obydennosti.net</a>
								<div class="desc">Антикварный магазин</div>
							</div>
						</li>
						<li id="add-work">
							<img src="img/add-project.png">
							<span>Добавить проект</span>
						</li>
					</ul>

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
				Messi.load('blocks/auth.php', {title: 'Авторизация', modal: true});
			});
		});
	})(jQuery);
</script>

</body>
</html>