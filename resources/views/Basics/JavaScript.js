// const $arrayString = ["A","B","C","D","E","F"];
//                     //  [ 0,  1,    2, 3,  4,  5] = 6
// const $arrayNumber = [1,2,3,4,5];

// let $string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";


// // console.log(typeof $arrayString);

// // $arrayString[0] = "G"; // 
// // console.log($arrayString[0]); // G
// // console.log($arrayString); // [G,B,C,D,E,F]

// // console.log($arrayString.toString()); // G,B,C,D,E,F
// // console.log($arrayString[$arrayString.length]); // undefined

// // // Last Value Detect = value 
// // console.log($arrayString[$arrayString.length-1]); // F

// // $arrayString[$arrayString.length-1] = "Last";
// // console.log($arrayString); // [ 'G', 'B', 'C', 'D', 'E', 'Last' ]
// // console.log(($string.length));

// const assorialArray = ['name' = 'M', 'age' = 122];

// console.log(assorialArray)

// const fruits = ["Banana", "Orange", "Apple", "Mango"];
// let fLen = fruits.length;

// let text = "<ul>";
// for (let i = 0; i < fLen; i++) {
//   text += "<li>" + fruits[i] + "</li>";
// }
// text += "</ul>";

// console.log(text);


// const cars = ["BMW", "Volvo", "Mini"];

// let text = "";
// for (let x of cars) { // of for value -->
// //   text += x; // text = text +x; 
// //   console.log(x);
// }

// for (let x in cars){ // IN FOR KEY -->
//     console.log(x);
// }

// i = 0;
// while (i < 10) {
//     console.log(i);
//     i++;
// }


// do {
//     console.log(i);
//     i++;
// }
// while (i < 10);


// for();
// for in 
// for of


// const fruits = ["Banana", "Orange", "Apple", "Mango"];

// fruits.forEach(myfun);

// function myfun(v){
//     console.log(v);
// }



// const fruits = ["Banana", "Orange", "Apple"];
// // console.log(typeof fruits); // object 
// // console.log(Array.isArray(fruits)); // true
// console.log(fruits instanceof Array); // true


// let i =  0;
// const arr = [12,13];
// // 1.for
// for(i; i>0; i--){ // 0 theke 100 boro kina choto
//     // console.log(i);
// }

// let string = "Banana";
// 2.for in
// for(let j in arr){
//     console.log(j);
// }
// for(let j of arr){
//     console.log(j);
// }
// 4.foreach
// function myfun(v, i){
// console.log(v+" => "+i); 
// }
// arr.forEach(myfun);
// 5.do... while

// let i = 99;
// do{
// console.log(i);
// i--;
// }while(i>=0);

// 6.while
let i =99;
while(i >=0 ){
    console.log(i);
    i--;
} 