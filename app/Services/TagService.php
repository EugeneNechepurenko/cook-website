<?php

namespace App\Services;

use App\Models\Tag;
use App\Repositories\TagRepository;

/**
 * Class TagService
 *
 * @package App\Services
 */
class TagService
{
    /** @var TagRepository */
    private $TagRepository;

    public function __construct(TagRepository $TagRepository) {
        $this->TagRepository = $TagRepository;
    }

    /**
     * @param array $data
     *
     * @return Tag|false
     * @throws \Exception
     */
    public function create(array $data)
    {
        $response = $this->TagRepository->create($data);

        return $response
            ? $response->fresh()
            : false;
    }

    /**
     * @param Tag $Tag
     * @param array $data
     * @return Tag|false
     */
    public function update(Tag $Tag, array $data)
    {
        $response = $this->TagRepository->update($Tag->id, $data);

        return $response
            ? $Tag->fresh()
            : false;
    }
}
