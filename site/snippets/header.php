<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/app.css') ?>
  <?php echo css('assets/foundation-icons/foundation-icons.css') ?>

</head>
<body>
  <!-- Nav Bar -->
  <div id="nav" data-sticky-container>
    <div class="top-bar" data-sticky>
      <div class="row" style="width: 100%;">
        <div class="columns small-12 medium-3">
          <a href="#hello"><img src="assets/images/ibm_pictoral_logo.png" width="140"></a>
        </div>
        <div class="columns small-12 medium-9 top-bar-right right hide-for-small-only">
          <ul class="menu" style="float: right;">
            <li><a href="#todo">Tasks</a></li>
            <li><a href="#in-the-life">About Us</a></li>
            <li><a href="#inspired">Inspiration</a></li>
            <li><a href="#feel-confused">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- /Nav Bar -->
