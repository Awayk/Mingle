

$(function() {

  // JavaScript (JQuery) Code for Navbar Changes on scroll
  $(document).scroll(function() {
    var $nav = $("#navBar");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    var $navOuter = $("#outerNavbar");
    $navOuter.toggleClass('scrolled', $(this).scrollTop() > $navOuter.height());
    var $search = $("#searchButton");
    $search.toggleClass('scrolled', $(this).scrollTop() > $search.height());
    var $toggler = $("#navToggler");
    $toggler.toggleClass('scrolled', $(this).scrollTop() > $toggler.height());
  });

  /*
  *   icon preview for organizations.services.create and organizations.services.edit
  *   reads the class attribute from the #iconPreview on load; changes the class to the selected dropdown content on changes
  *   the class equals the html code of an Fontawesome library icon
  */
  var oldClass = $("#iconPreview").attr('class');
  $("#icon_id").change(function() {
    //add the standard prefix to the selected option to make the icon work and trim whitespaces
    var newClass = "fas fa-" + $("#icon_id option:selected").text().trim();
    $("#iconPreview").removeClass(oldClass).addClass(newClass);
    oldClass = newClass;
  });



});
