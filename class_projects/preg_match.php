<?php
	// get host name from URL
	preg_match('@^(?:http://)?([^/]+)@i', "http://www.sdev253.net/home.html", $matches);
	$host = $matches[1];

	// get last two segments of host name
	preg_match('/[^.]+\.[^.]+$/', $host, $matches);
	print "domain name is: {$matches[0]}\n";
?>