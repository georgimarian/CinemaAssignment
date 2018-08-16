<?php

namespace Model\Domain;

class Movie
{
    protected $name;
    protected $year;
    protected $picture;
    protected $id;

    public function __construct(string $name, $year, string $picture, $id)
    {
        $this->name    = $name;
        $this->year    = $year;
        $this->picture = $picture;
        $this->id      = $id;
    }

    /**
     * @return array
     */
    public function getPicture(): string
    {
        return $this->picture;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    public function getId()
    {
        return $this->id;
    }
}
