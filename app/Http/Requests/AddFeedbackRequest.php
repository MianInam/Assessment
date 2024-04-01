<?php

namespace App\Http\Requests;

use App\Traits\CommonTrait;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AddFeedbackRequest extends FormRequest
{
    use CommonTrait;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        if ($this->expectsJson()) {
            throw new HttpResponseException($this->sendError($validator->errors(), null));
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "user_id"=>"required|exists:users,id",
            "title"=>"required|max:200",
            "description"=>"required",
            "category"=>"required|max:200",
        ];
    }
}
