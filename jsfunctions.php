<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JS Functions</title>
</head>
<body>
	
	<script>
		var a =	10;
		var b = 20;
		var c;
		function getCount(){
			
			c = a + b;
			// code body
			// return
			// return a+b;
		}

		getCount();

		// document.write(c);


		var i = 10

		document.write(i);
		document.write("<br>");

		function getI(){
			// var j = 12;
			return i;
		}

		document.write(getI());

		var a =5;
		document.write("<br>");
		document.write(a);

		{
			let a = 15;
			document.write("<br>");
			document.write(a);
		}

		document.write("<br>");

		document.write(a);



		var i=5;
		document.write("<br>");
		document.write("<br>");

		for(let i=0; i<10; i++){
			document.write(i);

		}
		document.write("<br>");

		document.write("<br>");
		document.write(i);
		
		for(i=0; i<10; i++){
		document.write(i);

		}

		document.write("<br>");
		document.write("<br>");
		document.write(i);


		document.write("<br>");
		document.write("<br>");

		var GRAVITY = 9.8;

		document.write("<br>");
		document.write("<br>");

		document.write(GRAVITY);		// GRAVITY = 10;
		{
			const GRAVITY = 10;
			document.write(GRAVITY);
		}
		document.write("<br>");
		document.write("<br>");

		document.write(GRAVITY);
	</script>
</body>
</html>