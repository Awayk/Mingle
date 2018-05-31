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
    var $login = $("#loginButton");
    $login.toggleClass('scrolled', $(this).scrollTop() > $login.height());
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

  /*
   * Stylement of the logo upload and client side check of filsize and filetype
   *
   */
  $('#logo').bind('change', function() {
    /*
     * Insert the filename of the selected file into the field
     */
    //get the file name
    var fieldVal = $(this).val();
    //replace the "Choose a file" label
    fieldVal = fieldVal.replace("C:\\fakepath\\", "");
    if (fieldVal != undefined || fieldVal != "") {
      $(this).next('.custom-file-label').html(fieldVal);
    } else {
      $(this).next('.custom-file-label').html("Upload Your Organization's Logo");
    }
    /*
     * client side check of filesize and filetype
     */
    //get the file size and round it to MB with 2 decimals
    var filesize = parseFloat(this.files[0].size / 1024 / 1024).toFixed(2);
    //get the filetype and transform it to LowerCase
    var filetype = fieldVal.split('.').pop().toLowerCase();
    //array of accepted filetypes
    acceptedFiletypes = ['jpg', 'jpeg', 'png'];
    //check if the filetype is part of the acceptedFiletypes array
    if ($.inArray(filetype, acceptedFiletypes) == -1) {
      //disable the submit button to prevent submission with error
      $('#formSubmit').prop('disabled', true);
      //add hint with the filetype and a warning
      $('#logo_help_filetype').html('<i class="fas fa-exclamation-triangle"></i> Your Logo is of type ' + filetype + ' ! THIS IS NOT SUPPORTED ! YOU WILL NOT BE ABLE TO SUBMIT THIS FORM <i class="fas fa-exclamation-triangle"></i>')
      //style the warning as warning
      $('#logo_help_filetype').removeClass('alert alert-success').addClass('alert alert-danger');
    } else {
      //re-enable the submit button in case it got disabled
      $('#formSubmit').prop('disabled', false);
      //add hint with the filesize
      $('#logo_help_filetype').html('<i class="far fa-check-circle"></i> Your Logo is of type ' + filetype + ' <i class="far fa-check-circle"></i>');
      //style hint as success
      $('#logo_help_filetype').removeClass('alert alert-danger').addClass('alert alert-success');
    }

    if (filesize > 2) { //if filesize exceeds limit of 2 MB
      //disable the submit button to prevent submission with error
      $('#formSubmit').prop('disabled', true);
      //add hint with the filesize and a warning
      $('#logo_help_filesize').html('<i class="fas fa-exclamation-triangle"></i> Your Logo has a size of ' + filesize + 'MB ! IT EXCEEDS THE FILESIZE LIMIT OF 2MB ! YOU WILL NOT BE ABLE TO SUBMIT THIS FORM <i class="fas fa-exclamation-triangle"></i>')
      //style the warning as warning
      $('#logo_help_filesize').removeClass('alert alert-success').addClass('alert alert-danger');
    } else { //filesize is small enough
      //re-enable the submit button in case it got disabled
      $('#formSubmit').prop('disabled', false);
      //add hint with the filesize
      $('#logo_help_filesize').html('<i class="far fa-check-circle"></i> Your Logo has a size of ' + filesize + 'MB <i class="far fa-check-circle"></i>');
      //style hint as success
      $('#logo_help_filesize').removeClass('alert alert-danger').addClass('alert alert-success');
    }

  });



});
