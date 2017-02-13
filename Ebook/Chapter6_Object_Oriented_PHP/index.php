<?php 
	class meeting {
		public $name;
		private $price;

		function __construct($name, $price){
            $this->name = $name;
            $this->price = $price;
        }
 
		function hello () {
			return $this->name . ' saying hello';
		}
		function goodbye () {
			return $this->name . ' saying goodbye';
		}
	}

	$say = new meeting("Tqhung04", 10);
	echo $say->hello();

	/**
	* 
	*/
	class car {
		public $name;
        public $color;
        public $type;

		function car_info () {
			echo $this->name . $this->color . $this->type;
		}
	}

	class toyota extends car {
		public $name = 'Toyota';
	    public $color = 'Red';
	    public $type = 'Sport';
	}

	$hn01 = new toyota;
	$hn01->car_info();
	

?>