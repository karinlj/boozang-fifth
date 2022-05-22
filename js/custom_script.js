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

  /*Menu Desktop*/
  /*toggle sub-menu-open class*/
  $("nav ul li.menu-item-has-children").click(function (event) {
    event.stopPropagation(); /* to stop the 'document handler' from activating at the same time as the click event on class */
    $(this).children("ul").toggleClass("open");
  });

  /*remove class clicking anywhere on page*/
  $(document).click(function (event) {
    if (
      !$(event.target).closest("nav ul li.menu-item-has-children ul").length
    ) {
      $("nav ul li.menu-item-has-children ul").removeClass("open");
    }
  });

  /*Mobile menu*/
  /*toggle classes and attributes when btn click */
  $(".menu_toggle_btn").click(function () {
    $(this).toggleClass("btn_clicked");

    let expanded = $(this).attr("aria-expanded") === "true";
    $(this).attr("aria-expanded", !expanded);

    $(".nav-mobile").toggleClass("menu_open");

    $("body").toggleClass("no_scroll");
  });

  $(".nav-mobile ul li.menu-item-has-children").click(function (event) {
    event.stopPropagation();
    $(this).children("ul").toggleClass("open");
  });

  //feature slider
  // var rand = Math.floor(Math.random() * 3 + 1);
  // //set active class on rand
  // $(".tab_content:nth-child(" + rand + ")").addClass("active");
  // $(".tab_link:nth-child(" + rand + ")").addClass("active");

  $(".tab_link").click(function () {
    //get value of data_tab-attribute in this link
    var tab_id = $(this).attr("data_tab");

    //Toggle tab link
    //first remove active class, then add active class
    $(this).addClass("active").siblings().removeClass("active");

    //Toggle target tab
    $("#" + tab_id)
      .addClass("active")
      .siblings()
      .removeClass("active");
  });

  //enlarge image at two_columns
  $(".part.image .pict").click(function () {
    // console.log("this", this);
    $(this).toggleClass("enlarge");
  });
  /*remove class clicking anywhere on page*/
  $(document).click(function (event) {
    if (!$(event.target).closest(".part.image .pict").length) {
      $(".part.image .pict").removeClass("enlarge");
    }
  });
  //enlarge image blog
  $(".post_text figure img").click(function () {
    $(this).toggleClass("enlarge");
  });
  $(document).click(function (event) {
    if (!$(event.target).closest(".post_text figure img").length) {
      $(".post_text figure img").removeClass("enlarge");
    }
  });
});
document.ready;
