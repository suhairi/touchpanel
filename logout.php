<?php

	session_start();
	// session_unset();
	// session_destroy();


?>
<script src="js/jquery.min.js"></script>


<style>

#logout {
	font-family: Arial;
	font-size: 20px;
	background-color: "lightblue";
	border: 3px solid #73AD21;
	text-align: center;
}

</style>

<br /><br />
<div id="logout">Logging Out...</div>






<script language="javascript">

$(document).ready(function() {

	$('#logout').fadeOut(1600, function() {
		window.location.href = "index.php";
	});

});


</script>


