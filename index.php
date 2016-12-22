<?php
include('data/portfolio.inc.php');
include('config/import.inc.php');
?>
<!doctype html>
<html>
	<head>
		<title><?= $sitename; ?></title>
		<link href="<?= $paths->css ?>main.css" rel="stylesheet" />
	</head>
	<body>

		<header class="js-header">
			<div class="wrap header__wrap">
				<img class="header__logo" src="<?= $paths->imgs ?>logo.svg" />
				<p class="header__strap"><span>Web Design &amp; Development by </span>Simon Hudson</p>
			</div>
		</header>

		<main class="wrap">
			<h1 class="visuallyhidden"><?= $sitename; ?></h1>
			<?php foreach($portfolio as $item): ?>
				<div class="item">
					<img class="item__img" src="http://placehold.it/350x150" />
					<div class="item__content">
						<div class="item__info">
							<h2><?= $item->title; ?></h2>
							<div class="item__links">
								<?php if (isset($item->url)): ?>
									<a class="item__link item__link--project btn btn--primary" href="http://<?= $item->url; ?>" target="_blank">View <span class="visuallyhidden"><?= $item->title; ?> </span>project<span class="visuallyhidden"> (opens in a new tab/window)</span></a>
								<?php endif; ?>
								<?php if (isset($item->github)): ?>
									<a class="item__link item__link--project btn btn--primary" href="http://www.github.com/simonhudson/<?= $item->github; ?>" target="_blank">View <span class="visuallyhidden"><?= $item->title; ?> </span>on Github<span class="visuallyhidden"> (opens in a new tab/window)</span></a>
                            	<?php endif; ?>
							</div>
						</div>
						<div class="item__text">
							<p><?= $item->text; ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</main>

		<script src="<?= $paths->js ?>main.js"></script>
	</body>
</html>
