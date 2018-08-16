<?php

namespace Model\Domain;


class Schedule
{
    public $film;
    public $hall;
    public $date;
    protected $id;

    /**
     * Schedule constructor.
     * @param $film
     * @param $hall
     * @param $date
     */
    public function __construct($id, $film, $hall, $date)
    {
        $this->id   = $id;
        $this->film = $film;
        $this->hall = $hall;
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getFilm()
    {
        return $this->film;
    }

    /**
     * @return mixed
     */
    public function getHall()
    {
        return $this->hall;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }


}