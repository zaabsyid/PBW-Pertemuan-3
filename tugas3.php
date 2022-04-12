<?php 
	// no 1
	$huruf = "A";
	if (($huruf == "A") || ($huruf == "I") || ($huruf == "U") || ($huruf == "E") ||
	($huruf == "O")){
		echo "Termasuk huruf vokal"."<br>";
	}
	else{
		echo "Tidak termasuk huruf vokal"."<br>";
	}

	//no 2
	$input = -10;

	if($input < 0){
  		echo "Bilangan $input adalah bilangan Negatif"."<br>";
	}elseif($input > 0){
  		echo "Bilangan $input adalah bilangan Positif"."<br>";
	}else{
  		echo "Bilangan $input adalah netral"."<br>";
	}

	// no 3
	$x = 3;

	switch ($x) {
		case 1:
			echo "Senin"."<br>";
			break;
		case 2:
			echo "Selasa"."<br>";
			break;
		case 3:
			echo "Rabu"."<br>";
			break;
		case 4:
			echo "Kamis"."<br>";
			break;
		case 5:
			echo "Jumat"."<br>";
			break;
		case 6:
			echo "Sabtu"."<br>";
			break;
		case 7:
			echo "Minggu"."<br>";
			break;
		
		default:
			echo "Tidak Ditemukan"."<br>";
			break;
	}

	// no 4
	$mobil1 = array("Toyota", "Mitsubishi", "Tesla", "Honda");
	$mobil2 = array("satu" => "Toyota", "dua" => "Mitsubishi", "tiga" => "Tesla", "empat" => "Honda");

	// a. Tampilkan numberik array ($mobil1) menggunakan for – loop dan while – loop !

	//for loop
	for($i=0; $i<=3; $i++){
        echo "Mobil $mobil1[$i]<br>";
    }
    //while loop
    $i=0;
    while($i<=3){
        echo "Mobil $mobil1[$i]<br>";
        $i++;
    }

    // b. Tampilkan associative array ($mobil2) menggunakan foreach – loop !
    foreach($mobil2 as $key=>$value){
        echo "mobil $key $value <br>";
    }

 ?>