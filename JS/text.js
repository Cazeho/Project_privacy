$('body').prepend('<a href="#" class="back-to-top">Back-to top</a>');
			
			$(window).scroll(function(){
				if($(window).scrollTop()>400){
					$('a.back-to-top').fadeln('fast');
				}
			});
			
			function validate(){
	var total = 20;
	
	var q1 = document.forms["qcmForm"]["q1"].value;
	var q2 = document.forms["qcmForm"]["q2"].value;
	var q3 = document.forms["qcmForm"]["q3"].value;
	var q4 = document.forms["qcmForm"]["q4"].value;
	var q5 = document.forms["qcmForm"]["q5"].value;
	var q6 = document.forms["qcmForm"]["q6"].value;
	var q7 = document.forms["qcmForm"]["q7"].value;
	var q8 = document.forms["qcmForm"]["q8"].value;
	var q9 = document.forms["qcmForm"]["q9"].value;
	var q10 = document.forms["qcmForm"]["q10"].value;
	var q11 = document.forms["qcmForm"]["q11"].value;
	var q12 = document.forms["qcmForm"]["q12"].value;
	var q13 = document.forms["qcmForm"]["q13"].value;
	var q14 = document.forms["qcmForm"]["q14"].value;
	var q15 = document.forms["qcmForm"]["q15"].value;
	var q16 = document.forms["qcmForm"]["q16"].value;
	var q17 = document.forms["qcmForm"]["q17"].value;
	var q18 = document.forms["qcmForm"]["q18"].value;
	var q19 = document.forms["qcmForm"]["q19"].value;
	var q20 = document.forms["qcmForm"]["q20"].value;

	
		
	for(i = 1; i<= total; i++){
		if(eval('q'+i) == null || eval('q'+i) == ''){
		alert('vous avez oubliez une question'+i);
		return false;
		}
	}
	
	
	
}