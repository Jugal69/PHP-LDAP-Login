<?php 
	Header('always set Access-Control-Allow-Origin "*"');
Header ('always set Access-Control-Allow-Methods "POST, GET, OPTIONS, DELETE, PUT"');
Header ('always set Access-Control-Max-Age "1000"');
Header ('always set Access-Control-Allow-Headers "x-requested-with, Content-Type, origin, authorization, accept, client-security-token"');
echo json_encode(array('name'=>'Ankur' , 'example'=>'cross domain ajax'))
?>