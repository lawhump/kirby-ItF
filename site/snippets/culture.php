<!-- A Day in the Life -->
<section id="in-the-life">

  <div class="small-offset-8 medium-4 medium-offset-8 columns">
    <div class="arrow-down blue"></div>
  </div>

  <div class="row">
    <div class="small-12 columns">
      <div class="row align-center">
        <div class="columns small-12 medium-6 text-center">
          <h2><?php echo $data->header()->html() ?></h2>
          <h5 class="subheader"><?php echo $data->subheader()->html() ?></h5>
        </div>
      </div>
      <div class="row section-top" data-equalizer>

        <div class="small-12 medium-4 columns stacked-margin">
          <div class="row">
            <div class="large-12 small-12 columns life-blurb" data-equalizer-watch>
              <h4><?php echo $data->topleftheader()->html() ?></h4>
              <p class="subheader"><?php echo $data->topleftbody()->html() ?></p>
              <hr>
              <a href="https://www.ibm.com/design/blog-page.shtml?designcamp" target="_blank"><?php echo $data->topleftlink()->html() ?></a>
            </div>
            <div id="career" class="large-12 small-12 columns hide-for-small-only" data-equalizer-watch>
              <div class="arrow-down"></div>
            </div>
          </div>
        </div>

        <div class="small-12 medium-4 columns stacked-margin">
          <div class="row">
            <div id="places" class="large-12 small-12 columns hide-for-small-only" data-equalizer-watch>
              <div class="arrow-up"></div>
            </div>
            <div class="large-12 small-12 columns life-blurb" data-equalizer-watch>
              <h4><?php echo $data->midbottomheader()->html() ?></h4>
              <p class="subheader"><?php echo $data->midbottombody()->html() ?></p>
              <hr>
              <a href="http://www.ibm.com/design/studio.shtml" target="_blank"><?php echo $data->midbottomlink()->html() ?></a>
            </div>
          </div>
        </div>

        <div class="small-12 medium-4 columns stacked-margin">
          <div class="row">
            <div class="large-12 small-12 columns life-blurb" data-equalizer-watch>
              <h4><?php echo $data->toprightheader()->html() ?></h4>
              <p class="subheader"><?php echo $data->toprightbody()->html() ?></p>
              <hr>
              <a href="http://www.ibm.com/design/language/" target="_blank"><?php echo $data->toprightlink()->html() ?></a><br>
              <a href="http://www.ibm.com/design/thinking/" target="_blank">IBM Design Thinking Guide</a>
            </div>

            <div id="language" class="large-12 small-12 columns hide-for-small-only" data-equalizer-watch>
              <div class="arrow-down"></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Culture-->
<section id="culture">
  <div class="row align-center">
    <div class="large-10 columns">
      <div class="section-header">
        <h3>Culture</h3>
      </div>
    </div>
  </div>

  <div class="row align-center">
    <div class="large-6 medium-7 small-12 columns">
      <h6 class="subheader">Insights don't emerge from logic, ordered sequence, rules or agreements; they are born at the edge of chaos (or a caffeine induced fugue state).</h6>
    </div>
    <div class="large-4 medium-5 small-12 columns text-right">
      <hr class="hide-for-small-only">
      <a href="https://www.ibm.com/design/social.shtml" target="_blank">Design Blog</a><br>
      <a href="https://www.ibm.com/design/blog-page.shtml?the-making-of-ibm-design-thinking" target="_blank">Our Mission</a>
    </div>
  </div>

  <div class="row section-top align-center">
    <div class="columns small-12 large-10">
      <div class="flex-video widescreen vimeo">
        <iframe src="https://player.vimeo.com/video/137419283" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>
<!-- /Culture -->
