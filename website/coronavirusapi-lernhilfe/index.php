<?

// simple php website controller
// by schumanncombo@gmail.com

//fetch yourproject.com/example to q = example
if ( isset($_GET['q']) ) { $q = $_GET["q"]; } else { $q ="home"; }

// create a whitelist array of /pages folder
foreach(glob('pages/*.php') as $file) { 
	$whitelist[] = basename($file,'.php'); 
}

// build the page
include "inc/header.php";
include "inc/navigation.php";

// load page when its in whitelist
if (in_array($q, $whitelist)) { include  "pages/".$q.".php"; }
else { header("Location: /"); die();}

include "inc/footer.php";


?>