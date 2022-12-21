# php_tutorial
php - статьи
1. # [PHP — P1 Basic Syntax](https://github.com/MrGoodo/php_tutorial/blob/master/PHP%20%E2%80%94%20P1%20Basic%20Syntax.php)
### Это пока обычная база, если потом кому нибудь понадобиться, чтобы я рассказал как вообще запускать PHP код, то смогу дополнить, просто напишите мне.

Ваш код PHP должен быть окружен тегами PHP:

    <?php 
     Ваш код здесь; 
    ?>
Первый фрагмент кода, который мы напишем, — это простой оператор echo. Echo просто означает, взять эту строку и вывести ее на экран. Каждое выражение должно заканчиваться точкой с запятой, чтобы считаться допустимым синтаксисом PHP.

    <?php 
      echo "Hi, my name is Nick Kandelaki";
    ?>
Данный код выведет в окно браузера строку: Hi, my name is Nick Kandelaki.

2. # [PHP — P2 Comments.php](https://github.com/MrGoodo/php_tutorial/blob/master/PHP%20%E2%80%94%20P2%20Comments.php)

###  В данном блоке будет про оставление комментариев, с этим мы сейчас быстро разберемся, но сразу говорю, тут будет много текста, который нужно просто запомнить, комментарии очень просты.

#### Комментарии позволяют писать краткие или подробные описания, объясняющие, что на самом деле делает написанный вами код. Вы или кто-то другой вернетесь к своему коду через несколько лет и попытаетесь расшифровать, что он на самом деле означает. Вы всегда должны стремиться писать код, который говорит сам за себя, но время от времени вы можете указать небольшую дополнительную деталь.

##### В PHP есть несколько способов оставления комментария. 
1. Первый тип комментария начинается с //. Это однострочные комментарии, означающие, что все, что вы пишете на этой конкретной строке, будет игнорироваться PHP, пока вы не нажмете enter, текст будет закомментирован.
2. Другой однострочный комментарий начинается с #. Тоже саомое что и //.
3. Последний тип комментария — /** ВАШ ТЕКСТ */. Он начинается с /** и заканчивается на */. Его можно использовать в виде однострочного или многострочного комментария. Любые символы, помещенные между /** и */, будут закомментированы независимо от того, сколько строк занимают символы. Можно и в таком виде: /* Ваш текст */

##### Проверим способы, например я написал какой то код, и решил оставить после него, какой то комментарий, который php не видит, но для меня это будет какая то подсказка.

##### Не забывай про то что весь код php, должен быть внутри нашего тега php, а то код не будет распознан. Всегда <?php Ваш код ?>

      <?php
        echo "Думаю мне пора ложиться спать!"; // Я могу оставить комментарий прямо тут.
      ?> 
PHP Его не видит, но я вижу, и думаю, что спать пока рано. Иди работай.

##### Точно также можно ставить вместо знака //, например знак #. 

##### Если же у нас очень много текста, который мы перенесли в код, как пометки или еще что то, что занимает больше одной строки, то используем /* Скопированный Текст */ и все, php уже не видит данный текст, но вам он виден. 
##### Например я захотел вставить в код(почему то), цитату Мадары из Наруто и закомментировать ее. Вот как это будет выглядеть
    /* 
      «Слушай внимательно, в этои мире, везде где есть свет, всегда есть и тень!
      Очнись и взгяли на реальность, не всегда все идет по плану.
      Пока существует концепция победителей, должны быть и проигравшие. 
      Эгоистичное желание сохранить мир вызывает войны, а ненависть рождается для защиты любви».
    /*
Данные цитаты не видны php(к сожалению), но видны нам, примерно так работает данный вид комметариев.

##### И последнее, если вам нужно выделить сразу много кода и закомментировать его, можно использовать сочетание клавиш ctrl + /. Порядок действий для этого очень простой.
- Выберите текст или код, который хотите закомментировать.
- Выделить данный текст или код.
- Нажмите сочетание клавиш ctrl + /
##### Чтобы отменить такое комментирование.
- Выделите закомментированный текст.
- Снова нажмите сочетание клавиш ctrl + /.
- Готово.
###### Если хотите отменить последнее действие или изменение кода, то сочетание клавиш ctrl + z вам поможет. (Если используете VS code)
