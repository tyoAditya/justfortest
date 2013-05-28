<?php

class FizzAndBuzz
{
        public static function run($fromNum, $loopUntilNumber)
        {
                for($x=$fromNum; $x<=$loopUntilNumber; $x++){
                        $t = 0;
                        if ($x % 3 == 0){
                                echo "Fizz" ; $t = 1;
                        }
                        if ($x % 5 == 0){
                                echo "Buzz"; $t = 1;
                        }
                        if ($t == 0){
                                echo $x;
                        }
                        echo " ";
                }
		echo "\n";
        }
}

//Test
echo "Running FizzAndBuzz class with range 12 to 20:\n";
FizzAndBuzz::run(12,20);

