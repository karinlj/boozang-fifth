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
  var rand = Math.floor(Math.random() * 3 + 1);
  //set active class on rand
  $(".tab_content:nth-child(" + rand + ")").addClass("active");
  $(".tab_link:nth-child(" + rand + ")").addClass("active");
  // $(".tab_content:first-child ").addClass("active");
  // $(".tab_link:first-child ").addClass("active");

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
});
document.ready;
