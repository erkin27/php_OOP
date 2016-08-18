<?php
/**
 * Created by PhpStorm.
 * User: e.bokushev
 * Date: 18.08.2016
 * Time: 14:06
 */

namespace hall;


use book\iBook;

class Hall
{
    private $name;
    private $width;
    private $height;
    private $place;
    private $book = [];

    /**
     * Hall constructor.
     * @param $name
     * @param $width
     * @param $height
     * @param $place
     * @param array $book
     */
    public function __construct($name, $width, $height, $place, array $book)
    {
        $this->name = $name;
        $this->width = $width;
        $this->height = $height;
        $this->place = $place;
        $this->book = $book;
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
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param mixed $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * @return array
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * @param iBook $book
     */
    public function addBook(iBook $book)
    {
        $this->book[] = $book;
    }

    public function printAllBook()
    {
        echo 'Количество книг в зале '.$this->name.' равно '
            .count($this->book);
    }

    public function deleteBookById()
    {

    }
}