<?php include 'header.php'; ?>


<div id="logo"></div>

<form method="post" action="getLogin.php">
	<input type="text" name="id" autofocus="on" id="txtId" style="width: 1px; height: 1px">
</form>



<script type="text/javascript">

$(document).ready(function() {

	$('#logo').html("<embed width='" + screen.width + "' height=' " + screen.height + "' src='flashes/mada.swf'>");

	$('#txtId').on("focusout", function() {
		$('#txtId').focus();
	});

});

	
</script>

