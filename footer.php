<footer class="footer">
      <?php if ( is_active_sidebar( 'custom_footer' ) ) : ?>
        <?php dynamic_sidebar( 'custom_footer' ); ?>
    <?php endif; ?>
      <?php wp_footer() ?>
    </footer>
  </div>
  <script type="text/javascript">
    (function() {
      var post_process_function = function(n) {
        var node = (n && n.nodeType === 1) ? n : document;
        $(node).find('[title]').tooltip({
          placement: function(tt, elem) {
            return $(document).scrollLeft() > 100 ? 'auto left' : 'auto top'
          },
          container: 'body',
          sanitize: false
        });
        $('.tooltip.fade.in, .ui-tooltip-content').remove();
      };
      var original_post_process_func = ajax_post_process;
      ajax_post_process = function() {
        original_post_process_func.apply(this, arguments);
        post_process_function.apply(this, arguments);
      };
      $(document).ready(post_process_function);
    })();
  </script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".clickable-row").click(function() {
        var href = $(this).attr("href");
        if (window.location.href.indexOf(href) < 0) {
          if ($(this).hasClass('new-window')) {
            window.open(href);
          } else {
            window.document.location = href;
          }
        }
      });
    });
  </script>
</body>

</html>