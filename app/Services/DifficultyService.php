<?php

namespace App\Services;

use App\Models\Difficulty;
use App\Repositories\DifficultyRepository;

/**
 * Class DifficultyService
 *
 * @package App\Services
 */
class DifficultyService
{
    /** @var DifficultyRepository */
    private $DifficultyRepository;

    public function __construct(DifficultyRepository $DifficultyRepository) {
        $this->DifficultyRepository = $DifficultyRepository;
    }

    /**
     * @param array $data
     *
     * @return Difficulty|false
     * @throws \Exception
     */
    public function create(array $data)
    {
        $response = $this->DifficultyRepository->create($data);

        return $response
            ? $response->fresh()
            : false;
    }

    /**
     * @param Difficulty $Difficulty
     * @param array $data
     * @return Difficulty|false
     */
    public function update(Difficulty $Difficulty, array $data)
    {
        $response = $this->DifficultyRepository->update($Difficulty->id, $data);

        return $response
            ? $Difficulty->fresh()
            : false;
    }
}
