<?php $core_path = $_SERVER[DOCUMENT_ROOT];
	  $core_path .= "/System/Core/Core.php"; ### REQUIRE CORE ###
	  require_once ($core_path);

	// Redirect to the Landing Page
	// header('location: /Articles');
	// header('location: /Home');
	header('location: /page/getting-started');
?>

<?php // Pages Stuff
if(isset($_GET['page']) AND isset($pagecontent[$_GET['page']])) 
{ 
 // Is an $_GET Variable available force PHP to check  
 // if the File exists and if it exists to load it.
 if(!file_exists($pagecontent[$_GET['page']])) echo "The File does not exist."; 

 include $pagecontent[$_GET['page']];
} 
else 
{ 
 //Wenn keine Variable oder Definition vorhanden ist 
 //lade die Fehlerseite bzw. die Indexseite 
 include $pagecontent['error'];  
} ?>

<?php  // Count Visitors & get Visitor Informations
    // Include Visitor Counter Code
    $core_path = $_SERVER[DOCUMENT_ROOT];
	$core_path .= "/Mods/Plugins/GetVisitorInformation.php"; ### REQUIRE PLUGIN FILE ###
	require_once ($core_path);  
?>


