
      // Modal-Popup for Choice of Page-Mode (Welcome-Page only)
      $(window).on('load',function(){
        $('#choosePageMode').modal('show');
    });

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
       * Stylement of the Image upload and client side check of filsize and filetype
       *
       */
      $('.imgInput').bind('change', function() {
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
          $(this).next('.custom-file-label').html("Upload an Image");
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
          $('#help_filetype').html('<i class="fas fa-exclamation-triangle"></i> Your Image is of type ' + filetype + ' ! THIS IS NOT SUPPORTED ! YOU WILL NOT BE ABLE TO SUBMIT THIS FORM <i class="fas fa-exclamation-triangle"></i>')
          //style the warning as warning
          $('#help_filetype').removeClass('alert alert-success').addClass('alert alert-danger');
        } else {
          //re-enable the submit button in case it got disabled
          $('#formSubmit').prop('disabled', false);
          //add hint with the filesize
          $('#help_filetype').html('<i class="far fa-check-circle"></i> Your Image is of type ' + filetype + ' <i class="far fa-check-circle"></i>');
          //style hint as success
          $('#help_filetype').removeClass('alert alert-danger').addClass('alert alert-success');
        }

        if (filesize > 5) { //if filesize exceeds limit of 5 MB
          //disable the submit button to prevent submission with error
          $('#formSubmit').prop('disabled', true);
          //add hint with the filesize and a warning
          $('#help_filesize').html('<i class="fas fa-exclamation-triangle"></i> Your Image has a size of ' + filesize + 'MB ! IT EXCEEDS THE FILESIZE LIMIT OF 5MB ! YOU WILL NOT BE ABLE TO SUBMIT THIS FORM <i class="fas fa-exclamation-triangle"></i>')
          //style the warning as warning
          $('#help_filesize').removeClass('alert alert-success').addClass('alert alert-danger');
        } else { //filesize is small enough
          //re-enable the submit button in case it got disabled
          $('#formSubmit').prop('disabled', false);
          //add hint with the filesize
          $('#help_filesize').html('<i class="far fa-check-circle"></i> Your Image has a size of ' + filesize + 'MB <i class="far fa-check-circle"></i>');
          //style hint as success
          $('#help_filesize').removeClass('alert alert-danger').addClass('alert alert-success');
        }

      });


      $('.summernote').summernote({
          height: 250,
          placeholder: 'write here...',

          toolbar: [
            ['font', ['bold', 'italic', 'underline', 'superscript', 'subscript', 'strikethrough', 'clear']],
            ['fontname', ['fontname']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            // ['height', ['height']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video', 'hr']],
            ['view', ['codeview']]
          ],
          fontNames: ['Arial', 'Arial Black', 'Courier New', 'Montserrat'],
          fontNamesIgnoreCheck: ['Montserrat'],
          callbacks: {
            onPaste: function(e) {
              var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
              e.preventDefault();
              document.execCommand('insertText', false, bufferText);
            }
          }
            // cleaner:{
            //     action: 'paste', // both|button|paste 'button' only cleans via toolbar button, 'paste' only clean when pasting content, both does both options.
            //     newline: '<br>', // Summernote's default is to use '<p><br></p>'
            //     notStyle: 'position:absolute;top:0;left:0;right:0', // Position of Notification
            //     icon: '<i class="note-icon">[Your Button]</i>',
            //     keepHtml: true, // if false Remove all Html formats
            //     keepOnlyTags: ['<p>', '<br>', '<ul>', '<li>', '<b>', '<strong>','<i>', '<a>', '<h3>'], // If keepHtml is true, remove all tags except these
            //     keepClasses: true, // Remove Classes
            //     badTags: ['style', 'script', 'applet', 'embed', 'noframes', 'noscript', 'html'], // Remove full tags with contents
            //     badAttributes: ['style', 'start'], // Remove attributes from remaining tags
            //     limitChars: false, // 0/false|# 0/false disables option
            //     limitDisplay: 'both', // text|html|both
            //     limitStop: false // true/false
            //   }
          });





      });
