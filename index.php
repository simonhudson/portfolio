<?php
include('data/portfolio.inc.php');
include('config/import.inc.php');
?>
<!doctype html>
<html>
	<head>
		<title><?= $sitename; ?></title>
		<link href="<?= $paths->css?>main.css" rel="stylesheet" />
	</head>
	<body>

		<header>
			<div class="wrap header__wrap">
				<img class="header__logo" src="<?= $paths->imgs?>logo.svg" />
				<p class="header__strap"><?= $sitename; ?></p>
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
							<a class="btn btn--primary" href="<?= $item->url; ?>">View project</a>
						</div>
						<div class="item__text">
							<p><?= $item->text; ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</main>

	</body>
</html>
