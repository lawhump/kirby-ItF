<!-- Things You Should Do Now -->
<section id="todo">
  <div class="medium-4 medium-offset-2 columns">
    <div class="arrow-down green"></div>
  </div>

  <div class="row align-center">
    <div class="columns small-12 medium-6 text-center section-header">

      <h2><?php echo $data->header()->html() ?></h2>
      <h5 class="subheader"><?php echo $data->subheader()->html() ?></h5>

      <hr>
    </div>
  </div>

  <!-- Identify -->
  <div class="row">
    <div class="column large-12">
      <div class="row header">
        <div class="columns small-2 text-right">
          <h3 class="accent">01.</h3>
        </div>
        <div class="columns small-8 medium-4">
          <h3><?php echo $data->section1header()->html() ?></h3>
          <p class="subheader"><?php echo $data->section1subheader()->html() ?></p>
        </div>
      </div>

      <div class="row align-center" data-equalizer>
        <div class="small-12 medium-4 columns stacked-margin">
          <h4><?php echo $data->section1item1header()->html() ?></h4>
          <p data-equalizer-watch class="subheader"><?php echo $data->section1item1body()->html() ?></p>
          <a href="http://alexforibm.com/" target="_blank"><?php echo $data->section1item1link()->html() ?> <i class="fi-arrow-right"></i></a>
        </div>

        <div class="small-12 medium-4 columns stacked-margin">
          <h4><?php echo $data->section1item2header()->html() ?></h4>
          <p data-equalizer-watch class="subheader"><?php echo $data->section1item2body()->html() ?></p>
          <a href="https://www.irs.gov/pub/irs-pdf/fw4.pdf" target="_blank"><?php echo $data->section1item2link()->html() ?><i class="fi-arrow-right"></i></a>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- /Identify -->

<!-- Decide -->
<section id="decide">
  <div class="row">
    <div class="column large-12">
      <div class="row header header-2">
        <div class="columns small-2 text-right">
          <h3 class="accent">02.</h3>
        </div>
        <div class="columns small-8 medium-4">
          <h3><?php echo $data->section2header()->html() ?></h3>
          <p class="subheader"><?php echo $data->section2subheader()->html() ?></p>
        </div>
      </div>

      <div class="row align-center stacked-margin">
        <div class="small-12 medium-2 large-1 columns">
          <img src="assets/images/icons/relocation.png" alt="">
        </div>
        <div class="small-12 medium-6 columns">
          <h4><?php echo $data->section2item1header()->html() ?></h4>
          <p class="subheader"><?php echo $data->section2item1body()->html() ?></p>
        </div>
      </div>

      <div class="row align-center stacked-margin">
        <div class="small-12 medium-2 large-1 columns">
          <img src="assets/images/icons/mailingAddress.png" alt="">
        </div>
        <div class="small-12 medium-6 columns">
          <h4><?php echo $data->section2item2header()->html() ?></h4>
          <p class="subheader"><?php echo $data->section2item2body()->html() ?></p>
        </div>
      </div>

      <div class="row align-center stacked-margin">
        <div class="small-12 medium-2 large-1 columns">
          <img src="assets/images/icons/emergencyContact.png" alt="">
        </div>
        <div class="small-12 medium-6 columns">
          <h4><?php echo $data->section2item3header()->html() ?></h4>
          <p class="subheader"><?php echo $data->section2item3body()->html() ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Decide -->

<!-- Bring These -->
<section id="to-bring">
  <div class="row">
    <div class="column large-12">
      <div class="row header header-3">
        <div class="columns small-2 text-right">
          <h3 class="accent">03.</h3>
        </div>
        <div class="columns small-8 medium-4">
          <h3><?php echo $data->section3header()->html() ?></h3>
          <p class="subheader"><?php echo $data->section3subheader()->html() ?></p>
        </div>
      </div>

      <div class="row align-center text-center" data-equalizer>
       <div class="small-12 medium-3 columns stacked-margin">
         <img src="assets/images/icons/passport.png" alt="" data-equalizer-watch>
         <h4><?php echo $data->section3item1header()->html() ?></h4>
         <?php echo $data->section3item1body()->kirbytext() ?>
        </div>
        <div class="small-12 medium-3 columns stacked-margin">
         <img src="assets/images/icons/graduation.png" alt="" data-equalizer-watch>
         <h4><?php echo $data->section3item2header()->html() ?></h4>
         <?php echo $data->section3item1body()->kirbytext() ?>
        </div>
        <div class="small-12 medium-3 columns stacked-margin">
         <img src="assets/images/icons/bankingInfo.png" alt="" data-equalizer-watch>
         <h4><?php echo $data->section3item3header()->html() ?></h4>
         <?php echo $data->section3item3body()->kirbytext() ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Bring These -->
<!-- /Things You Should Do Now -->
