<?php

$strings = ["Hello", "World", "PHP", "Programming"];
foreach($strings as $string){
    $j = $l=strlen($string);
    $revSting = "";
    $vowCount = 0;

    for($i=0;$i<$l;$i++){
        $ch = $string[$i];
        $revSting[--$j]= $ch;
        if($ch=='a'||$ch=='e'||$ch=='i'||$ch=='o'||$ch=='u'||$ch=='A'||$ch=='E'||$ch=='I'||$ch=='O'||$ch=='U')
        $vowCount++;
    }
    echo "Original String: ".$string.", Vowel Count: ".$vowCount.", Reversed String: ".$revSting."</br></br>";
}