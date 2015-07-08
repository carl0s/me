  <footer>
    <div class="info">
      <?php the_field('footer_text','option'); ?>
    </div>
  </footer>
  <?php wp_footer(); ?>
  <?php get_search_form(); ?>
  <script>var twitterAccount = "carl0s_";</script>
      <div class="MBLSharetip" id="MBLSharetip">
        <div class="tooltipContainer"><a id="sendToTwitter" href="" class="sharingLink twitter"><span></span></a></div>
      </div>
  <script>
  $('.close-search-form').on('click', function() {
    $('.search-form').removeClass('active');
  });
  </script>
</body>
</html>
