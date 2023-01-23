<?php 
	if(isset($_COOKIE['cabinet'])){
		header("refresh: 5; url = ".$_COOKIE['cabinet']);
	}
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Поздравления!</title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
		<link href="thanks/main.45d77917ced8d719f526.css" rel="stylesheet">
	</head>
	<body>
		<div class="thanks">
		<header class="thanks__top">
			<div class="container">
				<div class="d-flex justify-content-center align-items-center thanks__top-text-wrapper">
					<p class="thanks__top-text thanks__top-text_highlited" id="profit-counter">Количество инвесторов ограничено!</p>
				</div>
			</div>
		</header>
		<main class="thanks__main main"> 
					<div class="main__first-part">
						<div class="container">
							<div class="d-flex justify-content-center align-items-center flex-column">
								<div class="main__queue-block queue-block d-flex justify-content-center">
									Поздравляем! Вы успешно прошли регистрацию!
								</div>
								<div class="main__text-wrapper">
									<h1 class="main__title main__number">Ваша заявка №<?php echo rand(100994,312322);?> принята.</h1>
									<p class="main__text  mb-5">Наш сотрудник свяжется с Вами в рабочее время. <br />Держите Ваш телефон включенным</p>
								</div>
							</div>
						</div>
						<div class="video-content container py-5">
								<div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-5">
								<div class="col">
									<iframe width="100%" height="250" src="videotube/1.html" frameborder="0" allowfullscreen></iframe>
								</div>
								<div class="col">
									<iframe width="100%" height="250" src="videotube/2.html" frameborder="0" allowfullscreen></iframe>
								</div>
								<div class="col">
									<iframe width="100%" height="250" src="videotube/3.html" frameborder="0" allowfullscreen></iframe>
								</div>
								<div class="col">
									<iframe width="100%" height="250" src="videotube/4.html" frameborder="0" allowfullscreen></iframe>
								</div>
								<div class="col">
									<iframe width="100%" height="250" src="videotube/5.html" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="comments">
								<div class="title"><img src="thanks/fb.png" class="align-self-center mr-3" alt="" />
									<span>Комментарии</span>
								</div>
								<div class="body_c">
									<div class="comment">
										<div class="avatar">
											<img src="thanks/c1.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b>Олег Романюк</b>
												<span>12 минут назад</span>
											</div>
											<div class="text">
												Я это видел в новостях. Поразился! Просто взял и рискнул...
											</div>
										</div>
									</div>
									<div class="comment">
										<div class="avatar">
											<img src="thanks/c2.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b>Виктор Игнатенко</b>
												<span>13 минут назад</span>
											</div>
											<div class="text">
												Как вовремя. Мы с женой пока оба сидим дома и ищем как в интернете заработать - а вдруг это сработает?
											</div>
										</div>
									</div>
									<div class="comment">
										<div class="avatar">
											<img src="thanks/c3.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b>Николай Брык</b>
												<span>46 минут назад</span>
											</div>
											<div class="text">
												Народ, кто-нибудь уже регистрировался? Я вот думаю попробовать, а то надоело тоже за копейки работать, уже тошнит просто!
											</div>
										</div>
									</div>
									<div class="comment">
										<div class="avatar">
											<img src="thanks/c4.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b>Антон Николаевич</b>
												<span>52 минуты назад</span>
											</div>
											<div class="text">
												А что, надо попробовать. Чем черт не шутит, а вдруг получится зарегистрироваться, вроде бы кажется не сложно. Хмм. А кто-нибудь еще пробовал?
											</div>
										</div>
									</div>
									<div class="comment">
										<div class="avatar">
											<img src="thanks/c6.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b>Даниил Петренко</b>
												<span>1 час назад</span>
											</div>
											<div class="text">
												Явно бред какой-то. Взял просто и заработал. Скажи на улице еще деньги нашел
											</div>
										</div>
									</div>
									<div class="comment">
										<div class="avatar">
											<img src="thanks/c5.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b>Елена Лагода</b>
												<span>1 час назад</span>
											</div>
											<div class="text">
												Даниил Чтоб вы знали, это не чушь. Я успела зарегистрироваться и точно так же делаю. Поднимаю примерно по 30 000 рубли в неделю. Мне 34, и через пару месяцев я иду в банк и собираюсь выплатить весь кредит за машину одной крупной суммой. Если вам хватает зарплаты, тогда ее и ждите.
											</div>
										</div>
									</div>
									<div class="comment">
										<div class="avatar">
											<img src="thanks/c7.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b>Борис Фарбер</b>
												<span>2 часа назад</span>
											</div>
											<div class="text">
												У меня брат живет в Германии и зарабатывает таким же методом, и о сервисе им давно известно, о нем не хотят рассказывать, чтобы вытащить максимум из этой темы. Удивлен, что так просто по телевизору это показали.
											</div>
										</div>
									</div>
									<div class="comment">
										<div class="avatar">
											<img src="thanks/c8.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b>Жанна Шевченко</b>
												<span>2 часа назад</span>
											</div>
											<div class="text">
												Вот это да! Я конечно может ничего не понимаю, но тоже хочу попробовать. На миллионы не расчитываю, но вдруг погашу кредит. Так что всем желаю удачи и рассказывать другим. Пользуйтесь этим, пока есть возможность, ребята!
											</div>
										</div>
									</div>
									<div class="comment">
										<div class="avatar">
											<img src="thanks/c9.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b>Аня Рыбалко</b>
												<span>3 часа назад</span>
											</div>
											<div class="text">
												Ааа даа, я про эту историю. Там еще жена его блондинка такая, улыбается все время. Да и про программу очень интересно тчо из этого выйдет. Я уже зарегистрировалась посмотрим что будет!
											</div>
										</div>
									</div>
									<div class="comment">
										<div class="avatar">
											<img src="thanks/c11.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b>Женя</b>
												<span>4 часа назад</span>
											</div>
											<div class="text">
												Вот же люди! Заработал - молчи, завистников искать!!
											</div>
										</div>
									</div>
									<div class="comment">
										<div class="avatar">
											<img src="thanks/c10.jpg" alt="">
										</div>
										<div class="message">
											<div class="info">
												<b>Семен Кищук</b>
												<span>4 часа назад</span>
											</div>
											<div class="text">
												@Женя, вообще-то для таких как Вы ссылку указали, где можно так же заработать. Там ничего не теряешь, регистрация бесплатная, можешь нормально поднять.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> 
				</div>
			</main>
		<script>
			let scene = document.getElementById('parallax');
			let parallaxInstance = new Parallax(scene);
		</script>
 	    <?php if (strlen($_GET['p']) > 0) { ?>
		<!-- Meta Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '<?php echo $_GET['p'] ?>');
		fbq('track', 'Lead');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=<?php echo $_GET['p'] ?>&ev=Lead&noscript=1"
		/></noscript>
		<!-- End Meta Pixel Code --> 
 	    <?php }?>
 	    <?php if (strlen($_GET['g']) > 0) { ?>
		<?php
			$pixel_id = $_GET['g'];
			$counter_info = explode('/', $pixel_id);
			$counterId = $counter_info[0];
			if (count($counter_info) == 2) {
				$convLabel = $counter_info[1];
			}
		?>
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-<?= $counterId ?>"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'AW-<?= $counterId ?>');
		</script>
		<script>
			gtag('event', 'conversion', {
				'send_to': 'AW-<?= $counterId ?>/<?= $convLabel ?>',
				'transaction_id': ''
			});
		</script> 
    	<?php }?>
	</body>
</html>