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

});

$(document).ready(function(){

         //-- Click on detail
         $("ul.menu-items > li").on("click",function(){
             $("ul.menu-items > li").removeClass("active");
             $(this).addClass("active");
         })

         $(".attr,.attr2").on("click",function(){
             var clase = $(this).attr("class");

             $("." + clase).removeClass("active");
             $(this).addClass("active");
         })

         //-- Click on QUANTITY
         $(".btn-minus").on("click",function(){
             var now = $(".section-modal > div > input").val();
             if ($.isNumeric(now)){
                 if (parseInt(now) -1 > 0){ now--;}
                 $(".section-modal > div > input").val(now);
             }else{
                 $(".section-modal > div > input").val("1");
             }
         })
         $(".btn-plus").on("click",function(){
             var now = $(".section-modal > div > input").val();
             if ($.isNumeric(now)){
                 $(".section-modal > div > input").val(parseInt(now)+1);
             }else{
                 $(".section-modal > div > input").val("1");
             }
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
