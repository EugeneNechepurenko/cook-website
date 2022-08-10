<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

/**
 * Class CreateRecipeRequest
 *
 * @package App\Http\Requests
 */
class CreateRecipeRequest extends Request
{
	
	
	/**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|unique:recipes',
        ];
    }
	
	
}
