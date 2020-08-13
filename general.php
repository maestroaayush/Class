<?php 	
	
	// isset();

	// empty();

	// date();

	/* Date In PHP*/

	/*
		a. 24 hours
			0-23

		b. 12 hours
			1-12 AM/ PM


		Base date = 1970

		2020-07-22 08:15:20 AM

		2020-07-22 08:15:20


		22nd of July, 2020 - Wednesday

		Year
			a. o => ISO-8601 standard year , Full Year, 2020
			b. Y => Full Year, 2020
			c. y => two digit year value, 20

		Month 
			a. 01-12 			=> m, two digit month number
			b. 1-12	 			=> n, single digit numeric month without leading zero
			c. January-December => F, Name of the month
			d. Jan-Dec 			=> M
		
		Date 
			a. 01-31			=> d, The day of a month,
			b. 1-31				=> j, The day of a month, without leading Zero
			c. Sunday-Saturday	=> l, Full text representation of a day
			d. Sun-Sat 			=> D, Three letter day represent
			e. 	Monday -> 1     => N, ISO-8601, numeric representation
				Sunday -> 7
			f. 	Sunday 	-> 0
				Saturday -> 6 	=> w, Numeric representation of week day

			g. st, nd, rd, th 	=> S, ordinal suffix for the day of the month, this works well with j

			h. W => return no of current week of the year
			i. z => the day of the year, out of 365 or 366
			j. L => return whether it's leap year or not(1, 0)
	
		
		Hour 
			12 Hour =>
				01-12 	=> h, hour return 
				1-12 	=> g, hour return

			24 hour format
				00-23 	=> H, hour return
				0-23	=> G, hour return
		
		Minute
			00-59		=> i

		Second 
			00-59		=> s

		AM/PM
			am/pm 		=> a

			AM/PM 		=> A

	2020-07-22 08:33:15 AM
	

	Europe/Berlin
	Asia/Kathmandu

	*/
	// date_default_timezone_set("Australia/Sydney");

	$time_zone = date_default_timezone_get();	// returns server timezone

	$date = date("Y-m-d h:i:s A");
	

	// 22nd of July 2020 - wednesday
	$date = date("jS")." of ".date("F Y - l");

	$date = date("jS \of F Y - l");
	echo $date;

	// Y-m-d H:i:s

	// how to create date 
	$date = date("Y-m-d H:i:s");	// 2020-07-22 08:58:20

	echo "<br>";
	echo "<br>";
	// After one week date
	$date_stamp = $date." -10 days +1 month";

	// convert that date string into time
	$time_stamp = strtotime($date_stamp);

	$date = date("Y/m/d h:i:s A", $time_stamp);
	echo $date;


	// Templating Functions
	/*include();
	require();*/