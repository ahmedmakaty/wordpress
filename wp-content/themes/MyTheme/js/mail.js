$(document).ready(function(){
	
	$("#sel1").on('change',function(){
		if($(this).val() == 'Petrol'){
   			$("#petrol_type_select").fadeIn("slow");
   			$(".electricclass").fadeOut();
  	 	} else {
   			$("#electric_type_select").fadeIn("slow");
   			$(".petrolclass").fadeOut();
   		}
	});
   
    $("#sel2").on('change',function(){
		if($(this).val() == 'Cold applied tapes'){
   			$("#cat").fadeIn("slow");
   			$("#hss").fadeOut();
   			$("#cp").fadeOut();
  	 	} else if($(this).val() == 'Heat shrinkable sleeves') {
   			$("#hss").fadeIn("slow");
   			$("#cp").fadeOut();
   			$("#cat").fadeOut();
   		} else {
   			$("#hss").fadeOut();
   			$("#cat").fadeOut();
   		}
	});

	$("#sel3").on('change',function(){
		if($(this).val() == 'Lug'){
   			$("#lug").fadeIn("slow");
   			$("#connector,#hst,#hsj,#bbi").fadeOut();
  	 	} else if($(this).val() == 'Connector') {
   			$("#connector").fadeIn("slow");
   			$("#lug,#hst,#hsj,#bbi").fadeOut();
   		} else if($(this).val() == 'Heat Shrinkable Termination') {
   			$("#hst").fadeIn("slow");
   			$("#connector,#lug,#hsj,#bbi").fadeOut();
   		} else if($(this).val() == 'Heat shrinkable  joints') {
   			$("#hsj").fadeIn("slow");
   			$("#connector,#hst,#lug,#bbi").fadeOut();
   		} else if($(this).val() == 'Bus bar insulation') {
   			$("#bbi").fadeIn("slow");
   			$("#connector,#hst,#hsj,#lug").fadeOut();
   		}
	});

	$("#sel4").on('change',function(){
		if($(this).val() == 'Copper'){
   			$("#copper_sel").fadeIn("slow");
   			
  	 	}
	});
	
	$('#checkbox1').change(function() {
		if($(this).is(":checked")) {
			$("#product").fadeIn("slow");
		}
	});

});