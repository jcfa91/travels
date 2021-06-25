<?php

namespace App\Http\Controllers;

use App\Hotels;
use Illuminate\Http\Request;
use Travels\Hotels\Application\FindHotelUseCase;
use Travels\Hotels\Application\SearchHotelUseCase;
use Travels\Hotels\Infrastructure\EloquentHotelRepository;

class HotelController extends Controller
{
    //

    public function index($id)
    {
        try {
            $getHotel = new FindHotelUseCase(new EloquentHotelRepository());
            $msg = 'success';
            $get = $getHotel->execute($id);
            $status = 200;
            $body = array(
                'hotel_data'    =>  $get->toArray(),
                'rooms'         =>  $get->rooms->toArray(),
                'users'         =>  $get->users->toArray()
                );
        } catch (\Exception $e) {
            $msg = 'error';
            $body = $e->getMessage();
            $status = 400;
        }
        return response()->json(array('msg' => $msg, 'body' => $body), $status);
    }
}
