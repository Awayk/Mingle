$(function () {
  $(document).scroll(function () {
	  var $nav = $("#navBar");
	  $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    var $navOuter = $("#outerNavbar");
    $navOuter.toggleClass('scrolled', $(this).scrollTop() > $navOuter.height());

	});
});
