<?php


namespace Travels\Hotels\Domain;


final class HotelAddress
{

    private $address;

    public function __construct(string $address)
    {
        $this->checkAddress($address);
        $this->address = $address;
    }


    public function address() : string
    {
        return $this->address;
    }


    /**
     * @param string $address
     */
    private function checkAddress(string $address): void
    {
        if ($address == '') {
            throw new IncorrectAddress("Error address");
        }
    }

}
