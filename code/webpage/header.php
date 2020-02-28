<?php

// Session Variables
session_start();

echo <<<_END
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Show You Care, Park Elsewhere</title>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>
_END;

if (isset($_SESSION['loggedInSkeleton']))
{
	// THIS PERSON IS LOGGED IN
	// show the logged in menu options:
	echo <<<_END
	<nav>
	<h1>Show You Care, Park Elsewhere</h1>
	<a href='home.php'>Home</a>
	<a href='account.php'>My Account</a>
	<a href='sign_out.php'>Sign Out ({$_SESSION['username']})</a>
_END;
    // add an extra menu option if this was the admin:
    // this allows us to display the admin tools to them only
	if ($_SESSION['username'] == "admin")
	{
		echo "<a href='admin.php'>Frank's Admin Tools</a>";
	}
}
else
{
	// THIS PERSON IS NOT LOGGED IN
	// show the logged out menu options:
	echo <<<_END
	<nav>
	<h1>Show You Care, Park Elsewhere</h1>
	<a href='home.php'>Home</a>
	<a href='sign_up.php'>Sign Up</a>
	<a href='sign_in.php'>Sign In</a>
	</nav>
_END;
}

echo <<<_END
</nav>
<article>
<br>
_END;

?>