<?php 				
/* Date/Time Interval Calculator
By Ewere Diagboya, 15-Oct-2013 12:23pm

=================
|| Description ||
=================
This is a simple code which helps to give the difference between two date time strings. The current values have a difference of 1yr. But changing any of the values in days months year will give the appropriate difference to the nearest highest value
*/
$time1 = strtotime('2013-05-14 11:50:00');
$time2 = strtotime('2012-05-14 11:50:00');
$interval = $time1 - $time2; // Interval in Seconds

// Display in Secs
if($interval < 60)
{
	if($interval > 1)
	{
		echo $interval."secs";
	}
	else
	{
	echo $interval . "sec";
	}
}
// Convert to Mins
else if($interval >= 60 && $interval < 3600)
{
	$newinterval = $interval / 60;
	$newinterval = round($newinterval);
	if($newinterval > 1)
	{
		echo $newinterval."mins";
	}
	else
	{
	echo $newinterval . "min";
	}
}

// Convert to Hours
else if($interval >= 3600 && $interval < 86400)
{
	$newinterval = $interval / 3600;
	$newinterval = round($newinterval);
	if($newinterval > 1)
	{
		echo $newinterval."hrs";
	}
	else
	{
	echo $newinterval . "hr";
	}
}
// Convert to Days
else if($interval >= 86400 && $interval < 604800)
{
	$newinterval = $interval / 86400;
	$newinterval = round($newinterval);
	if($newinterval > 1)
	{
		echo $newinterval."days";
	}
	else
	{
	echo $newinterval . "day";
	}
}
// Convert to Weeks
else if($interval >= 604800 && $interval < 2419200)
{
	$newinterval = $interval / 604800;
	$newinterval = ceil($newinterval);
	if($newinterval > 1)
	{
		echo $newinterval."wks";
	}
	else
	{
	echo $newinterval . "wk";
	}
}

// Convert to Months
else if($interval >= 2419200 && $interval < 29030400)
{
	$newinterval = $interval / 2419200;
	$newinterval = ceil($newinterval);
	if($newinterval > 1)
	{
		echo $newinterval."mths";
	}
	else
	{
	echo $newinterval . "mth";
	}
}
// Convert to Years
else if($interval >= 29030400)
{
	$newinterval = $interval / 29030400;
	$newinterval = round($newinterval);
	if($newinterval > 1)
	{
		echo $newinterval."yrs";
	}
	else
	{
	echo $newinterval . "yr";
	}
}
?>
