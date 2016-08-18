<?php
/**
 * Created by PhpStorm.
 * User: e.bokushev
 * Date: 18.08.2016
 * Time: 10:38
 */
use book\Book;
use hall\Hall;
use people\Reader;
//require_once 'book/iBook.php';
//require_once 'book/Book.php';
require_once 'Autoloader.php';

//$book = new Book('Приключение Тома Сойера',
//    'Марк Твен ', 'Художественная литература', 320, 100);

//$reader = new Reader('Иван',25,true,10,'1@1.ru');

Library::getInstance(
    [
        new Hall('Малый холл',40,3,50,[
            new Book('Приключение Тома Сойера',
                'Марк Твен ', 'Художественная литература', 320, 100),
            new Book('Приключение Тома Сойера - обновленная редакция',
                'Марк Твен ', 'Художественная литература', 320, 100)
        ]),
        new Hall('Большой холл',80,4,150,[
            new Book('Приключение Тома Сойера',
                'Марк Твен ', 'Художественная литература', 320, 100),
            new Book('Приключение Тома Сойера - обновленная редакция',
                'Марк Твен ', 'Художественная литература', 320, 100)
        ]),
    ],
    [
        new Reader('Иван',25,true,10,'1@1.ru'),
        new Reader('Мария',27,false,20,'2@1.ru'),
    ],
    'г. Киев'
);

print_r(Library::getInstance());


