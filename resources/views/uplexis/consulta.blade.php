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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white">Consultar</div>

                <div class="card-body">

                    @if(count($artigos))

                        <table id="empresas" class="table table-striped table-dark" style="width:100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Título</th>
                                <th>Link</th>
                                <th>Pessoa que Capturou</th>
                                <th>Opções</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($artigos as $artigo)
                                <tr>
                                    <td>{{ $artigo->id }}</td>
                                    <td>{{ $artigo->titulo }}</td>

                                    <td>{{ $artigo->link }}</td>

                                    <td>{{ $artigo->usuario->usuario }}</td>

                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img src="/icon_delete.png" title="Excluir" id="removerDado" onclick="deletar({{$artigo->id}})" ></br>
                                             </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    @else
                        <h3>Nenhum artigo cadastrado</h3>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <!-- Scripts -->
    <script type="text/javascript" src="{!! asset('/js/consulta.js') !!}"></script>
@endpush