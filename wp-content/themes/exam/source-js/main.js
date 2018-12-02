//button-menu

jQuery(document).ready(function () {
  jQuery(document).on('click', '.menu-bat', function () {
    var nav = jQuery('.welcome-list')
    jQuery('.menu-bat').toggleClass('active')
    if (nav.is(':visible')) {
      nav.slideUp()
    } else {
      nav.slideDown()
    }
  })
})