<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePictureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Adjust based on your authorization logic
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'proof_of_delivery' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    /**
     * Customize the error messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'proof_of_delivery.required' => 'A picture is required.',
            'proof_of_delivery.file' => 'The uploaded file must be a valid file.',
            'proof_of_delivery.mimes' => 'The picture must be a file of type: jpeg, png, jpg, gif.',
            'proof_of_delivery.max' => 'The picture may not be greater than 2MB.',
        ];
    }
}
