<?php

namespace Smartosc\LaraBig\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class AppInstallRequest
 * @package Smartosc\LaraBig\Http\Requests
 *
 * @property $code
 * @property $scope
 * @property $context
 */
class AppInstallRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorrize()
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
            'code'=>'required',
            'scope'=>'required',
            'context'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Not enough information was passed to install this app.'
        ];
    }

}
