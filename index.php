<?php include('layouts/precontent.inc.php'); ?>

    <h1 class="hidden"><?= pageHeading(); ?></h1>

    <?php $count=1; foreach($portfolio as $item): ?>
        <section class="portfolio__item" id="item-<?= $item->slug; ?>">
            <div class="grid__wrap portfolio__content <?= ($count % 2 != 0 ? 'grid__wrap--reverse' : ''); ?>">
                <div class="grid__span--6 center-content">
                    <img alt="<?= $item->title; ?> screen shot" class="portfolio__img" src="<?= $paths->imgs; ?>portfolio__<?= $item->slug; ?>--sm.png" srcset="<?= $paths->imgs; ?>portfolio__<?= $item->slug; ?>--md.png 1000w" />
                </div>
                <div class="grid__span--10 grid__pull-<?= ($count % 2 != 0 ? 'left' : 'right'); ?>--2">
                    <h2 class="portfolio__title"><?= $item->title; ?></h2>
                    <?php if (isset($item->client)): ?>
                        <p class="portfolio__client"><strong><?= $item->client; ?></strong></p>
                    <?php endif; ?>
                    <?php if (isset($item->madewith)): ?>
                        <ul class="no-bullet tools__list">
                        <?php foreach ($item->madewith as $madewithitem): ?>
                            <li class="tools__item"><?= $madewithitem; ?></li>
                        <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <?php if (isset($item->text)): ?>
                        <?= $item->text; ?>
                    <?php endif; ?>
                    <?php if (isset($item->url) || isset($item->github)): ?>
                        <div class="portfolio-action__wrap">
                            <?php if (isset($item->url)): ?>
                                <a class="btn portfolio-action__link" href="http://<?= $item->url; ?>" target="_blank">
                                    <span class="fa fa-link fa-2x margin-r-sm"></span>
                                    View project<span class="hidden"> (Link opens in a new window)</span>
                                </a>
                            <?php endif; ?>
                            <?php if (isset($item->github)): ?>
                                <a class="btn--secondary portfolio-action__link" href="http://www.github.com/simonhudson/<?= $item->github; ?>" target="_blank">
                                    <span class="fa fa-github fa-2x margin-r-sm"></span>
                                    View on Github<span class="hidden"> (Link opens in a new window)</span>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php $count++; endforeach; ?>

<?php include('layouts/postcontent.inc.php'); ?>