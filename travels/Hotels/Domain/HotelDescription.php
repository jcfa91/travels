<?php


namespace Travels\Hotels\Domain;


final class HotelDescription
{

    private $description;

    public function __construct(string $description)
    {
        $this->checkDescription($description);
        $this->description = $description;
    }


    public function description() : string
    {
        return $this->description;
    }


    /**
     * @param string $description
     */
    private function checkDescription(string $description): void
    {
        if ($description == '') {
            throw new IncorrectDescription("Error description");
        }
    }

}
