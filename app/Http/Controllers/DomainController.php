<?php

namespace App\Http\Controllers;

use View, Validator, Session, Redirect;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequestDomain;
use App\Models\Domain as DomainModel;
use App\Models\Language as LanguageModel;
use App\Models\Template as TemplateModel;

class DomainController extends Controller
{
    public function index() {
        $param['domain'] = DomainModel::get();
        $param['pageNo'] = 1;
        if (Session::has('alert')) {
            $param['alert'] = Session::get('alert');
        }
        
        return View::make('domains.index')->with($param);
    }
    
    public function create() { 
        $param['pageNo'] = 1;
        $param['language'] = LanguageModel::all();
        $param['template'] = TemplateModel::all();
        return View::make('domains.create')->with($param);
    }
    
    public function store(UserFormRequestDomain $request) {
        $validator = Validator::make($request->all(), $request->rules());
        
        if ($validator->fails()) {
        return redirect('create')
        ->withErrors($validator)
        ->withInput();
        } else {
            if(\Input::has('domain_id')) {
            	$id = \Input::get('domain_id');
            	$domain = DomainModel::find($id);
            	$alert['msg'] = 'Domain has been updated successfully';
            } else {
                $domain = new DomainModel;
                $alert['msg'] = 'Domain has been created successfully';
            }
            
            $domain->user_id = \Session::get('user_id');
            $domain->language_id = \Input::get('language_id');
            $domain->template_id = \Input::get('template_id');
            $domain->name = \Input::get('name');
            $domain->description = \Input::get('description');
            $domain->is_deleted = \Input::get('is_deleted');
    
            $domain->save();
            
            $alert['type'] = 'success';
            return Redirect::route('domain')->with('alert', $alert);
        }
    	
    }
    
    public function delete($id) {
        DomainModel::find($id)->delete();
        $alert['msg'] = 'Domain has been deleted successfully';
        $alert['type'] = 'success';
        
        return Redirect::route('domain')->with('alert', $alert);
    }
    
    public function edit($id) {
        $param['pageNo'] = 1;
        $result = DomainModel::find($id);
        $param['domain'] = $result;
        $param['language'] = LanguageModel::all();
        $param['template'] = TemplateModel::all();
    
        return View::make('domains.edit')->with($param);
    }

}