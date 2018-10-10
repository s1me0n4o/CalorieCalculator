<?php 

spl_autoload_register(function($class){
	require_once($class.'Controller.php');
});

	$gender = $_GET['gender'];
	$age = $_GET['age'];
	$height = $_GET['height'];
	$weight = $_GET['weight'];
	$activity = $_GET['activity'];

	if ((isset($age) && (strlen($age) != 2)) && 
		(isset($gender) && (strlen($gender) != 1)) && 
		(isset($height) && (strlen($height) != 3)) && 
		(isset($activity) && (strlen($activity) != 1))   
	   ){
		throw new Exception('Age is not set in correct format!');
		exit;
	}

	$gender = intval($gender);
	$age = intval($age);
	$height = intval($height);
	$weight = intval($weight);
	$activity = intval($activity);

	if (isset($age) && (is_numeric($age) == 0)){
		throw new Exception('Age is not set in correct format!');
		exit;
	}

	if (isset($height) && (is_numeric($height) == 0)){
		throw new Exception('Height is not set in correct format!');
		exit;
	}

	if (isset($weight) && (is_numeric($weight) == 0)){
		throw new Exception('Weight is not set in correct format!');
		exit;
	}
		

	$calc = new Calculator($age, $gender, $height, $weight, $activity);	
	echo '<h3 class="text-white bg-dark">You need '.$resultCal = $calc->calculations().' calories per day to maintain your weight. If you want to lose 0.5kg of your weight per week, you have to recieve '.$resultLowCal = $calc->loseWeight().' calories per day.</h3>';



