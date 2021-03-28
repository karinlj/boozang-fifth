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
  // $(".features_menu_item.active").removeClass("active"); //remove active class on li
  // $(".feat_img.active").removeClass("active"); //remove active class on li
  // $(".features_menu_item.active").addClass("inactive"); //remove active class on li
  // $(".feat_img.active").addClass("inactive"); //remove active class on li
  // $(".comes_first li.features_menu_item:first").addClass("active"); //set active class on first li
  // $(".comes_last .feat_img").addClass("inactive");
  // $(".comes_last .feat_img:first").addClass("active");
  // $(".comes_first .feat_img").addClass("inactive");
  // $(".comes_first .feat_img:first").addClass("active");
  // $(".comes_last .features_menu_item:first").addClass("active"); //set active class on first li

  $(".features_menu_item.active").removeClass("active"); //remove active class on li
  $(".feat_img.active").removeClass("active"); //remove active class on li
  $(".features_menu_item.active").addClass("inactive"); //remove active class on li
  $(".feat_img.active").addClass("inactive"); //remove active class on li
  $(".features_menu_item:first").addClass("active"); //set active class on first li
  $(".feat_img").addClass("inactive");
  $(".feat_img:first").addClass("active");
  $(".feat_img").addClass("inactive");
  $(".feat_img:first").addClass("active");
  $(".features_menu_item:first").addClass("active"); //set active class on first li

  $(".features_menu_item").click(function () {
    //click on span tag

    $(".features_menu_item.active").removeClass("active"); //remove active class on li
    $(this).addClass("active"); // set active class on li

    var itemId = $(this).attr("id"); // get span id
    var imgId = itemId + "_img"; // get img id

    //alert("ItemId:" + itemId);

    $(this)
      .closest(".container")
      .find(".feat_img.active")
      .removeClass("active"); //remove active class on image
    $(this).closest(".container").find(".feat_img").addClass("inactive"); //remove active class on image

    $("#" + imgId).addClass("active"); // set img active class on image to set opacity=1 and z-index=2
    $("#" + imgId).removeClass("inactive"); // set img active class on image to set opacity=1 and z-index=2
  });

  //tabs1

  // keep on-ready function nice and clean!
  $(".tab-wrapper").tabs();

  // $(".nav-tab").click(function (e) {
  //   //Toggle tab link
  //   $(this).addClass("nav-tab-active").siblings().removeClass("nav-tab-active");

  //   //Toggle target tab
  //   $($(this).attr("href")).addClass("active").siblings().removeClass("active");
  // });

  //tabs2
  $(".tabs li").click(function () {
    //get value of data_tab-attribute in this link
    var tab_id = $(this).attr("data_tab");
    //console.log("link-tab_id: ", tab_id);

    //first remove active class
    $(".tabs li").removeClass("active");
    $(".tab-content").removeClass("active");

    //add active class on this link
    $(this).addClass("active");
    // console.log("this: ", this);

    //add active class on content
    $("#" + tab_id).addClass("active");
  });
}); //document.ready

// write new features as a plugin
$.fn.tabs = function () {
  // for each tab wrapper ...
  return this.each(function () {
    // capture wrapper context
    var wrapper = this;
    // use single click event per wrapper, delegate  only to inactive tabs
    $(wrapper).on("click", ".nav-tab:not(.active)", function (event) {
      // remove all active
      $(".active", wrapper).removeClass("active");
      // get the clicked tab
      var clicked = $(event.target);
      // add the active class
      clicked.addClass("active");
      // find the tab's content and add the active class
      $(clicked.attr("href"), wrapper).addClass("active");
    });
  });
};
