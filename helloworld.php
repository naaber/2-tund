<?php

	$first_name = "Martti"; //muutuja ees peab olema dollarimärk
	$last_name = "Naaber";

	echo $first_name." ".$last_name; //"echo" trükib välja, nagu Java "console.log"


?>

<br>

<?php

	$age = 10;
	
	//loogikatehted >, <, <=, >=, ==, !=(ei võrdu)
	//if(loogikatehe){tõene} else{väär}
	
	if($age < 18){
		echo "Alaealine";
	} else {
		echo "Täisealine";
	}

?>