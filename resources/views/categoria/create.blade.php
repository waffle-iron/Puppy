@extends('master')

@section('content')
    <<div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Nova Categoria</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <form class="form-horizontal form-label-left" action="novo" method="POST">
                            {{ method_field('POST') }}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            @if ($errors->has('nome'))
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome  </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="nome" name="nome" class="form-control col-md-7 col-xs-12 parsley-error" value="{{ old('nome') }}">
                                    </div>
                                    <ul class="parsley-errors-list filled" id="parsley-id-20">
                                        <li class="parsley-required">{{ $errors->first('nome') }}</li>
                                    </ul>
                                </div>
                            @else
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome  </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="nome" name="nome" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                            @endif
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4 col-sm-offset-4">
                                    <a href="{{url('categorias')}}" class="btn btn-danger">Cancelar</a>
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
