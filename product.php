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

	<!-- content three -->
	<div class="product-block">
		<div class="left-product">
			<div class="galery-slider">
			</div>
		</div>
		<div class="right-product">
			<p class="name-product-right">Белая рубашка из пике на пуговицах с логотипом Polo Ralph Lauren - Big & Tall</p>
			<p class="price-product-right">8 120,00 ₽</p>
			<div class="select-size-right">
				<form action="#" method="post">
	                <select size="1" class="form-select-size-product">
		                <option disabled="">Выберите размер</option>
		                <option>M</option>
		                <option selected="">S</option>
		                <option>L</option>
		                <option>XL</option>
	                	<input type="submit" value="В корзину" class="button-in-cart-product">
	                </select>
	            </form>
			</div>
		</div>
	</div>
		<div class="description-product">
			<p class="name-description-product">Описание</p>
			<p class="text-description-product">
				PATCH 42.2 задает тон, влияя на наш образ — стиль жизни. Он погружает вас в свой мир грез, фантазий и нестандартных идей. Look`a Me and PATCH 42.2 — не остановить, эта линия стиля уже в твоем сердце — один взгляд и вы одно целое, словно магия.
			</p>
			<p class="text-description-product">
				Мы гарантируем! Качество наших костюмов вас приятно удивит! Это отражается в нашей идеи — сделать так чтобы ваш взгляд и первое прикосновение остались незабываемыми.	
			</p>
			<p class="text-description-product">
				В каждом шве, в супер приятной ткани для вашего тела это главное отличие от других брендов, мы вкладываем в производство PATCH 42.2 частичку себя.
				И да, мы сами с удовольствием носим PATCH 42.2 — присоединяйся.
			</p>
		</div>
	<!-- end content three -->

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