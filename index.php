<?php
include('data/portfolio.inc.php');
include('config/import.inc.php');
include('functions/import.inc.php');
?>
<!doctype html>
<html>
	<head>
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<title><?= $sitename; ?></title>
		<link href="<?= $paths->libs; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" />
		<link href="<?= $paths->css ?>main.css" rel="stylesheet" />
	</head>
	<body>

		<header class="js-header header">
			<div class="wrap header__wrap">
				<img class="header__logo" src="<?= $paths->imgs ?>logo.svg" />
				<p class="header__strap"><span>Web Design &amp; Development <em>by</em> </span>Simon Hudson</p>
			</div>
		</header>

		<main class="portfolio">
			<h1 class="visuallyhidden"><?= $sitename; ?></h1>
			<?php foreach($portfolio as $item): ?>
				<div class="item">
					<div class="wrap item__wrap">
						<div class="item__img">
							<img src="http://placehold.it/350x150" />
						</div>
						<div class="item__content">
							<div class="item__info">
								<h2 class="item__title faux-h5"><?= $item->title; ?></h2>
								<div class="item__links">
									<?php if (isset($item->url)): ?>
										<a class="item__link item__link--project" href="http://<?= $item->url; ?>" rel="noopener" target="_blank">
											<?= icon('link') ?>
											View <span class="visuallyhidden"><?= $item->title; ?> </span>project<?= $newTabWindowWarning ?>
										</a>
									<?php endif; ?>
									<?php if (isset($item->github)): ?>
										<a class="item__link item__link--project" href="http://www.github.com/simonhudson/<?= $item->github; ?>" rel="noopener" target="_blank">
											<?= icon('github') ?>
											View <span class="visuallyhidden"><?= $item->title; ?> </span>on Github<?= $newTabWindowWarning ?>
										</a>
	                            	<?php endif; ?>
								</div>
							</div>
							<div class="item__text">
								<?php foreach($item->text as $textItem): ?>
									<p><?= $textItem ?></p>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</main>

		<footer class="about">
			<div class="about__img">
				<img alt="Simon Hudson" src="<?= $paths->imgs ?>self.png"/>
			</div>
			<div class="about__text">
				<h2 class="faux-h3">Hello, my name's Simon and I build websites.</h2>
				<p>I am an experienced web designer/front-end developer who specialises in writing lean, standards-compliant <abbr title="eXtensible Hypertext Markup Language">(X)HTML</abbr>, <abbr title="Cascading Style Sheets">CSS</abbr> and JavaScript to create accessible and usable websites. I have a strong understanding of <abbr title="Web Content Accessibility Guidelines">WCAG</abbr> and <abbr title="Web Accessibility Initiative">WAI</abbr> requirements, W3C standards, browser quirks and progressive enhancement/graceful degradation, as well as experience developing for assistive technologies.</p>
			</div>
			<ul class="about__links">
				<li class="about__link">
					<a href="<?= $root; ?>Simon_Hudson_CV.pdf" rel="noopener" target="_blank">
						<?= icon('file-pdf-o'); ?>
						Download my CV
						<small>(PDF, <?= formatBytes(filesize('Simon_Hudson_CV.pdf')); ?>)</small>
						<?= $newTabWindowWarning ?>
					</a>
				</li>
				<li class="about__link">
					<a href="https://github.com/simonhudson?tab=repositories" rel="noopener" target="_blank">
						<?= icon('github') ?>
						Github profile
						<?= $newTabWindowWarning ?>
					</a>
				</li>
				<li class="about__link">
					<a href="http://stackoverflow.com/story/simonhudson" rel="noopener" target="_blank">
						<?= icon('stack-overflow'); ?>
						Stack Overflow Developer Story
						<?= $newTabWindowWarning ?>
					</a>
				</li>
			</ul>
		</footer>

		<script src="<?= $paths->js ?>main.js"></script>
	</body>
</html>
