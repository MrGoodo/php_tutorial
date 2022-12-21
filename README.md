# php_tutorial
php - Статьи
1. # [PHP — P1 Basic Syntax](https://github.com/MrGoodo/php_tutorial/blob/master/PHP%20%E2%80%94%20P1%20Basic%20Syntax.php)
__Это пока обычная база, если потом кому нибудь понадобиться, чтобы я рассказал как вообще запускать PHP код, то смогу дополнить, просто напишите мне.__

Ваш код PHP должен быть окружен тегами PHP:
```php
    <?php 
     Ваш код здесь; 
    ?>
```
Первый фрагмент кода, который мы напишем, — это простой оператор echo. Echo просто означает, взять эту строку и вывести ее на экран. Каждое выражение должно заканчиваться точкой с запятой, чтобы считаться допустимым синтаксисом PHP.
```php
    <?php 
      echo "Hi, my name is Nick Kandelaki";
    ?>
```
Данный код выведет в окно браузера строку: Hi, my name is Nick Kandelaki.

2. # [PHP — P2 Comments.php](https://github.com/MrGoodo/php_tutorial/blob/master/PHP%20%E2%80%94%20P2%20Comments.php)

__В данном блоке будет про оставление комментариев, с этим мы сейчас быстро разберемся, но сразу говорю, тут будет много текста, который нужно просто запомнить, комментарии очень просты.__

Комментарии позволяют писать краткие или подробные описания, объясняющие, что на самом деле делает написанный вами код. Вы или кто-то другой вернетесь к своему коду через несколько лет и попытаетесь расшифровать, что он на самом деле означает. Вы всегда должны стремиться писать код, который говорит сам за себя, но время от времени вы можете указать небольшую дополнительную деталь.

__В PHP есть несколько способов оставления комментария.__
1. Первый тип комментария начинается с //. Это однострочные комментарии, означающие, что все, что вы пишете на этой конкретной строке, будет игнорироваться PHP, пока вы не нажмете enter, текст будет закомментирован.
2. Другой однострочный комментарий начинается с #. Тоже саомое что и //.
3. Последний тип комментария — это __/** */__. Он начинается с /** и заканчивается */. Это может быть однострочный или многострочный комментарий. Любые символы, расположенные между __/** */__, будут закомментированы независимо от того, сколько строк они занимают.

__Проверим способы, например я написал какой то код, и решил оставить после него, какой то комментарий, который php не видит, но для меня это будет какая то подсказка.__

__Не забывай про то что весь код php, должен быть внутри нашего тега php, а то код не будет распознан. Всегда <?php Ваш код ?>__
```php
      <?php
        echo "Думаю мне пора ложиться спать!"; // Я могу оставить комментарий прямо тут.
      ?> 
```
PHP Его не видит, но я вижу, и думаю, что спать пока рано. Иди работай.

__Точно также можно ставить вместо знака //, например знак #.__

__Если же у нас очень много текста, который мы перенесли в код, как пометки или еще что то, что занимает больше одной строки, то используем /* Скопированный Текст */ и все, php уже не видит данный текст, но вам он виден.__
__Например я захотел вставить в код(почему то), цитату Мадары из Наруто и закомментировать ее. Вот как это будет выглядеть__
```php
    /* 
      «Слушай внимательно, в этои мире, везде где есть свет, всегда есть и тень!
      Очнись и взгяли на реальность, не всегда все идет по плану.
      Пока существует концепция победителей, должны быть и проигравшие. 
      Эгоистичное желание сохранить мир вызывает войны, а ненависть рождается для защиты любви».
    /*
```
Данные цитаты не видны php(к сожалению), но видны нам, примерно так работает данный вид комметариев.

__И последнее, если вам нужно выделить сразу много кода и закомментировать его, можно использовать сочетание клавиш ctrl + /. Порядок действий для этого очень простой.
- Выберите текст или код, который хотите закомментировать.__
- Выделить данный текст или код.
- Нажмите сочетание клавиш ctrl + /
__Чтобы отменить такое комментирование.__
- Выделите закомментированный текст.
- Снова нажмите сочетание клавиш ctrl + /.
- Готово.
__Если хотите отменить последнее действие или изменение кода, то сочетание клавиш ctrl + z вам поможет. (Если используете VS code)__

3. # [PHP — P3: Variables Intro](https://github.com/MrGoodo/php_tutorial/blob/master/PHP%20%E2%80%94%20P3%20Variables%20Intro.php)
__Тут будет введение в переменные! Переменные это просто контейнеры для хранения, запомни это. В них можно хранить любые данные!__

__Существуют вот такие способы названия переменных.__
```php
        $x = 1;
        $X = 2;// Отличается от первой переменной x, так как эта уже заглавная буква, для PHP уже другая переменная
        $_x = 2;
        $__y = 3;
        $_z_ = "Саламалейкум";
        $__name__ = "Nika";
        $dinozavr1 = "First Nika";
        $dino_1 = "Nika 1";
        $_dino_1 = "I'm number 1";
        $d1_2_3_hello_ = "Still valid";
```
__Вот так уже называть нельзя, иначе PHP выдаст ошибку.__
```php
        $1 = "Number 1";
        $%abc = "Invalid"; // Спец символы также не используются
```
Если глянуть в браузер после того как мы ввели неправильные названия для переменныех, то php сам нам скажет, что так писать нельзя и выведет ошибку, так что не забывай читать ошибки, там подсказки об исправлении!

__Также как ты помнишь, мы просто дали php переменным, их значения, которые php запомнил, пока ключевое слово echo или return не напишешь, страницу веб-браузера будет белой, как только что выпавший снежок!__

4. # [PHP — P4: Basic Booleans](https://github.com/MrGoodo/php_tutorial/blob/master/PHP%20%E2%80%94%20P4%20Basic%20Booleans.php)

__Логическое значение является скалярным типом данных, представляющим значения true и false.__

Напишем небольшой код, например вот такой.
```php
        $do_you_have_money = false;
```
Этот код значит следующее, есть ли у кого то деньги, я написал переменную $есть_ли_у_тебя_деньги, в которой значением является ложь, и если мы выведем это в браузер, с помощью команды var_dump(название переменной), он покажет что у меня нет денег, то есть выведет false значение.

```php
        var_dump($do_you_have_money);
```
Данный код, выведет всю информацию по переменной и ее значениям, она используется не только с переменными, но и например с модулями, про которые мы поговорим позже.

__Булевые значения используются обычно для функций, или для if утвеждений(if statement).__

__Запомни, это очень просто - "Если что то, то что то", в принципе весь смысл if утверждений, напишем код.__

```php
        if ($do_you_have_money == true){
            echo "Buy some food, you idiot!";
        };
```
__В этом коде написано следующее, "если (переменная == содержит true) , то выведи в браузер надпись" , а так как мы переменной присваивали значение false в начале, наш браузер остался без изменений и текст не был выведен. Если коротко, в круглых скобках все что написано является выражением, ты прописываешь там переменную, и выставляешь условие, и если оно подтверждается, то код работает, если нет, то не работает, все зависит от условий, которые ты указал.__

Напишем еще пример.

```php
        if ($do_you_have_money == false){
            echo "Oh... sorry..";
        }
```
В данном коде, если наша переменная содержит false(она содержит) то в браузер выведится надпись. Вот и все.

Создадим код, который проверяет богат ли я. Пропишем две переменные.

```php
        $money_in_pocket = 10;
        $rich = $money_in_pocket > 10000;
        var_dump($rich);
```
В данном коде, сказано что у меня в кошельке 10 долларов, а чтобы быть богатым по нашим условиям, мне нужно чтобы количество денег в моем кошельке было больше той суммы что я указал, в данном случае больше чем 10000. Тут в переменной прописано значение, результатом которого является сравнение, переменной где указаны мои деньги, с количеством денег, которые я указал, чтобы быть богатым.
__Теперь выведем через var_dump(название переменной $rich) нужна эта переменная где прописано наше условие(сравнение), иначе смысла нет выводить. Браузер покажет false так как денег в моем кошельке меньше чем та сумма что мы ввели, следовательно я бомжара.__
