<?php

namespace App\Services;

use App\Models\Category;
use App\Repositories\CategoryRepository;

/**
 * Class CategoryService
 *
 * @package App\Services
 */
class CategoryService
{
    /** @var CategoryRepository */
    private $CategoryRepository;

    public function __construct(CategoryRepository $CategoryRepository) {
        $this->CategoryRepository = $CategoryRepository;
    }

    /**
     * @param array $data
     *
     * @return Category|false
     * @throws \Exception
     */
    public function create(array $data)
    {
        $response = $this->CategoryRepository->create($data);

        return $response
            ? $response->fresh()
            : false;
    }

    /**
     * @param Category $Category
     * @param array $data
     * @return Category|false
     */
    public function update(Category $Category, array $data)
    {
        $response = $this->CategoryRepository->update($Category->id, $data);

        return $response
            ? $Category->fresh()
            : false;
    }
}
