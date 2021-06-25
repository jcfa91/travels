<?php

declare(strict_types=1);

namespace Travels\Hotels\Domain;


use App\Hotels;

final class HotelEntity
{
    private $id;
    private $name;
    private $description;
    private $address;
    private $rooms;

    /**
     * HotelEntity constructor.
     * @param HotelId $id
     * @param HotelName $name
     * @param HotelDescription $description
     * @param HotelAddress $address
     * @param HotelRooms $rooms
     */
    public function __construct(
        HotelId $id,
        HotelName $name,
        HotelDescription $description,
        HotelAddress $address,
        HotelRooms $rooms
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->address = $address;
        $this->rooms = $rooms;
    }

    /**
     * @param Hotels $data
     * @return static
     */
    public static function fromArray(Hotels $data) : self
    {
        return new self(
            new HotelId($data->id_hotel),
            new HotelName($data->name),
            new HotelDescription($data->description),
            new HotelAddress($data->address),
            new HotelRooms($data->rooms->toArray())
        );
    }


}
