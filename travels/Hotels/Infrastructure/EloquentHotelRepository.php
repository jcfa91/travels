<?php


declare(strict_types=1);


namespace Travels\Hotels\Infrastructure;


use App\Hotels;
use Travels\Hotels\Domain\Contracts\HotelRepository;
use Travels\Hotels\Domain\HotelId;

final class EloquentHotelRepository implements HotelRepository
{

    private $model;

    public function __construct()
    {
        $this->model = new Hotels();
    }


    public function search(HotelId $hotelId) : Hotels
    {
//        return $this->model->findOrFail($hotelId->id())->rooms->toArray();

        return $this->model->findOrFail($hotelId->id());
    }

}
