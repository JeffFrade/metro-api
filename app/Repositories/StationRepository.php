<?php

namespace App\Repositories;

use App\Core\Support\AbstractRepository;
use App\Repositories\Models\Station;

class StationRepository extends AbstractRepository
{
    /**
     * StationRepository constructor.
     */
    public function __construct()
    {
        $this->model = $this->getStation();
    }

    /**
     * @return Station
     */
    public function getStation()
    {
        return $this->model ?? $this->createDefaultStation();
    }

    /**
     * @return Station
     */
    private function createDefaultStation()
    {
        return new Station();
    }
}
