jQuery(document).ready(function ($) {
  //faq_accordion_section
  $(".question_part").click(function () {
    //console.log("this", this); = .question_part
    $(this).next().toggleClass("open");
    $(this).children(".question").toggleClass("active");
  });

  /*Blog Sidebar Categories*/
  $(".blog-sidebar ul").prepend(
    '<li class="most-recent"><a href="/blog">Most Recent</a></li>'
  );

  $(window).on("load", function () {
    var path = window.location.pathname;

    if (path.indexOf("blog") >= 0) {
      $(".most-recent").addClass("current-misse");
    }
  });

  /*Desktop*/
  /*when click on menu-item with sub-menu...add or remove class*/
  $("nav ul li.menu-item-has-children").click(function (event) {
    event.stopPropagation(); /* to stop the 'document handler' from activating at the same time as the click event on class */
    $(this).children("ul").toggleClass("sub-menu-open");
    //$('nav ul li.menu-item-has-children ul').toggleClass('sub-menu-open');
  });

  /*remove class clicking anywhere on page*/
  $(document).click(function (event) {
    if (
      !$(event.target).closest("nav ul li.menu-item-has-children ul").length
    ) {
      $("nav ul li.menu-item-has-children ul").removeClass("sub-menu-open");
    }
  });

  /*Mobile menu*/
  /*when click on veggoburger...add or remove class */
  $(".toggle").click(function () {
    $(".nav-mobile").toggleClass("nav-mobile-open");
  });

  $(".nav-mobile ul li.menu-item-has-children").click(function (event) {
    event.stopPropagation();
    $(this).children("ul").toggleClass("sub-menu-open");
  });

  /*remove class clicking anywhere on page*/
  $(document).click(function (event) {
    if (
      !$(event.target).closest(".nav-mobile ul li.menu-item-has-children ul")
        .length
    ) {
      $(".nav-mobile ul li.menu-item-has-children ul").removeClass(
        "sub-menu-open"
      );
    }
  });

  //feature slider
  $("li.feat-menu-item.active").removeClass("active"); //remove active class on li
  $("img.feat-img.active").removeClass("active"); //remove active class on li
  $("li.feat-menu-item.active").addClass("inactive"); //remove active class on li
  $("img.feat-img.active").addClass("inactive"); //remove active class on li
  $(".comes-first li.feat-menu-item:first").addClass("active"); //set active class on first li
  $(".comes-last img.feat-img").addClass("inactive");
  $(".comes-last img.feat-img:first").addClass("active");
  $(".comes-first img.feat-img").addClass("inactive");
  $(".comes-first img.feat-img:first").addClass("active");
  $(".comes-last li.feat-menu-item:first").addClass("active"); //set active class on first li

  $("li.feat-menu-item").click(function () {
    //click on span tag

    $("li.feat-menu-item.active").removeClass("active"); //remove active class on li
    $(this).addClass("active"); // set active class on li to make it expanded

    var itemId = $(this).attr("id"); // get span id
    var imgId = itemId + "_img"; // get img id

    //alert("ItemId:" + itemId);

    $(this)
      .closest(".container")
      .find("img.feat-img.active")
      .removeClass("active"); //remove active class on image
    $(this).closest(".container").find("img.feat-img").addClass("inactive"); //remove active class on image

    $("#" + imgId).addClass("active"); // set img active class on image to set opacity=1 and z-index=2
    $("#" + imgId).removeClass("inactive"); // set img active class on image to set opacity=1 and z-index=2
  });
}); //document.ready
