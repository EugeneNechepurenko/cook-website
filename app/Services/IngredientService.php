<?php

namespace App\Services;

use App\Models\Ingredient;
use App\Repositories\IngredientRepository;

/**
 * Class IngredientService
 *
 * @package App\Services
 */
class IngredientService
{
    /** @var IngredientRepository */
    private $IngredientRepository;

    public function __construct(IngredientRepository $IngredientRepository) {
        $this->IngredientRepository = $IngredientRepository;
    }

    /**
     * @param array $data
     *
     * @return Ingredient|false
     * @throws \Exception
     */
    public function create(array $data)
    {
        $response = $this->IngredientRepository->create($data);

        return $response
            ? $response->fresh()
            : false;
    }

    /**
     * @param Ingredient $Ingredient
     * @param array $data
     * @return Ingredient|false
     */
    public function update(Ingredient $Ingredient, array $data)
    {
        $response = $this->IngredientRepository->update($Ingredient->id, $data);

        return $response
            ? $Ingredient->fresh()
            : false;
    }
}
