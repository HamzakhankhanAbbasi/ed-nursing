$(function () {
  $('#example').dataTable({
    paging: false,
    fixedHeader: {
      header: true
    },
        dom: 'Bfrtip',
        buttons: [
      {
        extend: 'excel',
        text: 'Excel <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
      },
      {
        extend: 'pdf',
        text: 'PDF <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
      },
      
            'copy',
            'pdf',
            'colvis'
        ],
    
  });
});


$(document).ready(function(){
    $('.payment-type').click(function(){
        $('#payment-modal').hide();
        $('.modal-backdrop').hide();
        //$('#credit-modal').show();
    });
});

// Avtar JS One
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});

// Avtar JS Two
function newreadURL(input) {
    if (input.files && input.files[0]) {
        var newreader = new FileReader();
        newreader.onload = function(e) {
            $('#imagePreviewnew').css('background-image', 'url('+e.target.result +')');
            $('#imagePreviewnew').hide();
            $('#imagePreviewnew').fadeIn(650);
        }
        newreader.readAsDataURL(input.files[0]);
    }
}
$("#imageUploadnew").change(function() {
    newreadURL(this);
});


// Tinymc Js
tinymce.init({
		selector: '#editor-cat-repl',
		menubar: false,
		statusbar: false,
		min_height: 200,
		font_formats: "Arial Black=arial black,avant garde; Courier New=courier new,courier; Lato Black=lato; Roboto=roboto;",
		toolbar: "undo redo | styleselect | fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | forecolor backcolor | fontselect ",
		plugins: "textcolor colorpicker",
	});



// More Less Js
$('.moreless-button').click(function() {
  var elem = $(".moreless-button").text();
 if (elem == "Read More") {
      //Stuff to do when btn is in the read more state
      $(".moreless-button").text("Read Less");
      $(".text").slideDown();
    } else {
      //Stuff to do when btn is in the read less state
      $(".moreless-button").text("Read More");
      $(".text").slideUp();
    }
});


// owl slider


$('#sync1').owlCarousel({
  items:1,
  loop:true,
  margin:0,
  autoplay:true,
  autoplayTimeout:3000,
  nav: false,
  dots: true,
  
})






$(document).ready(function() {
            $('.minus').click(function () {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.plus').click(function () {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });
        });


