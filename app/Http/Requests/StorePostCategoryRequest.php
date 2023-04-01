<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StorePostCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user_roles = Auth::user()->roles->pluck('name')->toArray();
        return in_array('admin', $user_roles);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        
        return [
            'name' => ['required|min:2', Rule::unique('post_categories')],
        ];
    }

    public function messages()
    {
        return [
            'unique' => ':attribute is already used',
            'required' => 'The :attribute field is required.',
        ];
    }
}
