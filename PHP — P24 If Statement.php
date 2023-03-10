<?php
// Операторы IF, являются условными операторами, что означает, что если выражение, которое они оценицивают, истинно, оператор if позволяет выполнить выражение внутри тела оператора if. Возможно немного запутанно, но сейчас разберем.

// Оператор if выглядит вот таким вот образом.
/*if (Логическое выражение){
    выражение в теле;
}
*///Удалить данные кавычки и открыть выражение, и текст удали пидарас

//Оператор if начинается со слова(не удивляйтесь) if, за которыми следует выраажение, заключенное в круглые скобки. Выражение оценивается как true или false. Если выражение оценивается как true, то выражение внутри тела оператора if, будет выполнено (То что заключено в фигурные скобки {})(Также нельзя забывать про точку с запятой)

// Рассмотрим пример. Мы гарантируем нашему оператору if, что логическое выражение наше = true(Просто пропишем там true), дабы мы могли вывести то что мы хотим.

if (true){
    echo "Monkey";
}
//Приведенный выше код выведет Monkey, поскольку логическое выражение внутри оператора if оценивается как истинное. Любой тип выражения, который оценивается как true или false, может быть помещен внутрь условного оператора.
//Например.

$a = 10;

if ($a > 5){
    echo "IloveOnePiece";
}

/*PHP оценивает приведенный выше оператор if следующим образом:
1. PHP видит ключевое слово if.
2. Он ищет открывающие скобки.
3. Он оценивает выражение внутри круглых скобок. Значение, хранящееся в $a, больше 5? Другими словами, 10 больше 5? Да. Значит, выражение верно.
4.Поскольку выражение истинно, PHP заглядывает внутрь тела оператора if и находит оператор echo. После чего выводит нам надпись.
*/

//Мы также можете сравнивать строки внутри логического выражения. Как упоминалось ранее, выражение просто должно быть оценено как истинное или ложное. Например.

$SomeWord = "Roronoa";

if ($SomeWord  == "Roronoa"){
    echo "Nothing Happened";
}

// Также мы можем использовать оператор отрицания (!), чтобы изменить значение условного оператора. С оператором отрицания, если значение true, то инвертированное значение будет false, и также наоборот, если у нас false, то инвертированное значение будет true.

//Иногда вам нужно оценить выражение внутри оператора if, когда условное выражение оценивается как false. В этом случае вы можете добавить ! оператора и инвертировать false в true. Помните, что единственный способ выполнить операторы внутри оператора if — это если условие оценивается как истинное.
//Например

$definitelyfalse = false;

if (!$definitelyfalse){
    echo "Инвертированное false, равно true";
}

// Тело оператора if может содержать несколько выражений. Например

if (true){
    $a = 5;
    $b = 7;
    $c = $a + $b;
    echo $c;// Равно 12 если шо.
}

//Если внутри тела оператора if имеется только одно выражение, фигурные скобки можно опустить. Например.

$oneExpression = true;

if ($oneExpression)
    echo "One Expression";
// Фигурные скобки не обязательно использовать даже с несколькими выражениями. PHP предлагает альтернативный синтаксис с двоеточием и endif. Вот так например.

$time = 7;

if ($time >= 6 && $time < 9):
    echo "Good Morning, Son - NO";
endif



?>