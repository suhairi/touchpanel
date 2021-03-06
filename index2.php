<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<title>Cardswipe Demonstration</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="dist/jquery.cardswipe.js"></script>

	<style type="text/css">
		.data { font-family: "Lucida Console", Monaco, monospace }
	</style>
</head>
<body>
	<h1>Cardswipe Demo</h1>
	<p>Plug in your card reader and scan a card. This page uses the built-in card data parsers, which recognize various formats.</p>

	<h2>Scan data:</h2>
	<div class="result">
		<ul id="properties">
		</ul>
		<p>Status: <span id="status"></span></p>
	</div>

	<h2>Form on the Page</h2>
	<p>Scanning a card will not interfere with form fields. Type a few characters into the field below and start a scan.</p>
	<form>
		<label>Form input field: <input type="text" name="field1" /></label>
	</form>

	<script type="text/javascript">
		// Called on a successful scan, where one of the parsers recognizes the card data.
		var success = function (data) {
			$("#status").text("Success!");
			$("#properties").empty();
			// Iterate properties of parsed data
			for (var key in data) {
				if (data.hasOwnProperty(key)) {
					var text = key + ': ' + data[key];
					$("#properties").append('<li class="data">' + text + '</li>');
				}
			}
		}
		var error = function () {
			$("#status").text("Failed!");
			$(".line").text("");
		}
		// Initialize the plugin with default parser and callbacks.
		//
		// Set debug to true to watch the characters get captured and the state machine transitions
		// in the javascript console. This requires a browser that supports the console.log function.
		//
		// Set firstLineOnly to true to invoke the parser after scanning the first line. This will speed up the
		// time from the start of the scan to invoking your success callback.
		$.cardswipe({
			firstLineOnly: false,
			complete: success,
			parsers: [ "visa", "mastercard", "amex", "generic" ],
			error: error,
			debug: true
		});
	</script>
</body>
</html>