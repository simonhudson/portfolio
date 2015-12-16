<?php include('layouts/precontent.inc.php'); ?>

    <h1 class="hidden"><?= pageHeading(); ?></h1>

    <?php foreach($portfolio as $item) { ?>
        <section id="item-<?php echo $item->slug; ?>">
            <img alt="<?php echo $item->title; ?> screen shot" class="portfolio__img" src="<?php echo $config->paths->imgs; ?>teasers/<?php echo $item->slug; ?>.png" />
            <div class="container portfolio__content">
                <div class="col-md-9">
                    <h2 class="portfolio__title"><?php echo $item->title; ?></h2>
                    <?php if (isset($item->text)) { echo $item->text; } ?>
                </div>
                <div class="col-md-3">
                    <p class="item-link"><span class="fa fa-link margin-r-sm"></span><?php if (isset($item->url)) { ?><a href="http://<?php echo $item->url; ?>" target="_blank"><?php echo $item->url; ?><span class="hidden"> (Link opens in a new window)</span></a> <?php } else { ?>Currently offline<?php } ?></p>
                    <?php if (isset($item->madewith)) { ?>
                        <ul>
                            <?php
                            foreach ($item->madewith as $madewithitem) {
                                echo '<li>'.$madewithitem.'</li>';
                            }
                            ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>

<?php include('layouts/postcontent.inc.php'); ?>