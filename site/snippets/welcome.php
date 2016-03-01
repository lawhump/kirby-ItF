<!-- Welcome -->
<section id="welcome">
  <div class="row align-left">
    <div class="medium-5 small-12 columns">
      <h1><?php echo $data->header()->html() ?></h1>
      <?php echo $data->body()->kirbytext() ?>
      <hr>
      <?php echo $data->closing()->kirbytext() ?>
    </div>
  </div>
</section>
<!-- /Welcome -->
