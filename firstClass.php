<?php 

  $name = "waleGigs";
 echo "<h1>" . $name . "</h1>";
 $arr1 = [0,1,2,3,4,5,6,7,8,9];
 echo $arr1[4];
 echo gettype($name) . '<br>';
 print_r($arr1);

echo "<br>";
$arr2 = array("name" => "waleGigs", "age" => 21, "color"=>["Black", "Blue", "Red", "club"=>"Barca",],
 "isSingle"=>true);
 print_r($arr2);
 echo "<br>";
   $color = $arr2["color"];
    print_r($color);
    $stringOne = "TestRam";
    echo "<br>";
    echo strlen($stringOne);
    echo "<br>";
    $stringTwo = "My AY IS a considerate Man";
    echo str_word_count($stringTwo);
    echo "<br>";
    $name2 = "Lawal";
    echo strrev($name2);
    echo "<br>";
    $sentence = "This here is our PHP class";
    echo "The position of 'PHP'"  .  strpos($sentence, "PHP");
    
    function test(){
        global $arr2;
        $arr3 = [3,4,5];
    };
    echo "<br>";
    
    define("arr4", [1,2,3,4,5,]);
    print_r(arr4);
    $arr4 = [1,2,3,4,5,6,7];
    for ($i= 0; $i < count($arr4); $i++ ){
      $prod = $arr4[$i] * 7;
      echo "$arr4[$i] x 7 = $prod <br>";
    };
    $arr5 = ["wole", "Haity", "Walegigs", "Samad"];
    for ($i= 0; $i < count($arr5); $i++ ){
     
      echo "my name is $arr4[$i], I am a member of SQI <br>";
    };
    $num1 = 0;
    while ($num1 <= 100){
      echo "$num1 <br>";
      $num1 += 10;

    } 
    $num2 = 0;
    do{
      echo "$num1 <br>";
      $num2 += 10;
    }
    while($num2 <= 100);
    $ages = array("Walegigs"=> 21, "Samad" => 16, "Haity hait" => 23, "Anu" => 18);
    foreach($ages as $names => $ages){
      echo "$names is $ages year old <br>";
    }
    $wale = "My name is wale
    i am a boy not a girl
    i am 20 years old
    it is what it is
    ";
    echo $wale."<br>";
    echo nl2br($wale);
    echo nl2br(htmlentities($wale));
    $Salary = 20000;
    echo "Salary is $Salary <br>";
    $wal= [4,8,9,12,7,10];
    for($i = 0; $i < count($wal); $i++){
      $pro= $wal[$i] * 7;
      echo " $wal[$i] x 7 = $pro  <br>";
    }
    $fm = 'kunleh';
    if ($fm === 'kunle'){
      echo "i am a problem . <br>";
    }
    else{
      echo "i am not a problem. <br>";
    }
     echo $fm ? "lol" :  "lmao" ;

//super global
    ?>