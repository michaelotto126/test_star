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
                    <form action="{!! URL::route('template.store') !!}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="template_id" value="{!! $template->id !!}">
                        <div class="form-group">
                            <div class="row margin-top-xs">
                                <div class="col-sm-3">
                                    <label class="control-label">Title</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" value="{!! $template->title !!}">
                                </div>
                            </div>
                            <div class="row margin-top-xs">
                                <div class="col-sm-3">
                                    <label class="control-label">Slug</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="slug" class="form-control" value="{!! $template->slug !!}">
                                </div>
                            </div>
                        </div>
                        <div class="row margin-bottom-xs">
                            <div class="col-sm-4 col-sm-offset-4 ">
                                <button type="submit" class="btn btn-default margin-bottom-xs" style="margin-left: 34%;" onclick="{!! URL::route('template') !!}">Register</button>
                                <a href="{!! URL::route('template') !!}" class="btn btn-info pull-right margin-bottom-xs">Cancel</a>
                            </div>
                        </div>
                    </form>
               </div>
            </section>
         </div>
     @stop
 @stop