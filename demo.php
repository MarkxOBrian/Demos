<?php
	require_once 'dbconnect.php';

	$serialno = sanitize($_POST['serialnum']);
    $clientname = sanitize($_POST['clientnm']);
    $clientnm2 = trim($clientname);
    
    $snumber = trim(preg_replace('/\s+/', '', $serialno));
    $clientnm3 = trim(preg_replace('/\s+/', '', $clientnm2));

    $query = $conn->query("SELECT * FROM items WHERE serial_no = '$snumber' OR client = '$clientnm2'");
    $item = mysqli_fetch_assoc($query);

    echo $snumber. "<br>";
    echo $clientnm3. "<br>";

    echo $item['itemz'];	

    // date_default_timezone_set("Africa/Nairobi");

	// $warranty = 1;
	// $purchase = "2018-07-03";
	// // $purchase2 = "2020-07-03";
	// $startdate = strtotime("$purchase");
	// // $startdate2 = strtotime("$purchase2");
	// $enddate = strtotime("+$warranty year", $startdate);

	// $datecnt1 = "$startdate";
	// $datecnt2 = "$enddate";
	// $datenow = date("Y-m-d");

	// // echo $datenow."<br>";
	// echo "$datecnt1 <br>";
	// echo "$datecnt2 <br>";
	// // echo date("Y-m-d", $startdate );
	// // echo "<br> $startdate, <br>";
	// echo date("Y-m-d", $startdate);
	// echo "<br>";
	// echo date("Y-m-d", $enddate);
	// // echo "<br> $warranty ,<br>";
	// // echo "$purchase <br>";

	// $end = sprintf($startdate);

	// echo "$end <br>";

	// $datetime1 = new DateTime("$datenow");

	// $datetime2 = new DateTime("2020-07-02");

	// $difference = $datetime1->diff($datetime2);

	// // echo 'Difference: '.$difference->y.' <br> years, ' 
 // //                   .$difference->m.' <br> months, ' 
 // //                   .$difference ->d.' <br> days <br>';
 
    
	// // print_r($difference ->days);
 //    // print_r($difference);

	// $results = print_r($difference ->days, true); // $results now contains output from print_r

	// echo $results;

	// $id = (int)$end;
	// var_dump($end);
	// var_dump($id);

	// if ($start > $now) {
	// 	echo "That date is in the future ";
	// }
	// else {
	// 	echo "That date is in the past";
	// }
?>
