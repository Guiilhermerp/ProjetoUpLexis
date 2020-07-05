@extends('layouts.app')
@push('head')
    <!-- Styles -->
    <style>
        .center {
            margin: auto;
            width: 50%;
            padding: 10px;
        }
    </style>
    <!-- Scripts -->

@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header bg-dark text-white">Capturar</div>

                <div class="card-body">
                    <form action="fazer/capturar" method="post" class="">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="cap_text" name="cap_text" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-2 center">
                                <button type="submit" value="Submit" class="btn btn-lg btn-secondary" >Capturar</button>
                            </div>

                        </div>
                    </form>
                  <!--  <div class="col-md-2 center">
                        <button id="btn_capturar" class="btn btn-lg btn-info" >Capturar com AJAX</button>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <!-- Scripts -->
    <script type="text/javascript" src="{!! asset('/js/captura.js') !!}"></script>
@endpush