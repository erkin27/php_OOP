<?php
/**
 * Created by PhpStorm.
 * User: e.bokushev
 * Date: 18.08.2016
 * Time: 12:45
 */

namespace book;


class Book implements iBook
{
    private $id;
    private $name;
    private $author;
    private $type;
    private $countPage;
    private $condition;
    private $year;
    private $page;

    /**
     * Book constructor.
     * @param $name
     * @param $author
     * @param $type
     * @param $countPage
     * @param $condition
     */
    public function __construct($name, $author, $type, $countPage, $condition)
    {
        $this->name = $name;
        $this->author = $author;
        $this->type = $type;
        $this->countPage = $countPage;
        $this->condition = $condition;
    }


    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->name;
    }

    public function setName($name)
    {
        // TODO: Implement setName() method.
        $this->name = $name;
    }

    public function getId()
    {
        // TODO: Implement getId() method.
        return $this->id;
    }

    public function getType()
    {
        // TODO: Implement getType() method.
        return $this->type;
    }

    public function getAuthor()
    {
        // TODO: Implement getAuthor() method.
        return $this->author;
    }

    public function getYear()
    {
        // TODO: Implement getYear() method.
        return $this->year;
    }

    public function getPage()
    {
        // TODO: Implement getPage() method.
        return $this->page;
    }

    public function getCondition()
    {
        // TODO: Implement getCondition() method.
        return $this->condition;
    }

    public function reduceCondition()
    {
        // TODO: Implement reduceCondition() method.
        if ($this->condition<=0) {return;}
        $this->condition--;
    }
}