<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Events</title>
</head>
<body>
	<p id="counter">0</p>

	<button id="click" onclick="counterIncrease()">
		Click Me
	</button>

	<script>	
		/*
			Event Trigger/Fire
			Event Listen
		*/
		var counter=0;
		function counterIncrease(){
			counter++;
			document.getElementById('counter').innerHTML = counter;
		}


	</script>
</body>
</html>