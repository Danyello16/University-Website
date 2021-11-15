<?php
    session_start();
?>
	<!doctype html>
	<html lang="ger">
	<head>
				<!-- META Tags -->
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

				<!-- Einbinden mit Bootstrap -->
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
				<!-- Einbinden mit Css -->
				<link rel="stylesheet" type="text/css" href="css/css.css"/>
								<title>FH Site</title>

</head>

<body>




							<!-- Includieren von andere Webseiten -->
			<?php

		if(empty($_GET["page"]))
		{
		include_once 'include/navigation.php';
		include_once 'include/login.php';
		include_once 'include/header.php';
		include_once 'include/news.php';
		include_once 'include/footer.php';
				}
				else
					{
			$input = $_GET["page"];
			}

	if(!empty($input))
			{
		include_once 'include/navigation.php';
		include_once 'include/login.php';
		switch($input)
		{
			case 'News':    include 'include/news.php';
            break;

			case 'About':    include 'include/about.php';
            break;

			case 'Shop':    include 'include/shop.php';
            break;

			case 'Warenkorb':   include 'include/warenkorb.php';
            break;
				}
			include_once 'include/footer.php';
}
?>


						<!-- das erste ist jQuery, das zweite ist Popper.js, das letzte ist das Bootstrap JS -->
	
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
  
 </body>
</html>