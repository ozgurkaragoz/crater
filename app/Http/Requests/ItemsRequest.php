<?php
namespace Crater\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemsRequest extends FormRequest
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
            'name' => [
                'required'
            ],
            'completed_at' => [
                'nullable',
            ],
            'price' => [
                'required'
            ],
            'unit_id' => [
                'nullable'
            ],
            'description' => [
                'nullable'
            ]
        ];
    }
}
