<?php

/**
 * Created by PhpStorm.
 * User: e.bokushev
 * Date: 18.08.2016
 * Time: 14:17
 */
class Library
{
    private $hall = [];
    private $people = [];
    private $address;

    /**
     * Паттерн "Синглтон"
     * @var $_instance
     */
    protected static $_instance;

    /**
     * Library constructor.
     * @param array $hall
     * @param array $people
     * @param $address
     */
    private function __construct(array $hall, array $people, $address)
    {
        $this->hall = $hall;
        $this->people = $people;
        $this->address = $address;
    }


    public static function getInstance(array $hall = [], array $people = [], $address = '')
    {
        if(self::$_instance === null)
        {
            self::$_instance = new self($hall, $people, $address);
        }
        return self::$_instance;
    }

    /*
     *_wakeup используется при обратной сериализации обьекта
     */
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    /*
     * Чтобы обьект нельзя было склонировать
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }


    /**
     * @return array
     */
    public function getHall()
    {
        return $this->hall;
    }

    /**
     * @param array $hall
     */
    public function setHall($hall)
    {
        $this->hall = $hall;
    }

    /**
     * @return array
     */
    public function getPeople()
    {
        return $this->people;
    }

    /**
     * @param array $people
     */
    public function setPeople($people)
    {
        $this->people = $people;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }


}