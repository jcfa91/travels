<?php


namespace Travels\Hotels\Domain;


class HotelName
{
    private $name;

    public function __construct(string $name = 'No name')
    {
        $this->checkName($name);
        $this->name = $name;
    }


    public function name() : string
    {
        return $this->name;
    }


    public function checkName(string $name) : void
    {
        if ($name == '') {
            throw new IncorrectName('Incorrect Hotel Name');
        }
    }

}
