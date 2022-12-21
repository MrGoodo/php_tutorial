<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// можно открывать и закрывать php в html сразу, внутри тега <body>
$name = "Nika";
echo ($name) . '<br>'; // обычный синтаксис, тут просто создание переменной и ее вывод в веб браузер, потом новая строка <br> и после вывод сразу string, ничего сложного!

echo " Kandelaki" . '<br>';
echo "My name is " . $name; // просто через конкотанацию добавил стринг текстом, поставил пробел, а далее попросил вывести то что было в созданной мной переменной, все просто!
// можно и не открывать тег <body> а сразу писать php без html!
?>
    
</body>
</html>

