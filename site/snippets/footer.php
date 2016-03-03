    <!-- Video Modal -->
    <div class="full reveal" style="background-color: #000;" id="videoModal" data-reveal>
      <div class="flex-video widescreen" id="introVideo">
        <iframe width="560" height="315" src="<?php echo $site->video()->html() ?>" frameborder="0" allowfullscreen></iframe>
      </div>
      <button class="close-button button" type="button" data-close aria-label="Close reveal" id="videoClose">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <!-- /Video Modal -->

    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/bower_components/what-input/what-input.js"></script>
    <script src="assets/bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="assets/js/all.js"></script>
  </body>
</html>
