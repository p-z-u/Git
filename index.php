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





?>