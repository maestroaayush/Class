<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="">

</head>
<body>
	
	<p id="firstparagraph"></p>

	<p id="name"></p>

	<p id="counter"></p>


	<script>
		// .js, .ts, .sass, => .css
		/*alert("Hello world"); -> */
		/*console.log("Hello world");*/
		document.getElementById('firstparagraph').innerHTML ="Hello world";


		let name_test = "Sandesh";
		var a = 10;
		var b = '10';
		var c = a + b ;

		/*
			Data Types 

			a. String
				'', ""

			b. Number
				i. integer
				ii. float

			c. Array
				-> Indexive

			d. Object
				-> Associative Object, Json

			e. Null
				-> null, NULL, ''

			f. Boolean
				-> true, false,
				-> 1, 0

		*/

		var fruits = [
			["apple", 200],
			["ball", 50]
		];

		fruits.push(["Cat", "animal"]);
		// fruits[2] = ["Cat", "animal"];

		document.getElementById('firstparagraph').innerHTML = fruits[2][0];

		// Object
		var person = {
			name: "Test User",
			address: "Kathmandu",
			phone: 9874563210,

			getPerson: function(){
				return "hello world";
			},
			getName: function(){
				return this.name;
			}
		};


		document.getElementById('name').innerHTML = person.getName();

		/*
			Operators
			a. Arithematic Operators
				+, -, *, /, %

			b. Increment or Decrement
				++, --
				var a = 10;
				a++;
				++a;

			c. Comparision Operators
				<, >, <=, >=, ==, ===, !=, !==, <>

			d. Logical Operators
				&&, ||, !

				var a = 10;
				var b = 15;

				!(a < b)

			e. Assignment Operators
				=, +=, -=, *=, /=, %=

			f. String, concatination Operators
				+

			g. Conditional Operators / ternary operators
				() ? true condition : false condition


			control Statments
				a. If-else
				b. else-if
				c. Loop 
					a. while
					b. for
					
		*/

		var user = {
			/*name: "User One",*/
			/*email: "userone@gmail.com",*/
			address: "Kathmandu, Nepal"

		};


		if(user.name){
			document.getElementById('name').innerHTML= user.name;
		} else {
			document.getElementById('name').innerHTML = "User name does not exists.";
		}


		if(user.name){
			document.getElementById('name').innerHTML= user.name;
		} else if(user.email){
			document.getElementById('name').innerHTML= "Email Address: " + user.email;
		}
		else {
			document.getElementById('name').innerHTML = "User name does not exists.";
		}

		var i =1;
		var html = "";
		while(i <= 10){
			html += "&nbsp;"+i;
			i++;
		}

		document.getElementById('counter').innerHTML= html;

		html ="";
		for(var i =1; i <=10; i++){
			html += "&nbsp;"+i;
		}
		document.getElementById('counter').innerHTML= html;


		var users = ["Ram", "Shyam", "Hari"];

		// array size 
		var leng = users.length;
		html = '';

		for(i=0; i<leng; i++){
			html += users[i] + "<br>";
		}

		document.write(html);

		var user;

		for(user of users){
			document.write(user + "<br>");
		}




		var users = {
			first: "Sandesh",
			last: "Bhattarai",
			address: "Kadaghari"
		};

		var test;

		document.write("<br>") 
		document.write("<br>")

		for(test in users){
			document.write(users[test]+"<br>");
		}
	</script>
</body>
</html>