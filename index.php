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





?>