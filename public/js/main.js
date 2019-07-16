// Open Modal for 'Products' pages.index
$(function () {
    /**
     * Load User Modal
     * @type {any}
     */
    var $modal = $('#loadModal');
    $('.btn-product').on('click', function (e) {
        e.preventDefault();
        $modal.load($(this).attr("data-url"), function () {
            $modal.modal({show: true});
        });
    });

// Home layout navbar
    $('.navbar-nav .nav-item').click(function(){
        $('.navbar-nav .nav-item').removeClass('active');
        $(this).addClass('active');
    })

// Dashboard

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});
     })
