<?php include('layouts/precontent.inc.php'); ?>

    <?php foreach($portfolio as $item) { ?>
        <section id="item-<?php echo $item->slug; ?>">
            <div class="col-xs-12">
                <img alt="<?php echo $item->title; ?> screen shot" src="<?php echo $config->paths->imgs; ?>teasers/<?php echo $item->slug; ?>.png" />
            </div>
            <div class="container">
                <div class="col-md-9">
                    <h2><?php echo $item->title; ?></h2>
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