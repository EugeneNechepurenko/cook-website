<?php

namespace App\Services;

use App\Models\Recipe;
use App\Repositories\RecipeRepository;

/**
 * Class RecipeService
 *
 * @package App\Services
 */
class RecipeService
{
    /** @var RecipeRepository */
    private $RecipeRepository;

    public function __construct(RecipeRepository $RecipeRepository) {
        $this->RecipeRepository = $RecipeRepository;
    }

    /**
     * @param array $data
     *
     * @return Recipe|false
     * @throws \Exception
     */
    public function create(array $data)
    {
        $response = $this->RecipeRepository->create($data);

        return $response
            ? $response->fresh()
            : false;
    }

    /**
     * @param Recipe $Recipe
     * @param array $data
     * @return Recipe|false
     */
    public function update(Recipe $Recipe, array $data)
    {
        $response = $this->RecipeRepository->update($Recipe->id, $data);

        return $response
            ? $Recipe->fresh()
            : false;
    }
}
