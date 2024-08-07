<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user = auth()->user();
        return $user->hasAnyRole(['admin', 'superadmin']);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'fname' => 'required|min:2',
            'email' => ['required', Rule::unique('users')],
            'phone' => 'string|nullable',
        ];
        
        if ($this->has('password')) {
            $rules['password'] = 'nullable|confirmed|min:5';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'unique' => ':attribute is already used',
            'required' => 'The :attribute field is required.',
        ];
    }


    protected function prepareForValidation()
    {
        if (!$this->has('password')) {
            $randomPassword = Str::random(7);
            $this->merge([
                'password' => $randomPassword
            ]);
            // call event to send user new password
        }
    }

   


}
