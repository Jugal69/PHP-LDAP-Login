<?php 
session_start();
echo "session";
echo $_SESSION['uid'];
echo "post";
echo $_POST['uid'];
echo "get";
//echo $_GET['uid'];
echo "hello ";

?>

<html>
<head>

<script type="text/javascript">


console.log("hello 1");
window.addEventListener("load",save,false);
function save(){
console.log("hello 2");

//var name = document.getElementById("uid").value;
var name = <?php echo(json_encode($_SESSION['uid']));?>;
var one="1";

document.cookie = one + "=" + name;

console.log("should be :"+one +" "+ name);

alert("should be :"+one +" "+ name);
//localStorage.setItem(one,name);

//console.log(localStorage.getItem(one));
console.log(name);
console.log("current cookie" + document.cookie);

alert("current cookie" + document.cookie);

var theCookies = document.cookie.split(';');
var aString = '';
    for (var i = 1 ; i <= theCookies.length; i++) {
        alert(theCookies[i]);
    }
console.log(aString);
}		
</script>

</head>
<body>

</body>
</html>
<?php header('Location: http://localhost:8080/PMS_new/start'); ?>

