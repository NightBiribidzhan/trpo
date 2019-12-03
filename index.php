<?php
	class BamboniException extends RuntimeException {
	}
	
	class A {
		protected $a;
		protected $b;
		protected $x;
			function __construct ($a, $b) {
				$this->a = $a;
				$this->b = $b;
			}	
			function ur($a, $b){	
				if ($a !=0){
					$x = -1*$b/$a;
					$this->x = $x;
					return array($x);
				}
				else{
					throw new BamboniException ("Нет решения");
				}
			}
	}
	
	class B extends A {
		protected $c;
		protected $x2;
		function __construct ($a, $b, $c){
			parent::__construct($a, $b);
			$this->c=$c;
		}
		protected function des($a, $b, $c){
			$des = $b*$b - 4*$a*$c;
			return $des;
		}
		function ur2($a, $b, $c){
			if ($a = 0){
				return $this->ur($a, $b);
			}
			else if ($des > 0){
				$des = $this->$des($a, $b, $c);
				$x = (-1*$b + sqrt($des))/(2*$a);
				$x2 = (-1*$b - sqrt($des))/(2*$a);
				$this->x = $x;
				$this->x2 = $x2;
				return array ($x, $x2);
			} else if ($des = 0) {
				$des = $this->$des($a, $b, $c);
				$x = (-1*$b)/(2*$a);
				$this->x = $x;
				return array($x);
			}
			else {
			throw new BamboniException ("Нет решений");
			}
		}
	}