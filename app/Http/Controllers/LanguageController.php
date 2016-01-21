<?php

namespace App\Http\Controllers;

use View, Validator, Redirect, Session;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use App\Models\Language as LanguageModel;

class LanguageController extends Controller {
    
    public function index() {
        $param['pageNo'] = 2;
        $param['language'] = LanguageModel :: get();
        
        if (Session::has('alert')) {
        	$param['alert'] = Session::get('alert');
        }
        
        return View::make('languages.index') -> with($param);
    }

    public function create() {
        $param['pageNo'] = 2;
        return View::make('languages.create') -> with($param);
    }
    
    public function store(UserFormRequest $request) {
         $validator = Validator::make($request->all(), $request->rules());
         if ($validator -> fails()) {
             return redirect('create')
                    ->withErrors($validator)
                    ->withInput();
         } else {                          
             if(\Input::has('language_id')) {
                 $id = \Input::get('language_id');
             	 $language = LanguageModel::find($id);
             	 $alert['msg'] = 'Language has been updated successfully';
             } else {
                 $language = new LanguageModel;
                 $alert['msg'] = 'Language has been created successfully';
             }
             $language-> language = \Input::get('language');
             $language-> code = \Input::get('code');
             $language-> save();    
             
             $alert['type'] = 'success';
             return Redirect::route('language')->with('alert', $alert);
        }
    }
    
    public function delete($id) {
        LanguageModel::where('id', $id)->delete();
        $alert['msg'] = 'Language has been deleted successfully';
        $alert['type'] = 'success';
        
        return Redirect::route('language')->with('alert', $alert);
    }

    public function edit($id) {
        $param['pageNo'] = 2;
        $result = LanguageModel::find($id);
        $param['language'] = $result;
        
        return View::make('languages.edit')->with($param);
    }

}