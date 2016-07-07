<?php
	session_start();
    // Allow from any origin
    if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400'); 		// cache for 1 day
    }

    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
		echo 'options';
        exit(0);
    }

    //echo "You have CORS!";
	//echo $_SESSION['uid'];
	//echo $_POST['uid'];
?>

<html>
    <head>
        <title>Hello CORS</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>
		$(document).ready(function() {
			var data = <?php echo json_encode($_POST['uid'])?>;
			console.log(data);
	
    $.ajax({
    url: "http://localhost:8081/authenticate",
    type: "POST",
    data: JSON.stringify(data),
	//data: search,
    contentType: "application/json",
	success :function(result) {
       // do what ever you want with data
	   //alert(result.status);
	   //alert("Sent");
		//console.log(result);
		alert("Sent");
	 }
    //complete: callback
});
		});

		</script>
    </head>

    <body>
		<? php header('Location: http://localhost:8081/authenticate'); ?>
        
    </body>
	
</html>
