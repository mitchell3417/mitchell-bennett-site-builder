<?php
	// Calculate how many years have passed since a given date.
	function years_since( $date ) {
		$now = new DateTime();
		$since = new DateTime( $date );
		$diff = $now->diff( $since );
		return $diff->y;
	}