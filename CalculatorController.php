<?php 

class Calculator{
	private $age;
	private $gender; //1-male, 2-female
	private $height;
	private $weight;
	private $activity;

	function __construct($age , $gender, $height , $weight , $activity){
		$this->age = $age;
		$this->gender = $gender;
		$this->height = $height;
		$this->weight = $weight;
		$this->activity = $activity;
	}

	function getAge(){
		return $this->age;
	}

	function getGender(){
		return $this->gender;
	}

	function getHeight(){
		return $this->height;
	}

	function getWeight(){
		return $this->weight;
	}

	function getActivity(){
		return $this->activity;
	}

	function calculations(){	 
		if ($this->gender == 1){

			$brm = 66 + (13.7 * $this->weight) + (5 * $this->height) - (6.8 * $this->age);
		
			$x = 0;
			$coef = 1.025;
			$add = 0.175;
			
			while($x < $this->activity) {
	    		$coef += $add;
	    		$x++;
	    	}

	    	$day_cals = $coef * $brm;
	    	$low_waight_cals = $day_cals - ($day_cals * 0.2);
		}

		if ($this->gender == 2){

			$brm = 655 + (9.6 * $this->weight) + (1.8 * $this->height) - (4.7 * $this->age);  //(BMR - basic metabolic rate в ккал.)

			$x = 0;
			$coef = 1.025;
			$add = 0.175;

			while($x < $this->activity) {
	    		$coef += $add;
	    		$x++;
	    	}

	    	$day_cals = $coef * $brm;	
	    	$low_waight_cals = $day_cals - ($day_cals * 0.2);
		}
		
		return number_format($day_cals, 2, '.', '');
	}

	function loseWeight(){
			$low_waight_cals =  self::calculations() - ($this->calculations() * 0.2);
		return number_format($low_waight_cals, 2, '.', '');
	}
}

	
