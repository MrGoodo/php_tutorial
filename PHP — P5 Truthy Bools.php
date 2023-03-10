<?php

//Мы рассмотрели логические значения впредыдущей статье. Логические значения обозначают значение true или false. PHP имеет правдивые логические значения, которые не являются истинными или ложными, но при вычислении внутри выражения они могут действовать так, как есть.

//Лучшими примерами являются целые числа 0 и 1. Если бы мы передали 1 оператору if, PHP интерпретировал бы число 1 как истинное и выполнил бы оператор внутри тела. Если передать 0 оператору if, PHP будет интерпретировать 0 как ложный, поэтому он не будет выполнять инструкцию внутри тела оператора if.

//На самом деле, мы можем добавить любое целое значение, положительное или отрицательное, и PHP будет интерпретировать их как правдивые. Он интерпретирует только 0 как ложный.

if ( 1 ) {
    echo "He was number 1";
}//данное утверждение выведет нам текст, так как единица это true, поэтому текст будет выведет в браузер.

if ( -5 ){
    echo "He was also number 1";
}//Данное утверждение также будет считать как true, так как любое число, отрицательное или положительное, выведет true, только в одном случае будет false, это если число будет равно нулю (0)

if ( 0 ){
    echo "Was he number 1?";
}//Данный текст в браузер не будет выведен, так как это утверждение равно false, так как тут у нас число ноль (0)

$cars = []; // empty array
if ( $cars ) {
  echo "Empty arrays are considered falsy";
}// пустые массива, в коде воспринимаются как false, поэтому данный текст в данном утверждении не будет выведен в браузер!




$names = ['Dino', 'Frank', 'Susan']; //массив

var_dump( (bool) "" );//не будет выведено, так как тут у нас пустая строка, и будет false
var_dump( (bool) "Dino" );// выведет true так как это обычный стринг.
var_dump( (bool) "false" );// выведет true, так как это все равно обычный стринг, и не важно что в нем написано, он существует, значит выведет!
var_dump( (bool) [] ); //Пустой массив, будет false, как и в примере выше.
var_dump( (bool) $names );// тут вар_дамп обращается к нашему массиву, в котором есть элементы, поэтому данное утверждение будет true.

if ( count($names) > 0 ){
    echo "This is a true statement";// данное утверждение обращается к нашему массиву и считает его элементы, и ставит условие, если колличество элементов массива, будет больше нуля(0), то текст будет выведен, и в данном случае, текст действительно будет выведен!
}






?>