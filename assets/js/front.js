$('.datepicker').each(function(){
    $(this).datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
    });
});

function readURL(input) {
  console.log("masuk");
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#preview-profile-picture').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

function alertError(msg){
	swal({
		title: msg,
		icon: "error",
	});
}


$(document).ready(function(){
	
	$('#testimonial-container').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<a href="javascript:void(0)" class="arrow arrow-left"><i class="fa fa-angle-left"></i></a>',
        nextArrow: '<a href="javascript:void(0)" class="arrow arrow-right"><i class="fa fa-angle-right"></i></a>',
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
              }
            }
          ]
    });
});