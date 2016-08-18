<?php
/**
 * Created by PhpStorm.
 * User: e.bokushev
 * Date: 18.08.2016
 * Time: 13:39
 */

namespace people;

use book\iBook;

abstract class People
{
    private $name;
    private $age;
    private $isMale;
    private $countBookRead;
    private $email;

    /**
     * People constructor.
     * @param $name
     * @param $age
     * @param $isMale
     * @param $counBookRead
     * @param $email
     */
    public function __construct($name, $age, $isMale, $counBookRead, $email)
    {
        $this->name = $name;
        $this->age = $age;
        $this->isMale = $isMale;
        $this->counBookRead = $counBookRead;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getIsMale()
    {
        return $this->isMale;
    }

    /**
     * @param mixed $isMale
     */
    public function setIsMale($isMale)
    {
        $this->isMale = $isMale;
    }

    /**
     * @return mixed
     */
    public function getCounBookRead()
    {
        return $this->counBookRead;
    }

    /**
     * @param mixed $counBookRead
     */
    public function setCountBookRead($countBookRead)
    {
        $this->countBookRead = $countBookRead;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function readBook(iBook $book)
    {

    }
    public function takeBook()
    {

    }
    public function returnBook()
    {

    }

    function __toString()
    {
        // TODO: Implement __toString() method.
        return '<h1>Посетитель библиотеки</h1>'
            .'Имя: '.$this->name.'<br>'
            .'Возраст:'.$this->age.'<br>'
            .'Пол: '.($this->isMale ? 'мужской' : 'женский') .'<br>'
            .'Прочитано книг: '.$this->counBookRead.'<br>'
            .'email: '.$this->email.'<br>';
    }


}