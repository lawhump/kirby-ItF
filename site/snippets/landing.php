<!-- Hello -->
<section id="hello">
  <div class="row text-center">
    <div class="large-12 columns">
      <h1>Hello <span style="text-decoration: underline;" data-flavor="firstName"></span>!</h1>
      <div class="row" id="countdown">
          <div class="small-3 columns num">
            <span class="stat days"></span>
            <br>
            <h4>Days</h4>
          </div>
          <div class="small-3 columns num">
            <span class="stat hours"></span>
            <br>
            <h4>Hrs</h4>
          </div>
          <div class="small-3 columns num">
            <span class="stat minutes"></span>
            <br>
            <h4>Min</h4>
          </div>
          <div class="small-3 columns num">
            <span class="stat seconds"></span>
            <br>
            <h4>Sec</h4>
          </div>
      </div>
      <h5><?php echo $data->greeting()->html() ?></h5>
      <button class="button" id="playVideo" data-toggle="videoModal"><?php echo $data->button()->html() ?> &nbsp;<i class="fi-play-video"></i></button>
    </div>
  </div>
</section>
<!-- /Hello -->
