@extends('disseny')

@section('content')

<h1>Aplicació d'administració d'empleats</h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou empleat
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
      <form method="post" action="{{ route('empleats.store') }}">
      <div class="form-group">
                @csrf

                <label for="nif">Nif</label>
                <input type="text" class="form-control" name="nif"/>
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom"/>
            </div>
            <div class="form-group">
                <label for="cognoms">Cognoms</label>
                <input type="text" class="form-control" name="cognoms"/>
            </div>
            <div class="form-group">
                <label for="adreça">Adreça</label>
                <input type="text" class="form-control" name="adreça"/>
            </div>
            <div class="form-group">
                <label for="poblacio">Poblacio</label>
                <input type="text" class="form-control" name="poblacio"/>
            </div>
            <div class="form-group">
                <label for="comarca">Comarca</label>
                <input type="text" class="form-control" name="comarca"/>
            </div>
            <div class="form-group">
                <label for="telfix">Telèfon Fix</label>
                <input type="text" class="form-control" name="telfix"/>
            </div>
            <div class="form-group">
                <label for="telf">Telèfon</label>
                <input type="text" class="form-control" name="telf"/>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email"/>
            </div>
            <div class="form-group">
                <label for="dataingres">Data Ingres</label>
                <input type="text" class="form-control" name="dataingres"/>
            </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('empleats') }}">Accés directe a la Llista d'empleats</a>
@endsection