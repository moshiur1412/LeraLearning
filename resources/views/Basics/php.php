<?PHP

// PHP Arrray;
#An array is a special variable, which can hold more than one value at a time.

// Index Array
$carName1 = "A";
$carName2 = "B";
$carName3 = "C";

$arrayString = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L"];
$arrayNumber = [1,2,3,4,5];
$arrayEmpty = array();
echo "============================================="."\n";
// print_r($arrayString); // array + object --> 
// print_r($arrayNumber); // array + object --> 
// print_r($arrayEmpty); // array + object --> 

// print($arrayEmpty); // Warning/ArrayPHP Warning:  Array to string conversion in 
# Echo Vs Print --> 
# 1. two basic ways to get output
# 2. echo and print are more or less the same.
# 3. echo has no return value while print has a return value of 1
# 4. echo can take multiple parameters while print can take one argument.

// print ("Print: ". $carName3."\n");
// echo ("Echo: ". $carName1 . $carName2); // Concatinate -->

// echo $carName1, $carName2, $carName3, "\n"; // ABC
// // print $carName1, $carName2, $carName3; /// errors 

// // var_dump($arrayString);
// ownEcho (10, 20) ;

// function ownEcho(string ...$value): void{
//     // var_dump($value); // array value return
// }

// function ownPrint(string $value): int{
//     echo $value;
//     return 1;
// }

// print $arrayString[2];
// echo count($arrayEmpty);


// echo "I Like ". $arrayString[0] . " , " . $arrayString[1]."\n"; // concatinate --> 
// echo $arrayString[0].",", $arrayString[2], $arrayNumber[2];  // language construactor --> standard 
print_r($arrayString);

$arrayLength = count($arrayString); //

echo "Array Length: ". $arrayLength."\n"; // 5
echo "============================================="."\n";

// a block of code a specified number of times 
for ($i=0; $i<$arrayLength; $i++){
   echo $arrayString[$i]."\n"; // 
}
echo "============================================="."\n";

// while -> a block of code as long as the specified condition is true
// $i = 0;
// while($i < $arrayLength){
//     echo $i."\n";
//     $i++;
// }

// $i = 0;
// $j = 10;
// while($i <= 100){
//     // echo "The number is: $i \n";
//     $i+=$j; // $i = $i+$j; 
// }

// for($i; $i<=100; $i+=$j){
//     echo "The number is: $i \n";
// }

// do...while -> first do the work then loop

// $i = 99;
// do {
//  echo "This number is: $i \n";
//  $i--;
// } while($i >= 0);  // 98 boro kina 0 theke ?

// print($i);

// while($i >= 0){ // 0 theken -1 bor  kina ?  
//     echo "This number is: $i \n";
//     $i--;
// }


// for($i; $i>=0; $i--){
//     echo "This number is: $i \n";
// }
//  foreach -> key + value 

foreach($arrayString as $values){
    echo $values. "\n";
}

// output 











// print ($assoicateArray['name']);
// print_r($assoicateArray);
// Multidimentional Array 
