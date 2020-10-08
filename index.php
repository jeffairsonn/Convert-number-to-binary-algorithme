<?php

function convertInBinary($number){

    $binaryNumber = []; // je déclare un tableau qui me permettra d'incrémenté 1 ou 0 en fonction du nombre donné en entrée

    $test = $number;

    // 2^7

    if ($number/128 >= 1){
        array_push($binaryNumber, 1);
        $test -= 128;
        if ($test == 0){
            while (count($binaryNumber) == 8){
                array_push($binaryNumber, 0);
            }
        }
    }

    // 2^6

    if ($number/64 >= 1){
        if ($test - 64 < 0){
            array_push($binaryNumber, 0);
        } else {
            array_push($binaryNumber, 1);
            $test -= 64;
            if ($test == 0){
                while (count($binaryNumber) == 7){
                    array_push($binaryNumber, 0);
                }
            }
        }
    }

    // 2^5

    if ($number/32 >= 1){
        if ($test - 32 < 0){
            array_push($binaryNumber, 0);
        } else {
            array_push($binaryNumber, 1);
            $test -= 32;
            if ($test == 0){
                while (count($binaryNumber) == 6){
                    array_push($binaryNumber, 0);
                }
            }
        }
    }

    // 2^4

    if ($number/16 >= 1){
        if ($test - 16 < 0){
            array_push($binaryNumber, 0);
        } else {
            array_push($binaryNumber, 1);
            $test -= 16;
            if ($test == 0){
                while (count($binaryNumber) == 5){
                    array_push($binaryNumber, 0);
                }
            }
        }
    }

    // 2^3

    if ($number/8 >= 1){
        if ($test - 8 < 0){
            array_push($binaryNumber, 0);
        } else {
            array_push($binaryNumber, 1);
            $test -= 8;
            if ($test == 0){
                while (count($binaryNumber) == 4){
                    array_push($binaryNumber, 0);
                }
            }
        }
    }

    // 2^2

    if ($number/4 >= 1){
        if ($test - 4 < 0){
            array_push($binaryNumber, 0);
        } else {
            array_push($binaryNumber, 1);
            $test -= 4;
            if ($test == 0){
                while (count($binaryNumber) == 3){
                    array_push($binaryNumber, 0);
                }
            }
        }
    }

    // 2^1

    if ($number/2 >= 1){
        if ($test - 2 < 0){
            array_push($binaryNumber, 0);
        } else {
            array_push($binaryNumber, 1);
            $test -= 2;
            if ($test == 0){
                while (count($binaryNumber) == 2){
                    array_push($binaryNumber, 0);
                }
            }
        }
    }

    // 2^0

    if ($number/1 >= 1){
        if ($test - 1 < 0){
            array_push($binaryNumber, 0);
        } else {
            array_push($binaryNumber, 1);
            $test -= 1;
            if ($test == 0){
                while (count($binaryNumber) == 1){
                    array_push($binaryNumber, 0);
                }
            }
        }
    }

    function echoTabValue($tab){
        foreach ($tab as $value){
            echo $value;
        }
    }

    if ($test == 0){
        echoTabValue($binaryNumber);
    } else{
        echo "Ton nombre est trop grand on gère pas encore de tels nombres x(";
    }

}

convertInBinary(4000);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>