function validate(){
	var valid = false;
	var x = document.myform.q1;
	
	for(var i=0;i<x.lenght;i++){
		if(x[i].checked){
		valid= true;
		break;
		}
	}	
	
	if(valid){
		alert("ggggg");
	}
	else{
		alert("aaaaaa");
		return false;
	}
	
	
}
