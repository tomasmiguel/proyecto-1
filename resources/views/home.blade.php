@extends('main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido {{ Auth::user()->name }}!  
                </div>
            </div>

            <br>
            <a href="{{ action('ListasController@index') }}" class="btn btn-primary">Proceder</a><br>
        </div>
    </div>
</div>
@endsection
