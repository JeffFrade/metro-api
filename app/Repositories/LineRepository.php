<?php

namespace App\Repositories;

use App\Core\Support\AbstractRepository;
use App\Repositories\Models\Line;

class LineRepository extends AbstractRepository
{
    /**
     * LineRepository constructor.]
     */
    public function __construct()
    {
        $this->model = $this->getLine();
    }

    /**
     * @return Line
     */
    public function getLine()
    {
        return $this->model ?? $this->createDefaultLine();
    }

    /**
     * @return Line
     */
    private function createDefaultLine()
    {
        return new Line();
    }
}
