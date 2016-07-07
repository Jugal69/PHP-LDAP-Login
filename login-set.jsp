<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Setter</title>

<!-- 
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>
 -->
 <!-- <script src="https://ajax.googleapis.com/ajax/lib/jquery/1.12.4/jquery.min.js" /> -->
 
 

<script src="https://code.jquery.com/jquery-3.0.0.min.js" >
</script>
 
<script type="text/javascript">

$( document ).ready(function() {
	
	console.log("jquery working");
	
	var two=localStorage.getItem("1");
    console.log('Username='+two);
	$('#uid').val = two;
	
	$.ajax({
		//url: "http://localhost:8080/PMS/authenticate",
		url: "authenticate",
		type: "POST",
		data: JSON.stringify(two),		
		contentType: "application/json",
		success :function(result) {
		   // do what ever you want with data
		   //alert(result.status);
		   //alert("Sent");
			//console.log(result);
			alert("Sent");
			
			window.location.href="/viewprofile";
		 }
	//complete: callback
	});
	
	


	
});

</script>

</head>

<body>



</body>



</html>