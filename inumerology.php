<?php
error_reporting(0);

if( isset($_POST["fullname"]) && $_POST["fullname"] !="" && preg_match("/^[a-zA-Z\s]+$/", $_POST["fullname"]) == true && strlen($_POST["fullname"]) > 2 ) {

	# Define fullname 
	$fullname = strtoupper($_POST["fullname"]);

	# Array letters, define vowel and consonant
	$array_letters = array("A"=>array(1,"vowel"),"B"=>array(2,"consonant"),"C"=>array(3,"consonant"),"D"=>array(4,"consonant"),"E"=>array(5,"vowel"),"F"=>array(6,"consonant"),"G"=>array(7,"consonant"),"H"=>array(8,"consonant"),"I"=>array(9,"vowel"),"J"=>array(1,"consonant"),"K"=>array(2,"consonant"),"L"=>array(3,"consonant"),"M"=>array(4,"consonant"),"N"=>array(5,"consonant"),"O"=>array(6,"vowel"),"P"=>array(7,"consonant"),"Q"=>array(8,"consonant"),"R"=>array(9,"consonant"),"S"=>array(1,"consonant"),"T"=>array(2,"consonant"),"U"=>array(3,"vowel"),"V"=>array(4,"consonant"),"W"=>array(5,"consonant"),"X"=>array(6,"consonant"),"Y"=>array(7,"consonant"),"Z"=>array(8,"consonant"));

	#Array person character 
	$array_character = array("1"=>"Pioneering, Leading, Independent, Attaining, Individualistic","2"=>"Cooperation, Adaptability, Considering, Partnering, Mediating","3"=>"Expression, Verbalization, Socialization, Arts, Joy of Living","4"=>"Values of Foundation, Service, Struggle Against Limits, Steady Growth","5"=>"Expansiveness, Visionary, Adventure, Constructive Use of Freedom","6"=>"Responsibility, Protection,Nurturing, Balance, Sympathy","7"=>"Analysis, Understanding, Awareness, Studious, Meditating","8"=>"Practical Endevors, Status Oriented, Power-seeking, High-material goals","9"=>"Humanitarian, Giving, Selflessness, Obligations, Creative Expression");

	# Extract every space on the name
	# Generate array every words
	$extract_fullname = explode(" ",$fullname);

	# Count array of words and
	# Extract words into a letter
	for($a=0; $a<count($extract_fullname); $a++) {
		for($x=0; $x<strlen($extract_fullname[$a]); $x++) {
			
			# Value of letter
			$nl[$extract_fullname[$a]][] = $array_letters[$extract_fullname[$a][$x]][0];

			# Vowel / consonant letter
			$vl[$extract_fullname[$a]][] = $array_letters[$extract_fullname[$a][$x]][1];
		}

		foreach ($vl[$extract_fullname[$a]] as $vkey => $vvalue) {
			if($vvalue == "vowel") {
				$sn[] = $array_letters[$extract_fullname[$a][$vkey]][0];
			} else {
				$pn[] = $array_letters[$extract_fullname[$a][$vkey]][0];
			}
		}

	}

	# Spliting number, convert to array and
	# Sum of array number 
	function strSplitX($x) {

		$sums = array_sum($x);

		if(strlen($sums) > 1 || strlen($sums) <= 2 || strlen($sums) == 11 || strlen($sums) == 22 ) {
			$y = str_split($sums);
			$y = array_sum($y);
			if(strlen($y) > 1) {
				$y = str_split($y);
				$y = array_sum($y);
			}
		} else {
			$y = $sums;
		}

		return $y;
	}

    $soul = array("number"=>strSplitX($sn),"character"=>$array_character[strSplitX($sn)]);
    $personality = array("number"=>strSplitX($pn),"character"=>$array_character[strSplitX($pn)]);

	// echo "<strong>".$fullname."</strong><br>";
	// echo "Your Soul Number : (".strSplitX($sn).") ".$array_character[strSplitX($soul_number)]."<br>";
	// echo "Your Personality Number : (".strSplitX($personality_number).") ".$array_character[strSplitX($personality_number)];
}
?>