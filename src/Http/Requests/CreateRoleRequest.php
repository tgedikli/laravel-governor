<?php namespace GeneaLabs\LaravelGovernor\Http\Requests;

use GeneaLabs\LaravelGovernor\Role;
use Illuminate\Foundation\Http\FormRequest as Request;
use Illuminate\Support\Facades\Auth;

class CreateRoleRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->can('create', (new Role()));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }
}
