<?php

namespace Smartosc\LaraBig\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class AppLoadRequests
 *
 * @property $signed_payload
 */
class AppLoadRequest extends FormRequest
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
            'signed_payload' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Please load app from BigCommerce manage dashboard.'
        ];
    }
}
