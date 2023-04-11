<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Workshop 6</h1>
    <h2>PHP Programs</h2>

    <?php
// Question no. 1
    echo "1. To count 5 to 15 using PHP loop.<br>";
    for ($i = 5; $i <= 15; $i++){
        echo "&nbsp;$i,";
    }

// Question no. 2
    echo "<br><br>";
    echo "2. To print “Hello World” using PHP variable. <br>";
    $str = "Hello World";
    echo "&nbsp;$str&nbsp;";

// Question no. 3
    echo "<br><br>3. To check student grade based on marks. <br>";
    $marks = 75;
if ($marks >= 90) {
  $grade = "A+";
} elseif ($marks >= 80) {
  $grade = "A";
} elseif ($marks >= 70) {
  $grade = "B";
} elseif ($marks >= 60) {
  $grade = "C";
} elseif ($marks >= 50) {
  $grade = "D";
} else {
  $grade = "F";
}
echo "Student's marks: " . $marks . "<br>";
echo "Student's grade: " . $grade;

// Question no. 4
echo "<br><br> 4. To find factorial of a number using loop in PHP<br>";
$fact = 1;
for($n=5; $n > 0; $n--){
    $fact *= $n;
}
echo "Factorial of 5 is: ". $fact;

// Question no. 5
echo "<br><br> 5.To create a given pattern with * using for loop<br> ";
$rows = 5; 
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

// Question no. 6
echo "<br>6. Create a PHP script which displays the capital and country name from the above array Sort the list by the name of the capital. <br><br>";
$list = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", 
"France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
 "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", 
 "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", 
 "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
asort($list);
foreach($list as $key => $value){
    echo $key . " : ".$value . "<br>";
}

// Question no. 7
echo "<br><br> 7.Write a PHP function that checks whether a passed string is a palindrome or not?
A palindrome is word, phrase, or sequence that reads the same backward as forward, e.g., madam or dad or noon
<br>";
function palindrome($str){
    $reversestr = "";
    for($i=strlen($str)-1; $i >=0 ; $i--){
        $reversestr .= $str[$i] ;
    }
    if ($str == $reversestr){
        echo "<br>".$str." is a palindrome";
    }
    else{
        echo "<br>".$str. " is not a palindrome";
    }
}
palindrome("madam");
palindrome("dad");
palindrome("noon");
palindrome("isa");

// Question no. 8
echo "<br><br> 8.	To swap two variables
Eg: a = 1; b =2; Result: a = 2; b=1;
<br>";{
$a = 1;
$b = 2;
echo"Values of a and b befor swapping: ".$a.", ".$b;
$a = $b;
$b = 1;
echo"<br>Values of a and b after swapping: ".$a.", ".$b;
}

// Question no. 9
echo "<br><br> 9. To print the multiple of a given number<br>";

define('a',5);

for ($i=1; $i<= 10; $i++){
    print(a." * ".$i. " = ". a * $i."<br>"); 
}

// Question no. 10
echo "<br><br> 10.To find whether given number is Armstrong or not.<br>";
function Armstrong($number) {
    $str_num = (string)$number;
    $num_digits = strlen($str_num);
    $sum_of_cubes = 0;
    for ($i = 0; $i < $num_digits; $i++) {
      $digit = (int)$str_num[$i];
      $sum_of_cubes += pow($digit, $num_digits);
    }
    if ($sum_of_cubes == $number) {
        echo "$number is an Armstrong number<br>";
    } else {
        echo "$number is not an Armstrong number<br>";
    }
  }
  
Armstrong(153);
Armstrong(1);
Armstrong(0);
Armstrong(371);
Armstrong(407);
Armstrong(15);
?>
</body>
</html>