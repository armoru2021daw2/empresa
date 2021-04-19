@extends('disseny')

@section('content')

<h1>Llista d'empleats</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td># ID</td>
          <td>Nom Usuari</td>
          <td>Contrassenya</td>
          <td>Nom</td>
          <td>Cognoms</td>
          <td>Email</td>
          <td>Telèfon</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($usuari as $usu)
        <tr>
            <td>{{$empl->id}}</td>
            <td>{{$empl->nomsusuari}}</td>
            <td>{{$empl->contra}}</td>
            <td>{{$empl->nom}}</td>
            <td>{{$empl->cognoms}}</td>
            <td>{{$empl->email}}</td>
            <td>{{$empl->telf}}</td>
            <td class="text-left">
                <a href="{{ route('usuari.edit', $usu->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('usuari.destroy', $usu->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<br><a href="{{ url('usuaris/create') }}">Accés directe a la vista de creació d'usuaris</a>
@endsection