<?php 
namespace App\Http\Requests;
use Response;
use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest {

    public function rules(){
        return [
                'language' => 'required',
                'code'     => 'required'
                ];
    }

    public function authorize()
    {
        return true;
    }
}