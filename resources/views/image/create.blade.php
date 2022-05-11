@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                   Subir nueva imagen
                </div>
                
        	    <div class="card-body">
                    <form method="POST" action="" enctype="multipart/   form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="image_path" class="col-md-3 col-form-label text-md-right">
                                Imagen
                            </label>
                            <div class="col-md-7">
                                <input id="image_path" type="file" name ="image_path" class="form-control" required>

                                @if($errors->'image_path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image_path') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-3 col-form-label text-md-right">
                                Descripcion
                            </label>
                            <div class="col-md-7">
                                <input id="description" type="file" name ="image_path" class="form-control" required>

                                @if($errors->'image_path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image_path') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection