<?php

class FizzAndBuzz
{
	public static function run($fromNum, $loopUntilNumber)
	{
		$prev1 = "";
		$prev2 = "";
		for($x=$fromNum; $x<=$loopUntilNumber; $x++){
			$t = "";
			if ($x % 3 == 0){
				$t = "Fizz" ; 
			}
			if ($x % 5 == 0){
				$t = "Buzz"; 
			}
			
			if ($t == ""){
				if ($prev1 != "" && $prev2 != ""){
					echo "Bazz";
				}else{
					echo $x;
				}
			}else if ($t != ""){
				echo $t;
			}
			$prev2 = ($prev1!=""?$prev1:"");
                        $prev1 = ($t!=""?$t:"");
			echo " ";
		}
	}
}

FizzAndBuzz::run(4,20);
