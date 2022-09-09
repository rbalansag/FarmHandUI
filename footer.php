<script src="asset/jquery.min.js"></script>
<script src="asset/slider.js"></script>
<script src="asset/fontawesome.js"></script>

<script type="text/javascript">
  $(".toggle-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    }else{
      input.attr("type", "password");
    }
  });

  $('.number').click(function(){
  	
  	if ($('.i1').val() == '') {
		$('.i1').val($(this).val())
		$('.circlepin1').toggleClass('circlepin1_show')
  	}else if ($('.i2').val() == '') {
  		$('.i2').val($(this).val())
  		$('.circlepin2').toggleClass('circlepin2_show')
  	}else if ($('.i3').val() == '') {
  		$('.i3').val($(this).val())
  		$('.circlepin3').toggleClass('circlepin3_show')
  	}else if ($('.i4').val() == '') {
  		$('.i4').val($(this).val())
  		$('.circlepin4').toggleClass('circlepin4_show')
  	}else if ($('.i5').val() == '') {
  		$('.i5').val($(this).val())
  		$('.circlepin5').toggleClass('circlepin5_show')
  	}
  })

  $('.reset').click(function(){
  	
  $('.inputnumber').val('')
  $('.circlepin1').toggleClass('circlepin1_show')
  $('.circlepin2').toggleClass('circlepin2_show')
  $('.circlepin3').toggleClass('circlepin3_show')
  $('.circlepin4').toggleClass('circlepin4_show')
  $('.circlepin5').toggleClass('circlepin5_show')
  })
</script>