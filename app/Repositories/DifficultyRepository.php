<?php

namespace App\Repositories;

use App\Models\Difficulty;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\QueryException;

/**
 * Class DifficultyRepository
 *
 * @package App\Repositories
 *
 */
class DifficultyRepository extends BaseRepository
{
    /**
     * DifficultyRepository constructor.
     *
     * @param Difficulty $Difficulty
     * @internal param Difficulty $Difficulty
     */
    public function __construct(Difficulty $Difficulty)
    {
        $this->model = $Difficulty;
    }

    /**
     * @inheritdoc
     */
    public function list(array $params = [], array $relationships = []): LengthAwarePaginator
    {
        $query = $this->newQuery();
        $query->select([
            'difficulty.id',
            'difficulty.title',
        ]);
        return $this->processList($query, $params, $relationships);
    }
}
