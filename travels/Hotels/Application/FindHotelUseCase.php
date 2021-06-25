<?php

declare(strict_types=1);

namespace Travels\Hotels\Application;

use App\Hotels;
use Travels\Hotels\Domain\Contracts\HotelRepository;
use Travels\Hotels\Domain\HotelEntity;
use Travels\Hotels\Domain\HotelId;

final class FindHotelUseCase
{

    private $repository;


    public function __construct(HotelRepository $hotelRepository)
    {
        $this->repository = $hotelRepository;
    }


    public function execute(int $id) : ?Hotels
    {
        $getHotel = $this->repository->search(new HotelId($id));
        $this->ensureExist($getHotel);
        return $getHotel;
        //Tambien lo he hecho mapeando los campos por validacion.
        //dejo comentado para que se eche un ojo a la logica
        //return HotelEntity::fromArray($getHotel);
    }

    private function ensureExist(?object $hotel) : void
    {
        if (is_null($hotel)) {
            // throw exception();
        }
    }

}
