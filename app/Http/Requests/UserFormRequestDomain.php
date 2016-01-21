<?php 
namespace App\Http\Requests;
use Response;
use Illuminate\Foundation\Http\FormRequest;

class UserFormRequestDomain extends FormRequest {

    public function rules(){
        return [
                'language_id'   => 'required',
                'template_id'   => 'required',
                'name'          => 'required',
                'description'   => 'required',
                'is_deleted'       => 'required'
                ];
    }

    public function authorize()
    {
        return true;
    }
}
