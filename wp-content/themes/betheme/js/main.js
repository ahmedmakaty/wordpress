$(document).ready(function() {
	//intial values
  //end of intial values
  //when resize window
  $(window).resize(function() {
	if ($("nav.navbar").width()>1080) {
	$("div.collapse").removeClass("in");
	};



  });


  // end of resize
});
