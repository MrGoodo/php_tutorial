<?php
//String

//Строка — это просто последовательность символов, окруженных кавычками; строки в PHP помещаются в одинарные или двойные кавычки. В других языках программирования, таких как Java, строки окружены двойными кавычками, а отдельные символы — одинарными кавычками.

$string_1 = 'This is an acceptable string';// можно писать с одинарными ковычками
$string_2 = "String with double quotes";//а можно писать с двойными
echo $string_1 . "<br>";
echo $string_2 . "<br>";
//в любом из этих случаев ошибки не будет, НО


// echo 'I'm a string that's directly echoed out.';//Данная строка будет ошибкой, так как у нас внутри строки, уже есть одинарные кавычки, и чтобы вывести такую строку с текстом в котором встречаются одинарные кавычки, всю строку нужно будет оборачивать в двойные кавычки, например как в примере пониже


echo "I'm a string that's directly echoed out.";//данный пример выведет всю строку и внутренние одинарные кавычки, так как вся строка обернута в двойные кавычки


//Проблема с этим кодом заключается в том, что интерпретатор PHP начинает смотреть на код и говорит:
/**1.Я вижу эхо-вызов.
2.Ищу открытую котировку, переменную, константу... (или что-то еще приемлемое).
3.Нашел открытую котировку и это одинарная кавычка. Мне нужно искать закрывающую одинарную кавычку, чтобы закончить это утверждение.
4.Нашел одинарную кавычку сразу после первого символа. Мне нужно искать точку с запятой.
5.Нашел что-то другое, кроме точки с запятой. Ошибка вызова.*/


//Вот простые правила по использованию кавычек

/**1.Если вы собираетесь использовать одинарные кавычки только внутри строки, окружите ее двойными кавычками.
2.Если вы собираетесь использовать двойные кавычки только внутри строки, окружите ее одинарными кавычками.
3.Если вы используете как одинарные, так и двойные кавычки внутри строки, окружите ее тем, что вы считаете наиболее подходящим. Вам нужно будет экранировать либо одинарные, либо двойные кавычки внутри строки. */

echo "I'm a single quote inside the double quotes.";
echo 'Jeff said "how is it going?"';
echo "Jeff's wife said, \"I'm good.\"";


$name = "Dino Cajic";
echo "Hi, my name is $name"; //Выведет "Hi, my name is Dino Cajic"

//ео если мы будем использовать одинарные кавычки, то нам просто выведется название переменной, также как вот тут внизу


$name = "Dino Cajic";
echo 'Hi, my name is $name';//будет выведено просто "Hi, my name is $name"


//Можно также использовать такой вызов и обращение к переменной с помощью конкатенации(точки), как в примере ниже.
$name = "Dino Cajic";
echo 'Hi, my name is ' . $name;
// or even use a separate echo statement
echo 'Hi, my name is ';//также можно делать вызов на следующей точке отдельно переменной, и так как тут нет нигде прерывания строки "<br>" то код не поймет что нужно вызывать их на разных строках, и в принципе мы получи тоже самое, что если бы вызывали переменную с помощью конкатанации(точки)
echo $name;



//Нам не нужно хранить строки внутри наших переменных. Мы можем хранить другие типы данных, такие как целые числа. После добавления в строку PHP будет рассматривать оператор echo как вывод одной большой строки.

$price = 100000;
echo "The price of that car is $price" . "<br>";
//данный код покажет "The price of that car is 100000" также как и в прошлых примерах было


$price = 100000;
$x = "price";
echo "That car is selling for ${$x}" . "<br>";//данный код вывел "That car is selling for 100000"

/**Что сейчас произошло?

PHP посмотрел на echo.
Он обнаружил знак доллара внутри двойных кавычек.
Он увидел, что сразу после знака доллара символом была открывающаяся фигурная скобка.
Он увидел, что внутри фигурных скобок была переменная $x.
Он оценил переменную. Получилась строка «цена».
Он добавил строку «цена» к внешнему знаку доллара и создал новую переменную $price.
Он оценил $price, которое оказалось целым числом 100000.
Он вывел всю строку на экран. */ //я понимаю, звучит сложно, но думаю данный пример, нужно просто запомнить, хотя не очень понятно для чего это может пригодиться, возможно обычная особенность php

echo "First Line \n SecondLine";
// Описание статьи "Подумайте о персонаже n. Сама по себе она не имеет особых полномочий. Но, если вы предваряете его обратной косой чертой\ n, внезапно он действует как новый линейный символ."
// Не очень понимаю, лучше у Гиги спросить.



echo "<div>First Div</div><div>Second Div</div>" . "<br>"; //PHP также будет интерпретировать символы HTML.
//Когда вы посмотрите на выходные данные, вы заметите, что теги div скрыты за кулисами, и вы просто видите две строки, одна под другой.




?>