<?php
/**
 * Created by PhpStorm.
 * User: e.bokushev
 * Date: 18.08.2016
 * Time: 10:52
 */

namespace book;


interface iBook
{
    public function getName(); //Получаем название книги
    public function setName($name); //Задаем название книги
    public function getId(); //получаем идентификатор
    public function getType(); //Получаем раздел (тип) книги
    public function getAuthor(); //Получить автора
    public function getYear(); //Получить год
    public function getPage();//Кол-во страниц
    public function getCondition(); //Качество книги
    public function reduceCondition(); //Уменьшить качество книги
}