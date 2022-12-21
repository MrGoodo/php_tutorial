<?php
// И СНОВА ПЕРЕМЕННЫЕ

//Переменная переменная является динамической переменной, что означает, что вы можете динамически генерировать имена переменных в PHP. Как это делается? Если вы добавите знак доллара к строке, строка станет переменной.

$a = "bear";//Самое главное чтобы названия были идентичными, а отличалось только количество $
$$a = "cow";// Будет понятно ниже, при вызове через echo

echo $a;//Выведет значение переменной $a, то есть bear

echo $$a;//Тут php видит переменную $$a(или другая переменная, главное именно два знака $$). Так вот, PHP видит данную переменую, Он начинает с начальной переменной $a и извлекает строку «bear». Затем он добавляет к значению еще один знак доллара, создавая переменную $bear. Технически $$a — это $bear. Таким образом, он извлекает содержимое, на которое указывает $bear, то есть «корову», и выводит значение на экран.

echo $bear . "<br>";//это я просто написал, чтобы показать что такая переменная была действительно создана.
//Данный пример считатется чуть сложным, далее будут более практичные.

//Создадим две переменные, $mouse и $animal. Переменная $mouse будет содержать строку «Small», а переменная $animal — строку «mouse».

$mouse = "Small";
$animal = "mouse";

echo $animal; // Данный echo, просто выведет обычное значение переменной $animal, и все.

echo $$animal . "<br>";//Тут уже интересней, данный код, будет действовать следующими шагами. 
/*1.Он извлекает строку «mouse», на которую указывает $animal.
2.Он добавляет к строке знак доллара: $”mouse”
3.Он оценивает новую переменную $mouse и выводит строку «Small».*/

//Это значит, что PHP проделал все эти манипуляции, далее понял что такая переменная уже существует, и просто вывел ее значение к нам в браузер.

// Мы не ограничены одним дополнительным знаком доллора


//Мы создадим большой код, с большим количество дополнительных знаков $, чуть ниже

$breed                  = "German_Shepherd";
$German_Shepherd        = "Canis_Lupus_Familiaris"; // Belongs to this subspecies
$Canis_Lupus_Familiaris = "Canis_Lupus";            // Belongs to this species
$Canis_Lupus            = "Canis";                  // Belongs to this genus
$Canis                  = "Canidae";                // Belongs to this family
$Canidae                = "Carnivora";              // Belongs to this order
$Carnivora              = "Mammalia";               // Belongs to this class
$Mammalia               = "Chordata";               // Belongs to this phylum
$Chordata               = "Animalia";               // Belongs to this kingdom

echo "<div>Breed: "      . $breed . "</div>";// Он просто выводит значение пееменной $breed
echo "<div>Subspecies: " . $$breed . "</div>";//Выводит значение, уже из второй переменной $German_Shepherd,  а именно "Canis_Lupus_Familiaris"
echo "<div>Species: "    . $$$breed . "</div>";//Выводит третье значение
echo "<div>Genus: "      . $$$$breed . "</div>";//4 значение
echo "<div>Family: "     . $$$$$breed . "</div>";//5 значение
echo "<div>Order: "      . $$$$$$breed . "</div>";//6 значение
echo "<div>Class: "      . $$$$$$$breed . "</div>";//7 значение
echo "<div>Phylum: "     . $$$$$$$$breed . "</div>";//8 значение
echo "<div>Kingdom: "    . $$$$$$$$$breed . "</div>";//9 значение

/*Давайте посмотрим на все переменные, которые PHP создаст для $$$$$breed.Вот что происходит в коде, думаю все понятно, тут по пунктам, если прочитаешь все сверху, сразу вспомнишь. 

1)$breed содержит строку German_Shepherd.
2)PHP создает $German_Shepherd ($$breed).
3)$German_Shepherd содержит строку Canis_Lupus_Familiaris.
4)PHP создает $Canis_Lupus_Familiaris ($$$breed).
5)$Canis_Lupus_Familiaris содержит строку Canis_Lupus.
6)PHP создает $Canis_Lupus ($$$$breed).
7)$Canis_Lupus содержит строку Canis.
8)PHP создает $Canis ($$$$$breed).
9)$Canis содержит строку Canidae.
10)Строка Canidae эхом выводится на экран.

*/








?>