
// JavaScript (JQuery) Code for Navbar Changes on scroll

$(function () {
  $(document).scroll(function () {
	  var $nav = $("#navBar");
	  $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    var $navOuter = $("#outerNavbar");
    $navOuter.toggleClass('scrolled', $(this).scrollTop() > $navOuter.height());
    var $search = $("#searchButton");
    $search.toggleClass('scrolled', $(this).scrollTop() > $search.height());
	});
});
