<?php include('layouts/precontent.inc.php'); ?>

    <h1 class="hidden"><?= pageHeading(); ?></h1>

    <?php foreach($portfolio as $item): ?>
        <section class="portfolio__item" id="item-<?= $item->slug; ?>">
            <div class="grid__wrap portfolio__content">
                <div class="grid__span--full center-content">
                    <img alt="<?= $item->title; ?> screen shot" class="portfolio__img" src="<?= $paths->imgs; ?>portfolio__<?= $item->slug; ?>--sm.png" srcset="<?= $paths->imgs; ?>portfolio__<?= $item->slug; ?>--md.png 1000w" />
                </div>
                <div class="grid__span--12">
                    <h2 class="portfolio__title"><?= $item->title; ?></h2>
                    <?php if (isset($item->madewith)): ?>
                        <ul class="no-bullet tools__list">
                        <?php foreach ($item->madewith as $madewithitem): ?>
                            <li class="tools__item"><?= $madewithitem; ?></li>
                        <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <?php if (isset($item->text)): ?>
                        <p><?= $item->text; ?></p>
                    <?php endif; ?>
                </div>
                <div class="grid__span--6">
                    <?php if (isset($item->url) || isset($item->github)) { ?>
                        <?php if (isset($item->url)): ?>
                            <a class="btn portfolio-action__link" href="http://<?= $item->url; ?>" target="_blank">
                                <span class="fa fa-link margin-r-sm"></span>
                                View project<span class="hidden"> (Link opens in a new window)</span>
                            </a>
                        <?php endif; ?>
                        <?php if (isset($item->github)): ?>
                            <a class="btn--secondary portfolio-action__link" href="http://www.github.com/simonhudson/<?= $item->github; ?>" target="_blank">
                                <span class="fa fa-github margin-r-sm"></span>
                                View on Github<span class="hidden"> (Link opens in a new window)</span>
                            </a>
                        <?php endif; ?>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php endforeach; ?>

<?php include('layouts/postcontent.inc.php'); ?>