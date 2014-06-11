(function ($, Drupal) {

Drupal.behaviors.MyProjectButtons = {
  attach: function (context, settings) {
    // Update the Prev/Next button labels
    $('.multipage-link-next').val('Next');
    $('.multipage-link-previous').val('Previous');
  }
};

})(jQuery, Drupal);
