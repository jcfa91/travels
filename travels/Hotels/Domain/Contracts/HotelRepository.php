<?php

namespace Travels\Hotels\Domain\Contracts;

use App\Hotels;
use Travels\Hotels\Domain\HotelId;

interface HotelRepository
{

    public function search(HotelId $hotelId) : Hotels;

}
