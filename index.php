<?php
/*echo "Hello Sinti!";
echo time(); //����� � �������� � 1970�.


function add($param1, $param2)
{
	return $param1 + $param2
}

$a = $_GET['a'];
$a = $_GET['b'];

echo "a+b=".($a+$b);*/


//echo '������ �� �����!<br>';
echo "������ �� �����!<br>";
echo "2016 <br>";


echo '����� ��������<br>18 �������<br>...';


$str = <<<END
<p>��� ����������� �������� <br> ���������� ������ ���������� 
��������� heredoc</p> 
END;

echo $str;

$str = "����";



echo $str, " ������!", "<br>"; 



$bann = 50; // ������ 
$lim = 10; // ������ 
//$together = $bann + $lim; // ����� 

echo "���������� �������: ", $bann + $lim, "<br>";

$text = "news"; 
echo "Where's the $textpaper dgdfgdflgjdfklgjdfklgkl <br />";



$apples = 5;    // ������� ���������� $apples 
$fruit = "apples";    /* ������� ���������� $fruit, ������� �������� ��� ���������� $apples */ 

// ������ �� ����� ������� $apples, ��� $$fruit

echo "����� ����� - ", $$fruit;


define("pi", 3.14); 

echo "�������������� ��������� �� ��������� ", pi, "<br>";

$zxc = TRUE;    // �������� Boolean

// $zxc = 4; //��� ������ �� �������������! ������ ��������� ������ ���� ������.

echo $zxc, "<br>";


$str = "50000";    // �������� String
$new_str = (integer) $str;    // ������ �������� ����� Integer

// ���������... 

echo $new_str + $new_str, "<br>"; 

if ($zxc !== $str)
{
echo "��, �����! <br>";
echo "��, �����! <br>";
}

if (10 >= 10)  // ������ ��������� ���������.
{
echo "�������������!! <br>";
}

$speed = 40;

if ($speed > 35 && $speed < 55) {                 // ������ ����������� ��������� "�".
    echo "�������� � �������� ����� <br>";        // 
}                                                 //


if(10 > 20) 
     echo "������! <br>"; 
else 
{
     echo "����! <br>"; 
	 echo "� ��� ��� ����! <br>"; 
	 
}




$text = "news"; 
echo "Where's the {$text}paper <br />";


$speed = 50;

if ($speed < 30)
    echo "�������� � �������� �����";

elseif ($speed >= 30 && $speed <= 60)
    echo "���� �������� $speed ��/���";

else 
    echo "���������� �������� !";



$speed = 58;

echo ($speed <= 60) ? "�������� � �������� ����� <br>" : "���������� �������� ! <br>"; // ��������� �������� - �������� �������� � ����������� ����



$a = 2;
$b = 4;


switch ($a + $b)
{
    case 2 : 
        echo "����������������";
    break;
    
    case 4 : 
        echo "����������";
    break;
    
    case 6 : 
        echo "������������� �����!";
    break;
    
    default : 
        echo "��������������";
    break;

}

for ($abc= 0; $abc < 10; $abc++) 
{
   echo "����� ������. 10 ��� <br>"; 
   //$abc++;
}



$z = 50;
echo $z;
$z+=10;
echo $z;







$counter = 0; 

while ($counter < 5) 
{
   echo "��� ������ ��������� 5 ��� <br>"; 
   $counter++;
}




$counter = 6; 

do
{
   echo "��� ������ ��������� ~ ��� <br>"; 
   $counter++;
}
while ($counter < 10);




$eto_massiv = array ("Apple", "Limon", "Chery", "Oranges"); 
$eto_massiv  [4] = "php";
$eto_massiv  [5] = "html";
$eto_massiv  [6] = "c++";


//$eto_massiv  [1] = "arbuz";

foreach ($eto_massiv  as $key => $value) // ��� ��������: $key - ������ �������� �������, $value - �������� �������� �������
{
	
	//echo $key;
	//$key+=2;            ����������� ������ �������� ������� ���������, �� ��������� ������� 4
	//echo $key;
	
   echo "�� ������� ����� - $value <br>"; 
}



echo substr("Hello world", 6, 5);

echo strpos("Hello world", 'world'); // ������� 6

echo "<br>";

$mystring = 'Hello world';
$findme   = 'world';
$pos = strpos('Hello world', 'world');
echo $pos;

echo "<br>";






$yashiki_s_arbuzami[0] = 30; 
$yashiki_s_arbuzami[1] = 50; 
$yashiki_s_arbuzami["tretei_yasik"] = 150;


echo $yashiki_s_arbuzami["tretei_yasik"], "<br>";


$arr1[0] = "PHP"; 
$arr1[1] = "HTML"; 
$arr1[2] = "CSS";

unset($arr1[1]);

foreach($arr1 as $key => $value) {
    echo $value.'<br/>';
}





for ($i = 0; $i < 10; $i++) 
{
	
   echo $eto_massiv[$i], "<br>"; 
   
} 


echo "<pre>"; // ������� <pre> ���������� ���� �������������� ���������������� ������.
print_r($eto_massiv); 
echo "</pre>";




$arr[0] = "PHP"; 
$arr[1] = "HTML"; 
$arr[2] = "CSS";

foreach($arr as $value)
{ 
   echo $value, "<br>";
} 

foreach($arr as $key => $value) { // $key - ������ �������� �������, $value - �������� �������� �������
   echo "[{$key}] => {$value} <br/>";
}



/////////////////// ���������� �������� � PHP ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br> <b>���������� �������� � PHP:</b> <br><br>";

$arr[0] = "PHP"; 
$arr[1] = "HTML"; 
$arr[2] = "CSS";

sort($arr); // ���������� ������� �� ����������� ���������

print_r($arr);

echo "<br>";

rsort($arr); // ���������� ������� �� �������� ���������

print_r($arr);

echo "<br>";


$arr2["B"] = "PHP"; 
$arr2["C"] = "HTML"; 
$arr2["A"] = "CSS";

ksort($arr2); // ��������� ������ �� ����������� ��������

print_r($arr2); 

echo "<br>";

krsort($arr2); // ��������� ������ �� �������� ��������

print_r($arr2); 

echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// ��������� �� �������� � PHP //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<b>��������� �� �������� � PHP:</b> <br><br>";

$arr[0] = "PHP"; 
$arr[1] = "HTML"; 
$arr[2] = "CSS";

print_r($arr); 

echo "<br>";

echo "Now is: ", current($arr), "<br>"; // ������� current - ��� ����������� �������� �������� �������

echo "Next is: ", next($arr), "<br>"; // ������� next - ��� ����������� ���������� �������� �������

echo "Previously is: ", prev($arr), "<br>"; // ������� next - ��� ����������� ����������� �������� �������

echo "The end is: ", end($arr), "<br>"; // ������� end - ��� ����������� ���������� �������� �������

echo "First is: ", reset($arr), "<br><br>"; // ������� reset - ��� ����������� ������� �������� �������

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// �������������� ����� � ������� � �������� � PHP //////////////////////////////////////////////////////////////////////////////////////////////////

echo "<b>�������������� ����� � ������� � �������� � PHP:</b> <br><br>";

$string = implode(" - ", $arr); // implode - ��������� ������ �� �������
echo $string; 


echo "<br>";

$string = "PHP, HTML, CSS";
$arr = explode(", ", $string); // explode - ��������� ������ �� ������
print_r($arr); 

echo "<br><br>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// ���������� ���������� �� �������� � PHP /////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br> <b>���������� ���������� �� �������� � PHP:</b> <br><br>";

$arr3["one"] = "PHP"; 
$arr3["two"] = "HTML"; 
$arr3["three"] = "CSS";
$arr3["four"] = "java";

print_r($arr3); 

echo "<br><br>";

extract($arr3);  // ���� ���� ����������� ��� �������, ������� ���������������� ��������� ������, ��������� �������� ����������, ����������� � ���������������� ���������, �� ����� ������������ ������� extract.

echo "\$one = $one <br>";
echo "\$two = $two <br>";
echo "\$three = $three <br>"; 
echo "\$four = $four <br><br>"; 

//$one = "PHP";
//$two = "HTML";
//$three = "CSS";
//$four = "java";

$arr = compact("one", "two", "three", "four"); // ���� ����� ������� �� ���������� ������, �� ����� ������������ ������� compact.

print_r($arr); 

echo "<br><br>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// ������� � ���������� �������� � PHP /////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br> <b>������� � ���������� �������� � PHP:</b> <br><br>";

$arr4["one"] = "PHP"; 
$arr4["two"] = "HTML"; 
$arr4["three"] = "CSS";

$new_arr = array_slice($arr4, 0, 2); //���� ��� ����� �������� � ������ ��������� ��������� ������� �������, �� ��� ������� ������� array_slice:
//������ �������� ������� array_slice - ��� �������� ���� �������, � �������� ����� ������� ��������; ������ - ��������� ����� �������� (� ������ �������� �������� ����� ��������); ������ - ���������� ��������� �������.

print_r($new_arr);

echo "<br>";

$arr5[1] = "PHP"; 
$arr5[2] = "HTML"; 
$arr5[3] = "CSS";

$arr6[1] = "PHOTOSHOP"; 
$arr6[2] = "PAINT.NET"; 
$arr6[3] = "DREAMWEAVER";

$new_arr1 = array_merge($arr5, $arr6); // ��� ���������� �������� � ���� ����� ������������ ������� array_merge:
print_r($new_arr1); 

echo "<br><br>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// ��������� �������� � PHP /////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br> <b>��������� �������� � PHP:</b> <br><br>";

$arr7[1] = "PHP"; 
$arr7[2] = "HTML"; 
$arr7[3] = "CSS";

$arr8[1] = "PHP"; 
$arr8[2] = "PAINT.NET"; 
$arr8[3] = "DREAMWEAVER";

$diff = array_diff($arr8, $arr7); //���� ����� ��������� ����� ������� ��������� � ���, ��� ���� �������, ��� �������� �� ���������, �� ����� ������������ ������� array_diff.
print_r($diff); 

echo "<br>";

$arr9["one"] = "PHP"; 
$arr9["two"] = "HTML"; 
$arr9["three"] = "CSS";

$arr0[1] = "PHP"; 
$arr0["two"] = "HTML"; 
$arr0[3] = "DREAMWEAVER";

$diff = array_diff_assoc($arr9, $arr0);  //���� �����, ����� ����������� ��� � ��������� ������ ��������, �� ��� ��� ����� ������������ ������� array_diff_assoc.
print_r($diff); 

echo "<br>";

$arr10[1] = "PHP"; 
$arr10[2] = "HTML"; 
$arr10[3] = "CSS";

$arr11[1] = "PHP"; 
$arr11[2] = "PAINT.NET"; 
$arr11[3] = "DREAMWEAVER";

$diff = array_intersect($arr10, $arr11); //���� ��� ����� ����� ����� �������� ��������, �� ��� ������� ������� array_intersect:
print_r($diff); 

echo "<br><br>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// ��������� ������ � �������� PHP /////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br> <b>��������� ������ � �������� PHP:</b> <br><br>";


$arr12[1] = 31; 
$arr12[2] = 1; 
$arr12[3] = 94;

$sum = array_sum($arr12); // ����� ���� ��������� �������

echo $sum, "<br>"; 

$arr = array(30, 44, 97, 30);
print_r($arr); 

$new_arr = array_unique($arr); // ����, ��������� ��������� �� ��������� � ����������� ��������, �� ����� ������������ ������� array_unique.
print_r($new_arr); 

echo "<br><br>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// ����������� ������� � PHP /////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br> <b>����������� ������� � PHP</b> <br><br>";

$companies[1][1] = "Programmer"; 
$companies[1][2] = "PR"; 
$companies[1][3] = "Office Manager"; 

$companies[2][1] = "IT"; 
$companies[2][2] = "Web-design"; 

$companies[3][1] = "PR";
$companies[3][2] = "C++ Programmer";

print_r($companies);

echo "<br>";
//����� ��� ����������� ����� ���� �������� ���:
$companies = array(
    "Microsoft" => array("Programmer", "PR", "Office Manager"), 
    "Google" => array("IT", "Web-design"), 
    "Mozilla" => array("PR", "C++ Programmer")
);

print_r($companies);

echo "<br>";

$companies1[0][] = "Programmer"; 
$companies1[0][] = "PR"; 

$companies1[1][] = "IT"; 
$companies1[1][] = "Web-design"; 

$companies1[2][] = "PR";
$companies1[2][] = "C++ Programmer";

for($i = 0; $i < count($companies1); $i++) {
    for($j = 0; $j < count($companies1[$i]); $j++) {
        echo $companies1[$i][$j], "<br />";
    }
}


var_dump ($companies1); //��� ������� ���������� ����������������� ���������� �� ����� ��� ����� ���������, ������� �������� ��� ��� � ��������.



echo "<br><br>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// ������ �� PHP /////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br> <b>������ �� PHP</b> <br><br>";




$massiv[] = "html"; 
$massiv[] = "css"; 
$massiv[] = "php"; 
$massiv[] = "js"; 
$massiv[] = "jq";


foreach($massiv as $value)
{ 
   echo $value, "<br>";
} 





$massiv0[0] = "10"; 
$massiv0[1] = "20"; 
$massiv0[2] = "15"; 
$massiv0[3] = "17"; 
$massiv0[4] = "24";
$massiv0[5] = "35";





foreach($massiv0 as $value)
{ 
	
 $result = $result + $value;

} 

echo $result;



$counter = 0; 

/*while ($counter < 101) 
{
   echo "$counter<br>"; 
   $counter++;
}*/




foreach($massiv0 as $value)
{ 
	//$umnoj = $value * $value;
	$result = $result + $value*$value;

} 

echo $result;

echo "<br><br>";


/*$counter = 1; 

while ($counter <= 100) 
{
   echo "$counter<br>"; 
   $counter++;
}


for ($i = 1; $i <= 100; $i++) 
{
	
   echo $i, "<br>"; 
   
}

$counter = 11; 

while ($counter <= 33) 
{
   echo "$counter<br>"; 
   $counter++;
}

for ($i = 11; $i <= 33; $i++) 
{
	
   echo $i, "<br>"; 
   
}*/


/*$counter = 0; 

while ($counter <= 100) 
{
   echo "$counter<br>"; 
   $counter+=2; //����� ���������� ������ ����� (������������ 2 � ����������)
}

for ($i = 0; $i <= 100; $i+=2) 
{
	
   echo $i, "<br>"; 
   
}*/

/*$num=1000;
$i = 0;
while ($num > 50) 
{
   
   $num/=2;
   echo "$num<br>"; 
  
  $i++;
 
}

echo $i;*/

$i = 0;
for ($num=1000; $num > 50; $num/=2) 
{
	
   echo $num, "<br>"; 
   $i++;
}

echo $i, "<br>";


$cvet = array('green'=>'�������', 'red'=>'�������','blue'=>'�������');

foreach($cvet as $key => $value) { 
   echo "[{$key}]<br/>";
}

foreach($cvet as $value)
{ 
   echo $value, "<br>";
} 





$zarp = array('����'=>'200', '����'=>'300','����'=>'400');

foreach($zarp as $key => $value)
{ 
  echo $key, ' - �������� ', $value, ' �������� <br>';
} 




$color = array('colors');


//$color[][] = "enru"; 

/*foreach($color as $key => $value) { 


  $color["en"] = array("green", "red", "blue"); 
  $color["ru"] = array("�������", "�������", "�������");

}

print_r($color);*/


$color = array(
    "en" => array("green", "red", "blue"), 
    "ru" => array("�������", "�������", "�������"), 
);

print_r($color);
































echo "<br><br>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// ������� � PHP, �� ���������, �������� � ����� /////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br> <b>������� � PHP, �� ���������, �������� � �����</b> <br><br>";

function bulochka($number)
{
	
   $square = $number * $number;
   echo $square, "<br>";
}	

bulochka(6);

function myfunc($xxxxxxx,$yyyyyyyyyyy) {
   $res = cos($xxxxxxx) + sin($yyyyyyyyyyy) + 2;
   //echo $res;
   return $res;
}

$x = 0;
$y = 1;

$z = myfunc($x,$y);


echo $z, "<br>";


function hello($text = "������") {
   echo $text, "<br>";
}

hello();

hello('hello');

echo "<br><br>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// ������������� PHP � ������ � HTML /////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br> <b>������������� PHP � ������ � HTML</b> <br>";


/*$title = '��� ������ ��������';
$now = date('d.m.Y H:i');
 
$HTML = '<html><title>'.$title.'</title><body>
<table width="100%" height="100%" border=0><tr valign="middle"><td align="center">�������: '.$now.'</td></tr></table>
</form>
</body></html>';
 
print $HTML;*/

 
/*$HTML = '<html><body>

<form action="app/check.php" method="post">

<p>���: <input name="name" type="text"></p>

<p>�������: <input name="surname" type="text"></p>

<p>E-mail: <input name="email" type="text"></p>

<p>���������: <br /><textarea name="message" cols="30" rows="5"></textarea></p>

<p><input type="submit" value="���������"></p>

</form>

</body></html>';*/
 
//print $HTML;


?>

<!DOCTYPE html>
<html>	
	<head>
		<title>�������� ������ �����</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<form action="app/check.php" method="post">
			<p>���: <input name="name" type="text"></p>
			<p>�������: <input name="surname" type="text"></p>
			<p>E-mail: <input name="email" type="text"></p>
			<p>���������: <br /><textarea name="message" cols="30" rows="5"></textarea></p>
			<p><input type='submit' value='���������'></p>
		</form>
	</body>
</html>

<?php

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// ���: ������ /////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br> <b>���: ������; �������� � �������;</b> <br>";



class FirstClass
{
	
//echo $hello;	
	
   function __construct($hello = "hi") {
      return $hello;
   }
   
 function __destruct() {
      echo "����� �����������";
   }
   
}



$instance = new FirstClass(); // ������ ������ "hi"

//echo "<br>";

$instance = new FirstClass("hello"); // ������ ������ "hello"

echo "<br>";


   
///////////////////////////


class SecondClass {
   private $var1;

   public function setVar1($value) {
         $this->var1 = $value;
		 
   }
}

$instance =  new SecondClass();

$instance->setVar1("orange"); // ��������� �������� "orange" ��� ���������� var1

////////////////////// ��������� ///////////////////

echo "<br>";

class ThirdClass {
	public $oip = 5;
	
   const CONSTANT = "value";
   //const CONSTANT2  = 80 * 2 + 40; // >= PHP 5.6
}

// ������ � ���������
echo ThirdClass:: CONSTANT;
//echo ThirdClass:: $oip;

// ����� ����� � ������
class FourthClass {
  const CONSTANT = "orange";
   

   
  function myFunc() {
         echo self::CONSTANT;
   }
   
   //myFunc();
   
}

//echo FourthClass:: myFunc();

//////////////////

class FifthClass {
   public $var1 = "public";
   private $var2 = "private";
   protected $var3 = "protected";

   public function func1() {
        echo $this->var1;
        echo $this->var2;
        echo $this->var3; 
   }

   private function func2() {
   }
    
   protected function func3() {
   }
}

$instance = new FifthClass();

$instance->var1; // ��������
$instance->func1(); // ��������, ���������: public private protected
//$instance->var2; // ������
//$instance->var3; // ������
//$instance->func2(); // ������
//$instance->func3(); // ������

echo "<br><br>";

/////////////////////// ������������ ///////////////////////////

/*class SixthClass {
    public $var1 = "value1";

    public function func1() {
    }
}

class SeventhClass extends SixthClass {
    public $var2 = "value2";
}

$class6 = new SixthClass();
$class7 = new SeventhClass();

$class6->var1; // value1
$class7->var1; // value1
$class7->func1(); // �� ��������
$class7->var2; // value2


echo "<br><br>";*/

abstract class AbstClass {
    /* ������ ����� ������ ���� �������� � �������� ������ */
    abstract protected function getValue();
   
    /* ����� ����� */
    public function printValue() {
        print $this->getValue() . "<br>";
    }
}

class Class10 extends AbstClass
{
    protected function getValue() {
        return "FirstClass";
    }    
}

$class1 = new Class10;
$class1->printValue();

echo "abc <br>";

class Class11
{
    public static $var1 = "var1 <br>";

    public function staticValue() {
        return self::$var1;
    }
}

class Class12 extends Class11
{
    public function var1Static() {
        return parent::$var1;
    }
}

echo  Class11::$var1; 



class Class13 {
    public static function myStaticMethod() {
        
		echo "������ ������ ����� <br>";
		
    }
}

Class13::myStaticMethod();


////////////////////// ����������

interface CarTemplate
{
    public function getId(); // �������� id ����������
    public function getName(); // �������� ��������
    public function add(); // �������� ����� ����������
}

class Audi implements CarTemplate {
     function getId() {
          return "1-ATHD98";
    }

    function getName() {
         return "Audi";
    }

    function add() {
         // 
    }
}

 
class Bmw implements CarTemplate {
    function getId() {
          return "2-HHFY14";
    }

    function getName() {
         return "BMW";
    }

    function add() {
         // 
    }

}


/////////////// ���������� �������

class MyClass1 {
	public $c = "c value <br>";

	public function __set($name, $value) {
		echo "__set, property - {$name} is not exists <br>";
	}
	
	public function __get($name) {
		echo "__get, property - {$name} is not exists <br>";
	}
}

$obj = new MyClass1;
$obj->a = 1; // ������ � �������� (�������� �� ����������)
echo $obj->b; // �������� �������� �������� (�������� �� ����������)
echo $obj->c; // �������� �������� �������� (�������� ����������)

/////////////// ���������� �������

class MyClass2 {
	public function __call($name, $arguments) {
		return "__call, method - {$name} is not exists <br>";
	}
	
	public function getId() {
		return "AH-15474 <br>";
	}
}

$obj = new MyClass2;
echo $obj->getName(); // ����� ������ (����� �� ����������)
echo $obj->getId(); // ����� ������ (����� ����������)

////////////////////////// �������������� ������ � ������

class MyClass {
	
	public $qwe = 5;
	
	public function __toString() {
		return "MyClass {$qwe} class <br>";
	}
}

$obj = new MyClass;
echo $obj; // ���������: MyClass class

///////////////////////////////////////// ����� __invoke() ����������, ����� ������ �������� ������� ��� �������.

class MyClass3 {
	public function __invoke($a) {
		return $a;
	}
}

$obj = new MyClass3;
echo $obj(75), "<br>"; // ���������: 75


///////////////////

class MyClass0 {
	
	public function names(array $names) { // ��� array
		$res = "<ul>";
		foreach($names as $name) {
			$res .= "<li>{$name}</li>";
		}
		return $res .= "</ul>";
	}
	
	public function otherClassTypeFunc(OtherClass $otherClass) { // ��� OtherClass
		return $otherClass->var1;
	}
}

$obj = new MyClass0;

$names = array(
	'���� �������',
	'���� �������',
	'������ �������',
	'������� ��������'
);
echo $obj->names($names); // ��������

/*$names = "���� �������"; // ��-�� �������������� ������� � ���������� ����������, ����� � ������ �� ����� ���������, � �������� ������
// ������� ��������� ������: Argument 1 passed to MyClass::names() must be of the type array, string given
echo $obj->names($names); 

// ������� ��������� ������: Argument 1 passed to MyClass::names() must be an instance of OtherClass, string given
echo $obj->otherClassTypeFunc("test string");*/


//////////////////////////////////// ������

trait MyTransliterator {
	private $letters = array(
        '�' => 'a',   	'�' => 'b',     '�' => 'v',
        '�' => 'g',   	'�' => 'd',   	'�' => 'e',
        '�' => 'e',   	'�' => 'zh',  	'�' => 'z',
        '�' => 'i',   	'�' => 'y',   	'�' => 'k',
        '�' => 'l',   	'�' => 'm',   	'�' => 'n',
        '�' => 'o',   	'�' => 'p',   	'�' => 'r',
        '�' => 's',   	'�' => 't',   	'�' => 'u',
        '�' => 'f',   	'�' => 'h',   	'�' => 'c',
        '�' => 'ch',  	'�' => 'sh',  	'�' => 'sch',
        '�' => '',   	'�' => 'y',   	'�' => '',
        '�' => 'e',   	'�' => 'yu',  	'�' => 'ya',
        '�' => 'A',   	'�' => 'B',   	'�' => 'V',
        '�' => 'G',   	'�' => 'D',   	'�' => 'E',
        '�' => 'E',   	'�' => 'Zh',  	'�' => 'Z',
        '�' => 'I',   	'�' => 'Y',   	'�' => 'K',
        '�' => 'L',   	'�' => 'M',   	'�' => 'N',
        '�' => 'O',   	'�' => 'P',   	'�' => 'R',
        '�' => 'S',   	'�' => 'T',   	'�' => 'U',
        '�' => 'F',   	'�' => 'H',   	'�' => 'C',
        '�' => 'Ch',  	'�' => 'Sh',  	'�' => 'Sch',
        '�' => '',  	'�' => 'Y',   	'�' => '_',
        '�' => 'E',   	'�' => 'Yu',  	'�' => 'Ya',
        '�' => 'ye', 	'�' => 'yi', 	'�' => 'i',
        '�' => 'YE', 	'�' => 'YI', 	'�' => 'I',
        ' ' => '_'
    );

	public function translate($str) {
		// �������� ������� ��������� �� ������� ��������
		return strtr(trim($str), $this->letters);
	}
}

class MyClass20 {
	use MyTransliterator;
	
	private $data;
	
	/**
	*	����� ������� ��� ���������� ������ � ��� ������ 
	*/
	public function setData(array $data) {
		$this->data = $data;
	}
	
	/**
	*	 ����� ������� ��� ���������� ������
	*/
	public function getPreparedData() {
		// ��������, �� ����� ������� ����� �������� �� ��������
		// �����, ��� ����� ��������� �������� � �������������� ��������� �� ��������
		$this->data['url'] = strtolower($this->translate($this->data['title']));
		
		return $this->data;
	}
}

$obj = new MyClass20;

$obj->setData([
	'title' => '�� ����� ������� �������� ��� ��������; ������� - �������� ���� ��� �������� php',
	'content' => '����� ��������'
]);

$data = $obj->getPreparedData();

echo "<pre>";
print_r($data);
echo "</pre>";



?>