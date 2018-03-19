<?php require 'dbconnection.php' ?>

<?php

if(isset($_REQUEST['query'])) {

	$query = $_REQUEST['query'];

    $sql = mysqli_query ($connect, "SELECT originalfilename, type FROM fileinfo WHERE originalfilename  LIKE '%{$query}%'");
	$array = array();
    while ($row = mysqli_fetch_array($sql)) {
        $array[] = array (
            'label' => $row['originalfilename'].', '.$row['type'],
            'value' => $row['originalfilename'],
        );
    }
    //RETURN JSON ARRAY
    echo json_encode ($array);
}

?>