<!DOCTYPE html>
<html>
<head>
	<title>My first php class</title>
</head>
<body>
<?php
echo "Hello World". "<br/>";
print("Hello World");
// php variables
   // global variables
$a = 34;
$b = "I hate you";
echo "<br/>" ."$a". "<br/>";
print("$b");


  // local variables(local variable scope)
  function myjoy(){
  	global $b;
  	$d = 56;
  	echo "<br/>" .$d;
  	echo "<br/>" .$b. "<br/>";
  }
  myjoy();

/* Datatypes
string
interger
float
boolean
null
array
object
resource
*/
$q = "My cash giver is php";
echo "<br/>";
 var_dump($q);
 $e = 88;
 echo "<br/>";
 var_dump($e);

 $r = 4.8;
 echo "<br/>";
 var_dump($r);

 $y = array("Precious", "Daniel", "Dinachi");
 echo "<br/>";
 var_dump($y);

 $f = 90;
 $u = 34;
 $jj = $f + $u;
 echo "<br/>";
 echo $jj;


//static variable scope
 function mytest(){
 	static $k =3;
 	$k++;
 	echo "<br/>". $k;
 }
 mytest();
 mytest();
 mytest();
 mytest();
 ?>

<?php
//indexed array
$cars = array("Toyota", "Spider", "Buggati", "Camry", "Fine-car");

echo $cars[3];
$arrlen = count($cars);

for ($x = 0; $x<$arrlen; $x++){
	echo $cars[$x]. "<br/>";
}

//associative array
$names = array("Precious"=>"17", "Daniel"=>"18", "Godwin"=>"18");
echo "Precious is ".$names['Precious']."years old";
?>


<?php
//php function
function myprecious(){
  $say= "Hello World ";
  return $say;
}

function precious($e, $u){
  $says= $e * $u;
  return $says;
}


if(isset($_POST['submit'])){
  $lent = $_POST['length'];
  $bred = $_POST['breadth'];
}


function myarea(){
  global $lent, $bred;
  $area = $lent * $bred;
  return($area);
}

if(isset($_POST['result'])){
  $rad = $_POST['raidus'];

}
function carea(){
  global $rad;
  $cirea = (pi() * ($rad**2));
  return (round($cirea));
}
?>



<h2>Area Of Rectangle</h2>
<form action=""  enctype="multipart/form-data" method="post" >
  <label>Length Of A Rectangle</label><br/>
  <input type="number" name="length" placeholder="Enter length">
  <p/>
  <label>Breadth Of A Rectangle</label><br/>
  <input type="number" name="breadth" placeholder="Enter Breadth">
  <p/>
  <button name="submit">Submit</button>

</form>

<h2>Area Of Circle</h2>
<form action=""  enctype="multipart/form-data" method="post" >
  <label>Raidus Of A Circle</label><br/>
  <input type="number" name="raidus" placeholder="Enter raidus">
  <p/>
  <button name="result">Result</button>

</form>

<table style="margin-top: 15px">
  <tr>
    <td><?php echo myprecious(); ?></td>
    <td><?php echo precious(3, 12); ?></td>
  </tr>

  <tr>
    <td><?php if(isset($_POST['submit'])){
      echo "The area of the rectangle is = ".myarea()."cm2";
    } ?></td>
  </tr>
</table>


<table style="margin-top: 15px">
  <tr>
    <td><?php if(isset($_POST['result'])){
      echo "The area of the circle is = ".carea()."cm2";
    } ?> </td>
  </tr>
</table>

<?php
//types of Array
//indexed array
//associative array
//multi-dimensional array

//indexed array
$cars = array("Toyota", "Spider", "Buggati", "Camry", "Fine-car", 23, 56);
echo $cars[3];
//for loop
echo "<p/>";
$arrlen = count($cars);
for ($x = 0; $x<$arrlen; $x++) { 
  echo $cars[$x]. "<br/>";
}

echo "<br/>";
for ($x = 0; $x<$arrlen; $x++) { 
  echo $cars[$x]. " ";
}

echo "<br/>";
$mycars = array_values($cars);
foreach ($mycars as $all) {
  echo $all. ' ';
}

$names = array("Precious", "Daniel", "Angel", "Chinaza", "Favour");
echo "<br/>";
$mynames = array_values($names);
foreach ($mynames as $nam) {
  echo $nam. ' ';
}


//array keys
echo "<br/>";
$mykey = array_keys($cars);
foreach ($mykey as $getall) {
 echo $getall. ' ';
}

//array sums
echo "<br/>";
$maths = array(23, 45, 2, 31, 15,10);
$sumall = array_sum($maths);
echo $sumall;

//associative array
echo "<br/>";
$namez = array("Precious"=>"17", "Daniel"=>"14", "Godwin"=>"18");
echo "Precious is ".$namez['Precious']. "years old <br/>";

foreach ($namez as $keys =>$value) {
 echo $keys. " is ". $namez[$keys]. "years old". "<br/>";
}


//multi-dimensional arrays
$model = array(
array("Toyota", "12", "20"),
array("Honda", "6", "14"),
array("Spider", "16", "19"),
array("Lexus", "11", "22"),
);
//using indexing
echo "<br/>";
echo "Car Type: ".$model[0][0].".. In stock: " .$model[0][1]. ".. Out Of Stock: ".$model[0][2]."<br/>";

echo "Car Type: ".$model[1][0].".. In stock: " .$model[1][1]. ".. Out Of Stock: ".$model[1][2]."<br/>";

echo "Car Type: ".$model[2][0].".. In stock: " .$model[2][1]. ".. Out Of Stock: ".$model[2][2]."<br/>";

echo "Car Type: ".$model[3][0].".. In stock: " .$model[3][1]. ".. Out Of Stock: ".$model[3][2]."<br/>";
//using looping
for ($p =0; $p<4; $p++){
    echo "<p><b>Car Model $p </b></p>";
    echo "<ul>";

    for ($y = 0; $y<3; $y++){
      echo "<li>".$model[$p][$y]. "</li>";
    }
   echo "</ul>";
}


//array sorting
//we have six ways of sorting array
//1. sorting in ascending order
echo "<br/>";
$maths = array(23, 45, 2, 31, 15,10);
sort($maths);
$mymaths = array_values($maths);
foreach ($mymaths as $sorted) {
 echo $sorted. ', ';
}

//2. Reverse sort
echo "<br/>";
$maths = array(23, 45, 2, 31, 15,10);
rsort($maths);
$mymaths = array_values($maths);
foreach ($mymaths as $sorted) {
 echo $sorted. ', ';
}


//3. sorting Associative array
echo "<br/>";
$namez = array("Precious"=>"17", "Daniel"=>"14", "Godwin"=>"18");
asort($namez);

foreach ($namez as $keys =>$value) {
 echo $keys. " is ". $namez[$keys]. "years old". "<br/>";
}

//4. sorting in descending order
echo "<br/>";
$namezz = array("Precious"=>"17", "Daniel"=>"14", "Godwin"=>"18");
arsort($namezz);

foreach ($namezz as $keys =>$value) {
 echo $keys. " is ". $namezz[$keys]. "years old". "<br/>";
}


//5. ascending order with array keys
echo "<br/>";
$namezz = array("Precious"=>"17", "Daniel"=>"14", "Godwin"=>"18");
ksort($namezz);

foreach ($namezz as $keys =>$value) {
 echo $keys. " is ". $namezz[$keys]. "years old". "<br/>";
}

//6. descending order with array keys
echo "<br/>";
$namezz = array("Precious"=>"17", "Daniel"=>"14", "Godwin"=>"18");
krsort($namezz);

foreach ($namezz as $keys =>$value) {
 echo $keys. " is ". $namezz[$keys]. "years old". "<br/>";
}


//how to generate jamb reg number
echo rand()."<br/>";
echo "<br/>";
$mnumi= rand("100000000", "900000000");
$randi = substr(str_shuffle('abcdefghi'), 0,2);
foreach (range('a', 'k') as $leas); 
  echo $mnumi. strtoupper($randi);

//assignment
  //use associative and get name testscore age assumed reg no and name of teacher of 15 students
  //associative array
//echo "<br/>";
//$namez = array("Precious"=>"17", "Daniel"=>"14", "Godwin"=>"18");
//echo "Precious is ".$namez['Precious']. "years old <br/>";
?>
<?php
//conditional statement: checks for condition before executing a code
echo "<br/>";
$okey = "Mango";
if($okey == "rat"){
  echo "I Love Coding";
}else{
  echo "I Love Vsasf Tech";
}

echo "<br/>";
$okey = "Mango";
if($okey != "rat"){
  echo "I Love Coding";
}else{
  echo "I Love Vsasf Tech";
}

echo "<br/>";
$ser = 55;
$raw = 12;
if($ser == 23 && $raw == 12){
  echo "I Can Cook Bitterleave Soup";
}else{
  echo "I Cannot Cook";
}

echo "<br/>";
$etch = 19;
$tech = 30;
if($etch == 12 && $tech ==30){
  echo "Coding Rocks";
}else{
  echo "Coding Also Gives Stress As Well";
}


echo "<br/>";
if(34 > $ser || 12 >= $raw){
  echo "I Love Programming";
}else{
  echo "I Hate Proggramming";
}

echo "<br/>";
if(13 > $etch || 30 >= $tech){
  echo "Coding Rocks";
}else{
  echo "Coding Also Gives Stress As Well";
}


echo "<br/>";
$mytime = date("h:m:s"); //12 hour time
echo $mytime;

echo "<br/>";
$mytimes = date("H:m:s"); //24 hour time
echo $mytimes;

echo "<br/>";
$myday = date("d");
echo $myday;

echo "<br/>";
$mydays = date("d:M:y");
echo $mydays;

//switch
echo "<br/>";
switch ($mydays) {
case 'Sun':
  echo "Today is Sunday.";
  break;
case 'Mon':
  echo "Today is Monday.";
  break;
case 'Tues':
  echo "Today is Tuesday.";
  break;
case 'Wed':
  echo "Today is Wednesday.";
  break;
case 'Thur':
  echo "Today is Thursday.";
  break;
case 'Fri':
  echo "Today is Friday.";
  break;
default:
  echo "Today Is Saturday.";
}

echo "<br/>";
$myhours = date("H");
if($myhours <= "12"){
  echo "Good Morning World";
}elseif ($myhours <="15") {
  echo "Good Afternoon World";
}elseif ($myhours <="20") {
  echo "Good Evening World";
}else{
  echo "Good Night";
}


$students = array("Okoro Favour", "Aguiyi Njideka", "Prisca Muonokwu", "Ugah Faith", "Nnamdi John", "Uju Princess", "Uda Lawrence");
$maths = array(55, 32, 57, 88, 98, 51, 74);
$english = array(77, 39, 57, 44, 67, 85, 78);
$chem = array(72, 43, 45, 76, 63, 84, 71);
$count = count($students);
$sn = 1;

$okoro = round(($maths[0]+$english[0]+$chem[0])/3);
$aguiyi = round(($maths[1]+$english[1]+$chem[1])/3);
$prisca = round(($maths[2]+$english[2]+$chem[2])/3);
$ugah = round(($maths[3]+$english[3]+$chem[3])/3);
$nnamdi = round(($maths[4]+$english[4]+$chem[4])/3);
$uju = round(($maths[5]+$english[5]+$chem[5])/3);
$uda = round(($maths[6]+$english[6]+$chem[6])/3, 2);
$aver = array($okoro, $aguiyi, $prisca, $ugah, $nnamdi, $uju, $uda);
?>



<table  border="2px;">
  <tr>
    <td>S/N</td>
    <td>NAMES</td>
    <td>MATHS</td>
    <td>GRADE</td>
    <td></td>
    <td>ENGLISH</td>
    <td>GRADE</td>
    <td></td>
    <td>CHEMISTRY</td>
    <td>GRADE</td>
    <td>AVERAGE SCORE</td>
    <td>GRADE</td>
  </tr>


  <?php for ($x=0; $x<$count; $x++) {?>
    <tr>
    <td><?php echo $sn++ ; ?></td>
    <td><?php echo $students[$x] ; ?></td>
    <td><?php echo $maths[$x] ; ?></td>
    <td><?php if($maths[$x] >= 70){
      echo "A";
    }elseif ($maths[$x] >= 60) {
      echo "B";
    }elseif ($maths[$x] >= 50) {
     echo "C";
    }elseif ($maths[$x] >= 40) {
      echo "D";
    }elseif ($maths[$x] >= 30) {
     echo "E";
    }else{
      echo "F";
    } ; ?></td>
    <td></td>
    <td><?php echo $english[$x] ; ?></td>
    <td><?php if($english[$x] >= 70){
      echo "A";
    }elseif ($english[$x] >= 60) {
      echo "B";
    }elseif ($english[$x] >= 50) {
      echo "C";
    }elseif ($english[$x] >= 40) {
      echo "D";
    }else{
      echo "F";
    } ; ?></td>
    <td></td>
    <td><?php echo $chem[$x] ; ?></td>
    <td><?php if($chem[$x] >= 70){
      echo "A";
    }elseif ($chem[$x] >= 60) {
      echo "B";
    }elseif ($chem[$x] >= 50) {
      echo "C";
    }elseif ($chem[$x] >= 40) {
      echo "D";
    }else{
      echo "F";
    } ; ?></td>
    <td><?php echo $aver[$x] ; ?></td>
    <td><?php if($aver[$x] >= 70){
       echo "A";
    }elseif ($aver[$x] >= 60) {
      echo "B";
    }elseif ($aver[$x] >= 50) {
      echo "C";
    }elseif ($aver[$x] >= 70) {
      echo "D";
    }else{
      echo "F";
    } ; ?></td>
  </tr>
  <?php }?>
</table>
</body>
</html>