<?php include('layouts/precontent.inc.php'); ?>

    <h1 class="hidden"><?= pageHeading(); ?></h1>

    <?php foreach($portfolio as $item): ?>
        <section id="item-<?= $item->slug; ?>">
            <img alt="<?= $item->title; ?> screen shot" class="portfolio__img" src="<?= $config->paths->imgs; ?>teasers/<?= $item->slug; ?>.png" />
            <div class="grid__wrap portfolio__content">
                <div class="grid__span--12">
                    <h2 class="portfolio__title"><?= $item->title; ?></h2>
                    <?php if (isset($item->text)) { echo $item->text; } ?>
                </div>
                <div class="grid__span--6">
                    <?php if (isset($item->url) || isset($item->github)) { ?>
                        <ul class="item__links no-bullet">
                            <?php if (isset($item->url)): ?>
                                <li>
                                    <a class="btn item__link" href="http://<?= $item->url; ?>" target="_blank">
                                        <span class="fa fa-link margin-r-sm"></span>
                                        View project<span class="hidden"> (Link opens in a new window)</span>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (isset($item->github)): ?>
                                <li>
                                    <a class="btn--secondary item__link" href="http://<?= $item->github; ?>" target="_blank">
                                        <span class="fa fa-github margin-r-sm"></span>
                                        View on Github<span class="hidden"> (Link opens in a new window)</span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    <?php } ?>
                    <?php if (isset($item->madewith)): ?>
                        <ul class="no-bullet">
                        <?php foreach ($item->madewith as $madewithitem): ?>
                            <li><?= $madewithitem; ?></li>
                        <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endforeach; ?>

<?php include('layouts/postcontent.inc.php'); ?>