<?php

for ($i = 0; $i <= 100; $i++){
    if($i%2 == 0){
        continue;
    }
    echo "numero impar: $i" . PHP_EOL;
}
