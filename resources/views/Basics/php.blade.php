<?PHP

// PHP Arrray;


// Index Array
$carName1 = "A";
$carName2 = "B";
$carName3 = "C";


$arrayString = ["A", "B", "C", "D", "E", "F"];

// dd((object)$arrayString);
// $arrayNumber = [1,2,3,4,5];

// print_r($arrayString);
// print_r($arrayNumber);

// print $arrayString[2];

// var_dump($arrayString);
// echo count($arrayString);

$arrayString[count($arrayString) -1] = "last";

// for($i=0; $i< count($arrayString); $i++){
//     echo $arrayString[$i].'<br>';
// }

$i =0;
for($i; $i<50001; $i++){
    $value[$i] = $i;
}
// var_dump( $value);
// echo "worked";


// for ($i=0; $i < $value ; $i++) { 
//     echo $i;
// }
// echo ($arrayString);

// Associate Array
$assoicateArray = [
'name' => "Mr. Test",
'age' => 105,
'last' => "last"
];

$object = (object)$assoicateArray;

dd($object);
foreach ($assoicateArray as $key => $value) {
//    echo $key. " => " . $value . "<br>"; 

var_dump($key);

}


// print ($assoicateArray['name']);
// print_r($assoicateArray);
// Multidimentional Array 
