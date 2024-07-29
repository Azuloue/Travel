<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'post.name' => 'required|string|max:30',
            'post.body' => 'max:400',
            'post.address' => 'max:200',
            'post.country_id' => 'required',
            'tags_array' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'post.name.required' => 'Spot name is required.',
            'post.body.max' => 'Description must be up to 400 charcters.',
            'post.address.max' => 'Address must be up to 200 charcters.',
            'post.country_id' => 'Country is required.',
            'tags_array.required' => 'Check at least one tag.'
            
        ];
    }
}
