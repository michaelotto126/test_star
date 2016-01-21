<?php 
namespace App\Http\Requests;
use Response;
use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest_template extends FormRequest {

    public function rules(){
        return [
                'title' => 'required',
                'slug'     => 'required'
                ];
    }

    public function authorize()
    {
        return true;
    }
}