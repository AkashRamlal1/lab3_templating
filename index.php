<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 3 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>

	<!-- laad hier via php je header in (vanuit je includes map) -->

<?php
include 'includes/header.php'

?>

	<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
  <a href="?page=onderwerp1">ow</a>
<a href="?page=onderwerp2">ow2</a>
<a href="?page=onderwerp3">ow3</a>
	<?php

if (isset($_GET['page'])) {

// Get the value of the 'page' parameter from the URL
$page = $_GET['page'];

// Check the value of the 'page' parameter and include the corresponding file
if ($page === 'onderwerp1') {
    include 'pages/onderwerp1.php';
} elseif ($page === 'onderwerp2') {
    include 'pages/onderwerp2.php';
} elseif ($page === 'onderwerp3') {
    include 'pages/onderwerp3.php';
} else {
    // Default fallback behavior if the 'page' parameter is not provided or doesn't match any expected values
    include 'pages/default.php';
}
}
?> 
	<!-- laad hier via php je footer in (vanuit je includes map)-->
  <?php
  
  include 'includes/footer.php'?>

</body>
</html>