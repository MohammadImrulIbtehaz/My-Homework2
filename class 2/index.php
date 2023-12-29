<?php
$msg = "Imrul Ibtehaz";
echo $msg . "<br>";
$age = 25;
$cgpa = 3.17;
$com = true;
print($msg . "<br>");
var_dump($age . "<br>");
var_dump($cgpa . "<br>");
print($com ."<br>");

printf("I am %s",strtoupper($msg));
printf("I am %s",strtolower($msg));
?>
<br>
<br>
<?php
$a =27;
$b =28;
$sum = $a+$b;
print($sum."<br>");

$c = 56;
echo $c%2 ."<br>";

$d = 30;
echo $d/2 ."<br>";
$e= 15;
echo $e**2;
?>
<br>
<br>
<?php
$cse = 75;
$math =76;
$physics= 80;
$student = "Imrul Ibtheaz ";
$result = ($cse+$math+$physics)/3;
echo "Congratulations," .$student."you have got ".$result;
?>
<br>
<br>
<?php
function getResult(){
    $cse = 78;
$math =65;
$physics= 77;
$student = "Nazim Uddin ";
$result = ($cse+$math+$physics)/3;
echo "Congratulations," .$student."you have got ".$result;
}
getResult();
?>
<br>
<br>
<?php
function viewResult($cseMark, $mathMark, $physicsMark, $studentName){
    $cse = $cseMark;
    $math =$mathMark;
    $physics= $physicsMark;
    $student =$studentName ;
    $result = ($cse+$math+$physics)/3;
    echo "Congratulations, $student you have got $result <br>";
}
viewResult(60, 89, 70, 'Tuhin'); 
 viewResult(85,65,74, 'Shafin');
?>
<?php
function showResult($sad, $dld, $ds, $userName){
    $result = ($sad+ $dld+$ds)/3;
    echo "Congratulations, $userName you have got $result. <br>";
}
showResult(60, 89, 70, 'Tuhin');
showResult(85,65,74, 'Shafin');
?>
<br>
<br>
<?php
$a = 230;
$b = 33;
if ($a>$b){
    echo "A is greater than B";
}else {
    echo "B is greater than A";
}
?>
<br>
<br>
<?php
$a =44;
if ($a %2!==0){
    echo "$a is an odd number";
}else {
    echo "$a is an even number";
}
?>
<br>
<br>
<?php
function checkNumber($num){
    if ($num %2 ==0){
        echo "$num is an even number";
} else{
    echo "$num is an odd number";
}
}
checkNumber(32);
?>
<br>
<?php
function ghurteJabo($busfare ,$foodExpense ,$tentFee ,$numFrnds){
    $costSplit= ($busfare + $foodExpense + $tentFee)/$numFrnds ;
    if ($costSplit<1000){
        echo "ghurte jabo";
    } else{
        echo "$costSplit tk onek beshi tai ghurte jabo na";
    }
}
ghurteJabo(7000,1000,2000,4);
?>
<br>
<br>
<?php
function gradeSheet($marks,$studentName){
  if ($marks>=80 && $marks<=100){
    echo "Congratulations, $studentName You have got A+ <br>";
  }else if($marks>=70 && $marks<=79){
    echo "$studentName you have got A <br>";
  }else if($marks>=60 && $marks<=69){
    echo "$studentName you have got A- <br>";
  }else if($marks>=50 && $marks<=59){
    echo "$studentName you have got B <br>";
  }else {
    echo "Sorry, $studentName you have failed <br>";
  }
}
gradeSheet(45, 'Shahin');
gradeSheet(56,'Nadim');
gradeSheet(89,'Rahat');
?>
