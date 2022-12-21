<?php
// Операторы сравнения. 
// Операторы сравнения или операторы отношения проверяют некоторый тип отношения между двумя значениями. 

//Реляционные операторы, которые мы собираемся рассмотреть, следующие:

/*
Больше чем: >
Больше или равно: >=
Меньше: <
Меньше или равно: <=
Равно: ==
Идентичен: ===
Не равно: != или <>
Не идентично: !==
Оператор космического корабля: <=> ОРУ, прям так и написано в статье.
*/

//Оператор сравнения, какой бы вы ни выбрали, будет оцениваться либо как истина, либо как ложь. Если мы говорим, что 3 > 2, то на самом деле мы говорим следующее: 3 Больше 2 ?

//Если мы можем сказать ДА , то это соответствует истинному утверждению. Если мы скажем НЕТ , то это будет ложным утверждением.

//Начнем с присвоения нескольких значений некоторым переменным. Помните, один знак равенства означает присваивание; двойной знак равенства означает равенство.


$a = 10;//число
$b = 5;//Число
$c = "10";//Это уже строка

//Мы будем использовать функцию var_dump(), чтобы выяснить, будет ли выражение оцениваться как истинное или ложное; он просто сбрасывает результат выражения.

//Начнем с оператора равенства ==, Мы хотим увидеть, равно ли $a и $b
var_dump($a==$b); //Нет, они не равны значит нам выдаст false

//Нам известно, что у нас наши значения переменных, разные, какие то число, какое то строка

//Теперь мы попробуем еще раз оператор сравнения, но на этот раз выберем переменную $a где значение является числом 10, и переменную $c где значением является СТРОКА, в которой написано 10


var_dump($a == $c); // Нам выдаст правду, Потому что,  PHP смотрит на строку «10» и видит, что она содержит число внутри; это числовая строка. Он грубо сравнивает два значения и видит, что они действительно совпадают.
// Оператор равенства смотрит только на значение, а не на тип данных.

//ОДНАКО, если же нам важны ТИПЫ ДАННЫХ, то уже нужно использовать не оператор сравнения ==, а оператор идентификации (идентичности) ===, он проверяет сначала тип данных, и если он разный, то сразу вернет нам false, если тип данных одинаковый, php идет дальше и уже проверяет значение, если и оно верно, ТО ТОЛЬКО В ЭТОМ СЛУЧАЕ, нам выдаст TRUE.

var_dump($a === $c);//Вернет нам false, так как наши типы, отличаются

//Точно также, мы можем спросить у php НЕ РАВНЫ ли значение.

var_dump($a != $b); // Вернет TRUE, так как мы использовали оператор «не равно» (!=). Если два значения не равны, возвращается true. Мы уже спрашивали у php Чуть выше: 10 не равно 5? Правильно, 10 не равно 5, так что это верное утверждение. и нам вернется TRUE. 

//Вы также можете использовать <> для проверки неравенства. 
var_dump($a <> $b); // Точно также как чуть выше объяснение, вернет нам true



//Оператор не равно проверяет только значения выражения, а не тип данных. Чтобы проверить типы данных вместе со значениями, мы будем использовать оператор неидентичности (!==).

var_dump($a != $c); // Вернет false, так как у нас оператор не равно, проверяет только значение выраженин, а не тип данных, а по значениям, они равны. поэтому он вернет false, потому что они РАВНЫ

var_dump($a !== $c); //Вернет true, так как у нас оператор проверяет идентичность, а так как у нас у одной переменной значение это ЧИСЛО 10, а у другой переменной СТРОКА 10, то он скажет что ДА, ОНИ НЕ ИДЕНТИЧНЫ, и вернет нам true.

//«Больше чем», «меньше чем», «больше или равно» и «меньше или равно» являются прямыми. Они очень просты.

var_dump($a > $b); // Венет нам true, Так как $a действительно больше чем $b
var_dump($a < $b); // Вернет нам false, Так как $a в действительности не меньше, а больше переменной $b
var_dump($a >= $c); // Венет нам true, так как $a в действительности либо больше либо равняется $c
var_dump($a <= $c); // Венет нам true, так как в действительности у нас либо меньше либо РАВНЯЕТСЯ $c.


/*Не существует оператора больше-и-идентично-оператору или меньше-и-идентично-оператору.

Последний оператор называется оператором космического корабля (<=>). Он возвращает 0, если значения равны, 1, если правая часть больше левой, и -1, если левая часть больше правой.

0 при равенстве
1, когда правое больше
-1, когда левый больше
КАК НИЖЕ
*/

var_dump($a <=> $b);// У нас переменная $a больше чем переменная $b, поэтому нам выведется на экран -1, посмотри чуть выше в коде и поймешь, когда у нас левая сторона выражения больше правой стороны, выводится -1, а когда наоборот правой стороны выражения больше, а левой меньше, будет выведено 1, судя по тому что в браузер вывилось -1, следует что у нас леваяя часть выражение больше правой, вот и все.


/* Хотя мы рассматривали целочисленные значения, мы можем сравнивать данные любого типа. Например, мы можем сравнить $a с логическим значением true . Мы получаем странный результат: true. Почему? Любое целое число, кроме нуля, по сравнению с истинным равно истинному. Это может вызвать некоторые проблемы, если вы случайно передадите число в условный оператор, например оператор if. Мы рассмотрим это позже. */


var_dump($a == true); // Выдаст нам true, так как у нас значение переменной $a равняется число, которое больше 0
var_dump($a === true); // Выдаст нам false, так как у нас значение переменной $a является числом, а не является булевым значением, а true - является булевым типом, а так как у нас тут используется оператор идентичности, то php проверяет у переменной и ТИП и Значение.
var_dump(4.5 > 2); // Выдаст нам true, так как 4.5 действительно БОЛЬШЕ чем 2.
var_dump("Nika" == "nika"); // Выдаст нам false, потому что оператор сравнения, проверил строку, и увидел что слева "Nika" Написано с БОЛЬШОЙ БУКВЫ, а с права написано С МАЛЕНЬКОЙ БУКВЫ, и так как они не равны друг другу, вернул нам FALSE
var_dump("Dino" == "Dino"); // Вернет нам true, так как оператор сравнения зашел в строку, и проверил написание, написание идентично, большие и маленькие буквы одинаковые, потому он выдал нам TRUE.


//КОНЕЦ.




?>