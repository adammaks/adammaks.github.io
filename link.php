<!DOCTYPE html>
<html>
<head lang="ru">
	<meta charset="UTF-8">
	<title>Look`a Me - my project</title>
	<link rel="stylesheet" type="text/css" href="/css/default.css">
	<link rel="stylesheet" type="text/css" href="/css/shop.css">
	<link rel="stylesheet" type="text/css" href="/css/about.css">
	<link rel="stylesheet" type="text/css" href="/css/page.css">
	<link rel="stylesheet" type="text/css" href="/css/link.css">
	<link rel="stylesheet" type="text/css" href="/css/fonts.css">
	<link rel="shortcut icon" href="favicon.jpg" type="image/jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">

	<!-- head -->
	<div class="head">
		<p class="name-site" title='looka me'><a href="index.php">Look`a Me</a></p>
		<div class="shop-menu">
			<ul>
				<a href="#" class="url-menu-head" alt="account"><li><img src="/images/icons/menu/account.png"/>Аккаунт</li></a>
				<a href="#" class="url-menu-head" alt="like-product"><li><img src="/images/icons/menu/like.png"/>Отложенные</li></a>
				<a href="#" class="url-menu-head" alt="cart"><li><img src="/images/icons/menu/cart.png"/>Корзина</li></a>
			</ul>
		</div>
	</div>
	<!-- end head -->

	<!-- menu and search -->
	<div class="menu-search">
		<nav class="menu">
			<ul>
				<a href="index.php" class="url-menu"><li>Главная</li></a>
				<a href="shop.php" class="url-menu"><li>Магазин</li></a>
				<a href="about.php" class="url-menu"><li>О нас</li></a>
				<a href="link.php" class="url-menu"><li>Связь</li></a>
				<a href="sale.php" class="url-menu-sale"><li>Sale %</li></a>
			</ul>
		</nav>
		<div class="search">
			<input type="search" name="search" placeholder="Найди то , что искал всегда" class="input-search">
		</div>
	</div>
	<!-- end menu and search -->

	<!-- content about -->
		<div class="link">
			<div class="link-logo"><div class="block-black-page"></div>
				<p class="name-link">Мы рады каждому сообщению,будь то предложение или замечание</p>
			</div>
			<p class="name-form-link">Предлагаем написать нам письмо</p>
			<form class="form-link-home">
              <!-- Email -->
              <div class="form-link">
                <input class="form-control-link" id="contactName" type="text" placeholder="Ваше имя *" required="">
              </div>
              <div class="form-link">
                <input class="form-control-link" id="contactEmail" type="email" placeholder="Ваша почта (email) *" required="">
              </div>
              <div class="form-link">
                <input type="text" placeholder="Заголовок *" required="">
              </div>
              <div class="form-link">
                <textarea class="form-control-link-message" id="contactMessage" rows="5" placeholder="Сообщение *" required=""></textarea>
              </div>
              <button class="button-link">
                Отправить сообщение
              </button>
            </form>
		</div>
	<!-- end content about -->

	<!-- content instagram -->
	<div class="block-inst">
		<div class="block-images-inst">
			<div class="picture-ins" style="background-image: url(/images/images-page/inst/1.jpg);"></div>
			<div class="picture-ins" style="background-image: url(/images/images-page/inst/2.jpg);"></div>
			<div class="picture-ins" style="background-image: url(/images/images-page/inst/3.jpg);"></div>
			<div class="picture-ins" style="background-image: url(/images/images-page/inst/4.jpg);"></div>
		</div>

		<div class="block-text-inst">
			<p class="name-inst">looka_me_shop</p>
			<p class="text-inst">А ты уже следишь за нами в Instagram ?</p>
			<a href="#" class="url-inst">Подписывайся на наш инстаграм</a>
		</div>

		<div class="block-images-inst">
			<div class="picture-ins" style="background-image: url(/images/images-page/inst/5.jpg);"></div>
			<div class="picture-ins" style="background-image: url(/images/images-page/inst/6.jpg);"></div>
			<div class="picture-ins" style="background-image: url(/images/images-page/inst/7.jpg);"></div>
			<div class="picture-ins" style="background-image: url(/images/images-page/inst/8.jpg);"></div>
		</div>
	</div>
	<!-- end content instagram -->


	<!-- footer -->
	<div class="footer">
		<p class="name-footer">Look`a Me</p>
		<nav class="menu-footer">
			<ul>
				<li><a href="index.php">Главная</a></li>
				<li><a href="shop.php">Магазин</a></li>
				<li><a href="about.php">О нас</a></li>
				<li><a href="link.php">Связь</a></li>
				<li><a href="sale.php" class="sale-url">Sale %</a></li>
			</ul>
		</nav>
		<nav class="nav-link">
			<ul>
				<a href="#"><li style="background-image: url(/images/icons/footer-menu/inst.png);" title="instagram"></li></a>
				<a href="#"><li style="background-image: url(/images/icons/footer-menu/twitter.png);" title="twitter"></li></a>
				<a href="#"><li style="background-image: url(/images/icons/footer-menu/telegram.png);" title="telegram"></li></a>
			</ul>
		</nav>
	</div>
	<div class="foter-card-copy">
		<p class="copyrighting">© 2020 All rights reserved. Designed by <a href="https://www.instagram.com/adam_maks/" target="_blank" class="url-copy-inst">adam_maks</a>.</p>
		<nav class="nav-link">
			<ul>
				<li style="background-image: url(/images/icons/footer-menu/paypal.png);" title="Pay Pal"></li>
				<li style="background-image: url(/images/icons/footer-menu/mastercard.png);" title="Master Card"></li>
				<li style="background-image: url(/images/icons/footer-menu/visa.png);" title="Visa"></li>
			</ul>
		</nav>
	</div>
	<!-- end footer -->
</body>
</html>