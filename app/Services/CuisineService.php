<?php

namespace App\Services;

use App\Models\Cuisine;
use App\Repositories\CuisineRepository;

/**
 * Class CuisineService
 *
 * @package App\Services
 */
class CuisineService
{
    /** @var CuisineRepository */
    private $CuisineRepository;

    public function __construct(CuisineRepository $CuisineRepository) {
        $this->CuisineRepository = $CuisineRepository;
    }

    /**
     * @param array $data
     *
     * @return Cuisine|false
     * @throws \Exception
     */
    public function create(array $data)
    {
        $response = $this->CuisineRepository->create($data);

        return $response
            ? $response->fresh()
            : false;
    }

    /**
     * @param Cuisine $Cuisine
     * @param array $data
     * @return Cuisine|false
     */
    public function update(Cuisine $Cuisine, array $data)
    {
        $response = $this->CuisineRepository->update($Cuisine->id, $data);

        return $response
            ? $Cuisine->fresh()
            : false;
    }
}
