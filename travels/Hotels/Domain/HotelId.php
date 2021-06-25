<?php

declare(strict_types = 1);

namespace Travels\Hotels\Domain;


final class HotelId {

    private $id;

    public function __construct(int $id)
    {
        $this->checkId($id);
        $this->id = $id;
    }


    public function id()
    {
        return $this->id;
    }


    /**
     * @param int $id
     */
    private function checkId(int $id): void
    {
        if ($id < 0) {
            throw new IdNotfound($id);
        }
        $this->id = $id;
    }

}
