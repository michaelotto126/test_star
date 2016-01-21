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
                            @foreach ($errors -> all() as $error)
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
               <div class="box box-info">
                   <form action="{!! URL::route('domain.store') !!}" method="post">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       @foreach ([
                            'name' => 'Name',
                            'description' => 'Description',
                            'is_deleted' => 'deleted',
                            'language_id' => 'Language',
                            'template_id' => 'Template',
                        ] as $key => $value)
                        <div class="form-group">
                            <div class="row margin-top-xs">
                                <div class="col-sm-3">
                                    <label class="col-sm-2 control-label">{!! Form::label($key, $value) !!}</label>
                                </div>
                                <div class="col-sm-8">
                                    @if ($key === 'language_id')                        
                                        {!! Form::select($key
                                           , $language->lists('language', 'id')
                                           , null
                                           , array('class' => 'form-control')) !!}
                                    @elseif ($key === 'template_id')
                                        {!! Form::select($key
                                           , $template->lists('title', 'id')
                                           , null
                                           , array('class' => 'form-control')) !!}            
                                    @else
                                        {!! Form::text($key, null, ['class' => 'form-control']) !!}
                                    @endif
                                </div>
                             </div>
                        </div>
                        @endforeach
                        <div class="row margin-bottom-xs">
                            <div class="col-sm-4 col-sm-offset-4">
                                <button type="submit" class="btn btn-default margin-bottom-xs" style="margin-left: 34%;" >Register</button>
                                <a href="{!! URL::route('domain') !!}" class="btn btn-info pull-right margin-bottom-xs">Cancel</a>
                            </div>
                        </div>
                     </form>
                </div>
            </section>
          </div>
      @stop
 @stop
