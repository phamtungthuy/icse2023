<?php
    get_header();
?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('.carousel').carousel({
          interval: 10000
        })
      });
    </script>
    <?php 
        if(have_posts()) {
            while(have_posts()) {
                the_post();
                the_content();
            }
        }
    ?>
    <div id="notifications-ph" class="webdsl-placeholder"></div>
    <div id="event-modal-loader" class="webdsl-placeholder">
      <form name="form_131600131703c411e65b13378d08eb1f6672b5a0259" id="form_131600131703c411e65b13378d08eb1f6672b5a0259" action="https://conf.researchr.org/eventDetailsModalByAjaxConferenceEdition" accept-charset="UTF-8" method="POST" class="hidden"><input type="hidden" name="form_131600131703c411e65b13378d08eb1f6672b5a0259" value="1" /><input type="hidden" name="context" value="icse-2023" /><input name="ae03f7f6f951d515a297b161e922205d" type="text" value="" class="inputString form-control event-id-input" /><button style="position: absolute; left: -9999px; width: 1px; height: 1px;" onclick='javascript:serverInvoke("https://conf.researchr.org/eventDetailsModalByAjaxConferenceEdition","eventDetailsModalByAjaxConferenceEdition_ia0_3c411e65b13378d08eb1f6672b5a0259", [{"name":"context", "value":"icse-2023"},],"form_131600131703c411e65b13378d08eb1f6672b5a0259", this.nextSibling, false,"event-modal-loader"); return false;'></button><a submitid="eventDetailsModalByAjaxConferenceEdition_ia0_3c411e65b13378d08eb1f6672b5a0259" href="javascript:void(0)" onclick="javascript:loadImageElem=this;$(this.previousSibling).click()" id="load-modal-action"></a></form>
    </div>
    <div id="event-star-form" class="webdsl-placeholder">
      <form name="form_509860938088b48fd14544d4239b498a2cf339e02b" id="form_509860938088b48fd14544d4239b498a2cf339e02b" action="https://conf.researchr.org/eventStarByAjaxConferenceEdition" accept-charset="UTF-8" method="POST" class="hidden"><input type="hidden" name="form_509860938088b48fd14544d4239b498a2cf339e02b" value="1" /><input type="hidden" name="context" value="icse-2023" /><input name="a0b55aa29cf9431a9461b359872014e3" type="text" value="" class="inputString form-control event-id-input" /><button style="position: absolute; left: -9999px; width: 1px; height: 1px;" onclick='javascript:serverInvoke("https://conf.researchr.org/eventStarByAjaxConferenceEdition","eventStarByAjaxConferenceEdition_ia0_88b48fd14544d4239b498a2cf339e02b", [{"name":"context", "value":"icse-2023"},],"form_509860938088b48fd14544d4239b498a2cf339e02b", this.nextSibling, false,"event-star-form"); return false;'></button><a submitid="eventStarByAjaxConferenceEdition_ia0_88b48fd14544d4239b498a2cf339e02b" href="javascript:void(0)" onclick="javascript:loadImageElem=this;$(this.previousSibling).click()" id="star-event-action"></a></form>
    </div>
    <div id="event-modals" class="webdsl-placeholder"></div>
    <script type="text/javascript">
      (function() {
        var post_process_function = function(n) {
          var node = (n && n.nodeType === 1) ? n : document;
          addEventModalLoadOnClick(node);
          addStarredEventOnClick(node);
        };
        var original_post_process_func = ajax_post_process;
        ajax_post_process = function() {
          original_post_process_func.apply(this, arguments);
          post_process_function.apply(this, arguments);
        };
        $(document).ready(post_process_function);
      })();
    </script>

<?php
    get_footer();
?>