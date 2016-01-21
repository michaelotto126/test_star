<?php

namespace App\Http\Controllers;

use View, Redirect, Validator, Session;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest_template;
use App\Models\Template as TemplateModel;

class TemplateController extends Controller
{
    public function index() {
        $param['pageNo'] = 3;
        $param['template'] = TemplateModel::get();
        
        if (Session::has('alert')) {
            $param['alert'] = Session::get('alert');
        }
        return View::make('templates.index') -> with($param);
    }

    public function create() {
        $param['pageNo'] = 3;
        return View :: make('templates.create') -> with($param);
    }
                                                                    
    public function store(UserFormRequest_template $request) {
        
        $validator = Validator :: make($request -> all(), $request -> rules());
        if ($validator -> fails()) {
            return redirect('create')
                  ->withErrors($validator)
                  ->withInput();
        } else {
            if(\Input::has('template_id')) {
            	$id = \Input::get('template_id');
            	$template = TemplateModel::find($id);
            	$alert['msg'] = 'Template has been updated successfully';
            } else {
            	$template = new TemplateModel;
            	$alert['msg'] = 'Language has been created successfully';
            }
            
        
            $template-> title = \Input::get('title');
            $template-> slug = \Input::get('slug');
            $template-> save();
       
            $alert['type'] = 'success';
            return Redirect::route('template')->with('alert', $alert);
        }
    }
    
    public function delete($id) {
        TemplateModel::where('id', $id)->delete();
        $alert['msg'] = 'Template has been deleted successfully';
        $alert['type'] = 'success';
        return Redirect::route('template')->with('alert', $alert);
    }
    
    public function edit($id) {
        $param['pageNo'] = 3;
        $result = TemplateModel::find($id);
        $param['template'] = $result;
    
        return View::make('templates.edit')->with($param);
    }
    
    

}