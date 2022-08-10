<?php

namespace App\Repositories;

use App\Models\Tag;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\QueryException;

/**
 * Class TagRepository
 *
 * @package App\Repositories
 *
 */
class TagRepository extends BaseRepository
{
    /**
     * TagRepository constructor.
     *
     * @param Tag $Tag
     * @internal param Tag $Tag
     */
    public function __construct(Tag $Tag)
    {
        $this->model = $Tag;
    }

    /**
     * @inheritdoc
     */
    public function list(array $params = [], array $relationships = []): LengthAwarePaginator
    {
        $query = $this->newQuery();
        $query->select([
            'tag.id',
            'tag.title',
        ]);
        return $this->processList($query, $params, $relationships);
    }
}
