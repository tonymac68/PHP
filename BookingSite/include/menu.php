<?php

if ($_SESSION['userType'] == "user")
{
		echo(@"<div id=\"menu\">
				<ul>
					<li><a href=\"users.php\">My Details</a></li>
					<li><a href=\"users_events.php\">Show Events</a></li>
					<li><a href=\"functions/logout.php\">Log Out</a></li>
				</ul>
			</div>");
}
else
{
	echo(@"<div id=\"menu\">
				<ul>
					<li><a href=\"admin_events.php\">Manage Events</a></li>
					<li><a href=\"admin_bookings.php\">Manage Bookings</a></li>
					<li><a href=\"admin_add_event.php\">Add an Event</a></li>
					<li><a href=\"functions/logout.php\">Log Out</a></li>
					<!--- <li><a href=\"\"></a></li> -->
					<!--- <li><a href=\"\"></a></li> -->
				</ul>
			</div>");
}
?>