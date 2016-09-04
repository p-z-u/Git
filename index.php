<?php
/*echo "Hello Sinti!";
echo time(); //время в секундах с 1970г.


function add($param1, $param2)
{
	return $param1 + $param2
}

$a = $_GET['a'];
$a = $_GET['b'];

echo "a+b=".($a+$b);*/


//echo 'Привет от Синти!<br>';
echo "Привет от Синти!<br>";
echo "2016 <br>";


echo 'Синти родилась<br>18 декабря<br>...';


$str = <<<END
<p>Для отображения большого <br> количества текста используют 
синтаксис heredoc</p> 
END;

echo $str;

$str = "Алёна";



echo $str, " крутая!", "<br>"; 



$bann = 50; // Бананы 
$lim = 10; // Лимоны 
//$together = $bann + $lim; // Всего 

echo "Количество фруктов: ", $bann + $lim, "<br>";

$text = "news"; 
echo "Where's the $textpaper dgdfgdflgjdfklgjdfklgkl <br />";



$apples = 5;    // Создаем переменную $apples 
$fruit = "apples";    /* Создаем переменную $fruit, которая содержит имя переменной $apples */ 

// Сейчас мы можем вывести $apples, как $$fruit

echo "Число яблок - ", $$fruit;


define("pi", 3.14); 

echo "Математическая константа Пи равняется ", pi, "<br>";

$zxc = TRUE;    // Значение Boolean

// $zxc = 4; //Так делать не рекомендуется! Нельзя смешивать разные типы данных.

echo $zxc, "<br>";


$str = "50000";    // Значение String
$new_str = (integer) $str;    // Теперь значение стало Integer

// Проверяем... 

echo $new_str + $new_str, "<br>"; 

if ($zxc !== $str)
{
echo "Да, верно! <br>";
echo "Да, верно! <br>";
}

if (10 >= 10)  // Пример оператора сравнения.
{
echo "Действительно!! <br>";
}

$speed = 40;

if ($speed > 35 && $speed < 55) {                 // Пример логического оператора "и".
    echo "Скорость в пределах нормы <br>";        // 
}                                                 //


if(10 > 20) 
     echo "ИСТИНА! <br>"; 
else 
{
     echo "ЛОЖЬ! <br>"; 
	 echo "И ЕЩЕ РАЗ ЛОЖЬ! <br>"; 
	 
}




$text = "news"; 
echo "Where's the {$text}paper <br />";


$speed = 50;

if ($speed < 30)
    echo "Скорость в пределах нормы";

elseif ($speed >= 30 && $speed <= 60)
    echo "Ваша скорость $speed км/час";

else 
    echo "Превышение скорости !";



$speed = 58;

echo ($speed <= 60) ? "Скорость в пределах нормы <br>" : "Превышение скорости ! <br>"; // Тернарный оператор - условный оператор в сокращенном виде



$a = 2;
$b = 4;


switch ($a + $b)
{
    case 2 : 
        echo "опропропропропро";
    break;
    
    case 4 : 
        echo "аопаоаттми";
    break;
    
    case 6 : 
        echo "Замечательное число!";
    break;
    
    default : 
        echo "мититмтисмтмит";
    break;

}

for ($abc= 0; $abc < 10; $abc++) 
{
   echo "Вывод строки. 10 раз <br>"; 
   //$abc++;
}



$z = 50;
echo $z;
$z+=10;
echo $z;







$counter = 0; 

while ($counter < 5) 
{
   echo "Эта строка выведется 5 раз <br>"; 
   $counter++;
}




$counter = 6; 

do
{
   echo "Эта строка выведется ~ раз <br>"; 
   $counter++;
}
while ($counter < 10);




$eto_massiv = array ("Apple", "Limon", "Chery", "Oranges"); 
$eto_massiv  [4] = "php";
$eto_massiv  [5] = "html";
$eto_massiv  [6] = "c++";


//$eto_massiv  [1] = "arbuz";

foreach ($eto_massiv  as $key => $value) // при переборе: $key - индекс элемента массива, $value - значение элемента массива
{
	
	//echo $key;
	//$key+=2;            разобраться почему значение индекса плюсуется, но элементов выводит 4
	//echo $key;
	
   echo "Вы выбрали фрукт - $value <br>"; 
}



echo substr("Hello world", 6, 5);

echo strpos("Hello world", 'world'); // получим 6

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


echo "<pre>"; // Элемент <pre> определяет блок предварительно форматированного текста.
print_r($eto_massiv); 
echo "</pre>";




$arr[0] = "PHP"; 
$arr[1] = "HTML"; 
$arr[2] = "CSS";

foreach($arr as $value)
{ 
   echo $value, "<br>";
} 

foreach($arr as $key => $value) { // $key - индекс элемента массива, $value - значение элемента массива
   echo "[{$key}] => {$value} <br/>";
}



/////////////////// Сортировка массивов в PHP ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br> <b>Сортировка массивов в PHP:</b> <br><br>";

$arr[0] = "PHP"; 
$arr[1] = "HTML"; 
$arr[2] = "CSS";

sort($arr); // сортировка массива по возрастанию элементов

print_r($arr);

echo "<br>";

rsort($arr); // сортировка массива по убыванию элементов

print_r($arr);

echo "<br>";


$arr2["B"] = "PHP"; 
$arr2["C"] = "HTML"; 
$arr2["A"] = "CSS";

ksort($arr2); // сортирует массив по возрастанию индексов

print_r($arr2); 

echo "<br>";

krsort($arr2); // сортирует массив по убыванию индексов

print_r($arr2); 

echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// Навигация по массивам в PHP //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<b>Навигация по массивам в PHP:</b> <br><br>";

$arr[0] = "PHP"; 
$arr[1] = "HTML"; 
$arr[2] = "CSS";

print_r($arr); 

echo "<br>";

echo "Now is: ", current($arr), "<br>"; // функция current - для определения текущего элемента массива

echo "Next is: ", next($arr), "<br>"; // функция next - для определения следующего элемента массива

echo "Previously is: ", prev($arr), "<br>"; // функция next - для определения предыдущего элемента массива

echo "The end is: ", end($arr), "<br>"; // функция end - для определения последнего элемента массива

echo "First is: ", reset($arr), "<br><br>"; // функция reset - для определения первого элемента массива

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// Преобразование строк в массивы и наоборот в PHP //////////////////////////////////////////////////////////////////////////////////////////////////

echo "<b>Преобразование строк в массивы и наоборот в PHP:</b> <br><br>";

$string = implode(" - ", $arr); // implode - формирует строку из массива
echo $string; 


echo "<br>";

$string = "PHP, HTML, CSS";
$arr = explode(", ", $string); // explode - формирует массив из строки
print_r($arr); 

echo "<br><br>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// Извлечение переменных из массивов в PHP /////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br> <b>Извлечение переменных из массивов в PHP:</b> <br><br>";

$arr3["one"] = "PHP"; 
$arr3["two"] = "HTML"; 
$arr3["three"] = "CSS";
$arr3["four"] = "java";

print_r($arr3); 

echo "<br><br>";

extract($arr3);  // Если есть потребность для массива, который проиндексированн строчными данным, присвоить значение переменным, одноименным с соответствующими индексами, то можно использовать функцию extract.

echo "\$one = $one <br>";
echo "\$two = $two <br>";
echo "\$three = $three <br>"; 
echo "\$four = $four <br><br>"; 

//$one = "PHP";
//$two = "HTML";
//$three = "CSS";
//$four = "java";

$arr = compact("one", "two", "three", "four"); // Если нужно сложить из переменных массив, то нужно использовать функцию compact.

print_r($arr); 

echo "<br><br>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// Слияние и разделение массивов в PHP /////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br> <b>Слияние и разделение массивов в PHP:</b> <br><br>";

$arr4["one"] = "PHP"; 
$arr4["two"] = "HTML"; 
$arr4["three"] = "CSS";

$new_arr = array_slice($arr4, 0, 2); //Если вам нужно добавить в массив несколько элементов другого массива, то вам поможет функция array_slice:
//Первый параметр функции array_slice - это название того массива, с которого будут браться элементы; второй - начальный номер элемента (с какого элемента начинать брать элементы); третий - количество элементов выборки.

print_r($new_arr);

echo "<br>";

$arr5[1] = "PHP"; 
$arr5[2] = "HTML"; 
$arr5[3] = "CSS";

$arr6[1] = "PHOTOSHOP"; 
$arr6[2] = "PAINT.NET"; 
$arr6[3] = "DREAMWEAVER";

$new_arr1 = array_merge($arr5, $arr6); // Для соединения массивов в один нужно использовать функцию array_merge:
print_r($new_arr1); 

echo "<br><br>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// Сравнение массивов в PHP /////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br> <b>Сравнение массивов в PHP:</b> <br><br>";

$arr7[1] = "PHP"; 
$arr7[2] = "HTML"; 
$arr7[3] = "CSS";

$arr8[1] = "PHP"; 
$arr8[2] = "PAINT.NET"; 
$arr8[3] = "DREAMWEAVER";

$diff = array_diff($arr8, $arr7); //Если нужно проверить какой элемент совпадает в том, или ином массиве, или наоборот НЕ совпадает, то можно использовать функцию array_diff.
print_r($diff); 

echo "<br>";

$arr9["one"] = "PHP"; 
$arr9["two"] = "HTML"; 
$arr9["three"] = "CSS";

$arr0[1] = "PHP"; 
$arr0["two"] = "HTML"; 
$arr0[3] = "DREAMWEAVER";

$diff = array_diff_assoc($arr9, $arr0);  //Если нужно, чтобы сравнивался еще и строковый индекс массивов, то тут уже нужно использовать функцию array_diff_assoc.
print_r($diff); 

echo "<br>";

$arr10[1] = "PHP"; 
$arr10[2] = "HTML"; 
$arr10[3] = "CSS";

$arr11[1] = "PHP"; 
$arr11[2] = "PAINT.NET"; 
$arr11[3] = "DREAMWEAVER";

$diff = array_intersect($arr10, $arr11); //Если вам нужно найти общие элементы массивов, то вам поможет функция array_intersect:
print_r($diff); 

echo "<br><br>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// Обработка данных в массивах PHP /////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br> <b>Обработка данных в массивах PHP:</b> <br><br>";


$arr12[1] = 31; 
$arr12[2] = 1; 
$arr12[3] = 94;

$sum = array_sum($arr12); // Сумма всех элементов массива

echo $sum, "<br>"; 

$arr = array(30, 44, 97, 30);
print_r($arr); 

$new_arr = array_unique($arr); // Если, требуется избавится от элементов с повторяющим значение, то стоит использовать функцию array_unique.
print_r($new_arr); 

echo "<br><br>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// Многомерные массивы в PHP /////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br> <b>Многомерные массивы в PHP</b> <br><br>";

$companies[1][1] = "Programmer"; 
$companies[1][2] = "PR"; 
$companies[1][3] = "Office Manager"; 

$companies[2][1] = "IT"; 
$companies[2][2] = "Web-design"; 

$companies[3][1] = "PR";
$companies[3][2] = "C++ Programmer";

print_r($companies);

echo "<br>";
//Также эту конструкцию можно было записать так:
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


var_dump ($companies1); //Эта функция возвращает структурированную информацию об одном или более выражений, которая включает его тип и значение.



echo "<br><br>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// Задачи на циклы в PHP /////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br> <b>Задачи на циклы в PHP</b> <br><br>";




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
   $counter+=2; //чтобы получались чётные числа (прибавляется 2 к переменной)
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


$cvet = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach($cvet as $key => $value) { 
   echo "[{$key}]<br/>";
}

foreach($cvet as $value)
{ 
   echo $value, "<br>";
} 





$zarp = array('Коля'=>'200', 'Вася'=>'300','Петя'=>'400');

foreach($zarp as $key => $value)
{ 
  echo $key, ' - зарплата ', $value, ' долларов <br>';
} 




$color = array('colors');


//$color[][] = "enru"; 

/*foreach($color as $key => $value) { 


  $color["en"] = array("green", "red", "blue"); 
  $color["ru"] = array("зеленый", "красный", "голубой");

}

print_r($color);*/


$color = array(
    "en" => array("green", "red", "blue"), 
    "ru" => array("зеленый", "красный", "голубой"), 
);

print_r($color);





























echo "<br><br>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////// Функции в PHP, их синтаксис, создание и вызов /////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<br> <b>Функции в PHP, их синтаксис, создание и вызов</b> <br><br>";

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


function hello($text = "Привет") {
   echo $text, "<br>";
}

hello();

hello('hello');

echo "<br><br>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////








?>