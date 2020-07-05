@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-dark">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <p> Você está logado!<br>
                     
                    Escolha uma das opções no menu superior<br>
                   </p>

<div class="card-group">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><b>Capturar</b></h5>
      <p class="card-text">Permite capturar artigos do blog da UpLexis</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><b>Consultar</b></h5>
      <p class="card-text">Permite consultar os artigos capturados (artigos repetidos não são inseridos novamente)</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><b>Registrar</b></h5>
      <p class="card-text">Permite criar um novo usuário</p>
    </div>
  </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
