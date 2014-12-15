<?php

// function that compute dates overlaps
// take in two time intervals and returns true if they overlap

/*

Interval 1 = [date_start1 - date_end1]
Interval 2 = [date_start2 - date_end2]

*/

// check if start_date1 is superior to date_end2 AND if end_date1 superior to start_date2
// if condition true, then there's an overlap

function doDatesOverlap($start_date, $end_date, $start_date2, $end_date2)
{
	//if dates overlap, return true 
	if($start_date1 <= $end_date2 && $end_date1 >= $start_date2) 
	{ 
		return true;
	}

}

?>