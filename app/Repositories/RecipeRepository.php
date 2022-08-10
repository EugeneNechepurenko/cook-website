<?php

namespace App\Repositories;

use App\Models\Recipe;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\QueryException;

/**
 * Class RecipeRepository
 *
 * @package App\Repositories
 *
 */
class RecipeRepository extends BaseRepository
{
    /**
     * RecipeRepository constructor.
     *
     * @param Recipe $Recipe
     * @internal param Recipe $Recipe
     */
    public function __construct(Recipe $Recipe)
    {
        $this->model = $Recipe;
    }

    /**
     * @param array $data
     *
     * @return Recipe|false
     */
    public function create(array $data)
    {
        $model = $this->model->newInstance();
        $model->title = $data['title'];
        $model->total_time = $data['total_time'];
        $model->active_time = $data['active_time'];
        $model->yields = $data['yields'];
        $model->kcal = $data['kcal'];
        $model->price = $data['price'];
        $model->description = $data['description'];
        $model->img = $data['img'];

        try {
            $model->save();
        } catch (QueryException $e) {
            return false;
        }
        return $model;
    }

    /**
     * Update model
     *
     * @param int   $id
     * @param array $data
     *
     * @return bool
     */
    public function update(int $id, array $data)
    {
        return $this->find($id)->update($data);
    }

    /**
     * @inheritdoc
     */
    public function list(array $params = [], array $relationships = []): LengthAwarePaginator
    {
        $query = $this->newQuery();
        $query->select([
            'recipes.id',
            'recipes.title',
            'recipes.slug',
            'recipes.total_time',
            'recipes.active_time',
            'recipes.yields',
            'recipes.kcal',
            'recipes.price',
            'recipes.description',
            'recipes.img',
        ]);
        return $this->processList($query, $params, $relationships);
    }

    public function findByCategory(array $params = [], array $relationships = []): LengthAwarePaginator
    {
        $query = $this->newQuery();
		$query->select(['recipes.*']);
		$query->where('recipes.category_id','=',$params['category_id']);
//		$relationships[] = 'category';
//		$params['order_by'] = 'position';
//		$params['order'] = 'asc';
		
		return $this->processList($query, $params, $relationships);
    }
//	public function listByGroupId(array $params = [], array $relationships = []): LengthAwarePaginator
//	{
//		$query = $this->newQuery();
//		$query->select([
//						   'times.id',
//						   'times.worker_id',
//						   'times.group_id',
//						   'times.position',
//						   'times.d1_from',
//						   'times.d1_to',
//						   'times.d2_from',
//						   'times.d2_to',
//						   'times.d3_from',
//						   'times.d3_to',
//						   'times.d4_from',
//						   'times.d4_to',
//						   'times.d5_from',
//						   'times.d5_to',
//						   'times.d6_from',
//						   'times.d6_to',
//						   'times.d7_from',
//						   'times.d7_to',
//						   'times.description',
//					   ]);
//		$query->where('times.group_id','=',$params['group_id']);
//		$relationships[] = 'category';
////		$relationships[] = 'difficulty';
////		$params['order_by'] = 'position';
////		$params['order'] = 'asc';
//		return $this->processList($query, $params, $relationships);
//	}
}
