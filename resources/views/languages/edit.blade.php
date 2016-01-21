@extends('layout')
    @section('content')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Create
                </h1>
                <div>
                    @if ($errors -> has())
                        <div class="alert alert-danger alert-dismissibl fade in">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>		
                            @endforeach
                        </div>
                    @endif
                    @if (isset($alert)) 
                        <div class="alert alert-{!! $alert['type'] !!} alert-dismissibl fade in">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <p>
                                {!! $alert['msg'] !!}
                            </p>
                        </div>
                    @endif   
                </div>
            </section>
            <section class="content">
                <div class="box">
                    <div class="box-content with-border">
                        <form action="{!! URL::route('language.store') !!}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="language_id" value="{!! $language->id !!}">
                            <div class="form-group has-feedback">
                                <div class="row margin-top-xs">
                                    <div class="col-sm-3">
                                        <label class="control-label">Language</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" name="language" class="form-control" value="{!! $language->language !!}">
                                    </div>
                                </div>
                                <div class="row margin-top-xs">
                                    <div class="col-sm-3">
                                        <label class="control-label">Code</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" name="code" class="form-control" value="{!! $language->code !!}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row margin-bottom-xs">
                                    <div class="col-sm-4 col-sm-offset-4 ">
                                        <button type="submit" class="btn btn-default margin-bottom-xs" style="margin-left:" >Register</button>
                                        <a href="{!! URL::route('language') !!}" class="btn btn-info pull-right margin-bottom-xs" >Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
               </div>
            </section>
          </div>
      @stop
 @stop
