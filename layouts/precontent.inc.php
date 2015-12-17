<?php
session_start();
include('config/site.config.inc.php');
include('config/pages.config.inc.php');
include('config/paths.config.inc.php');
include('functions/functions.inc.php');
include('includes/portfolio.inc.php');
$currentPage = currentPage();
?>
<!doctype html>
<!--[if lt IE 9]>
    <html class="lt-ie9" lang="en">
<![endif]-->
<!--[if gte IE 9]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8"/>
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<meta content="width=device-width, initial-scale=1" name="viewport" />
<title><?= (isset($pages->$currentPage->pageTitle) ? $pages->$currentPage->pageTitle : $pages->$currentPage->mainNavText).$site->globalHeadingFragment; ?></title>
<link href="<?= $paths->libs; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<link href="<?= $paths->css; ?>main.min.css" rel="stylesheet" />
</head>
<body>
    
    <nav class="access-nav">
        <ul>
            <li class="access-nav__item">
                <a class="access-nav__link" href="#main-content">Skip to main content</a>
            </li>
            <li class="access-nav__item">
                <a class="access-nav__link" href="#main-nav">Skip to main navigation</a>
            </li>
        </ul>
    </nav>
    <header class="header--global">
        <div class="grid__wrap">
            <div class="grid__span--4 logo__wrap">
                <a class="logo__link" href="<?= $pages->home->url; ?>">
                    <img alt="<?= $site->name; ?>" class="logo__img" src="<?= $paths->imgs; ?>logo.svg" />
                </a>
            </div>
            <div class="grid__span--14 strapline__wrap">
                <p class="strapline"><?= $site->name; ?></p>
            </div>
            <!-- <a class="navbar-toggle main-nav__toggle" data-showhide-target="main-nav" href="#">
                <span class="fa fa-bars fa-2x"></span>
                <span class="hidden">Menu</span>
            </a>
            <div class="col-md-9">
                <div class="main-nav" data-showhide-content="main-nav" id="main-nav">
                    <ul class="nav navbar-nav main-nav__list">
                    <?php //include('partials/global/main-nav.inc.php'); ?>
                    </ul>
                </div>
            </div> -->
        </div>
    </header>

    <main id="main-content">