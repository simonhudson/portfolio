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
			<img class="header__logo" src="<?= $paths->imgs?>logo.svg" />
		</header>

		<main>
			<h1 class="visuallyhidden"><?= $sitename; ?></h1>
			<?php foreach($portfolio as $item): ?>
				<h2><?= $item->title; ?></h2>
				<a class="btn btn--primary" href="<?= $item->url; ?>">View project</a>
				<p><?= $item->text; ?></p>
			<?php endforeach; ?>
		</main>

	</body>
</html>
