<?php


namespace Travels\Hotels\Domain;


class HotelRooms
{

    private $roomsRelations;

    public function __construct(array $rooms = [])
    {
        $this->roomsRelations = $rooms;
    }



    public function getRoms() : array
    {
        return $this->roomsRelations;
    }

}
