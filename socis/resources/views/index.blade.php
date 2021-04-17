@extends('disseny')

@section('content')

<h1>Llista de socis</h1>
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
          <td>Nif</td>
          <td>Nom</td>
          <td>Cognoms</td>
          <td>Adreça</td>
          <td>Població</td>
          <td>Comarca</td>
          <td>Telèfon Fix</td>
          <td>Telèfon</td>
          <td>Email</td>
          <td>Data Alta</td>
          <td>Quota</td>
          <td>Aportació</td>
        </tr>
    </thead>
    <tbody>
        @foreach($soci as $soc)
        <tr>
            <td>{{$empl->id}}</td>
            <td>{{$empl->nif}}</td>
            <td>{{$empl->nom}}</td>
            <td>{{$empl->cognoms}}</td>
            <td>{{$empl->adreça}}</td>
            <td>{{$empl->poblacio}}</td>
            <td>{{$empl->comarca}}</td>
            <td>{{$empl->telfix}}</td>
            <td>{{$empl->telf}}</td>
            <td>{{$empl->email}}</td>
            <td>{{$empl->datalta}}</td>
            <td>{{$empl->quota}}</td>
            <td>{{$empl->aportacio}}</td>
            <td class="text-left">
                <a href="{{ route('socis.edit', $soc->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('socis.destroy', $soc->id)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('socis/create') }}">Accés directe a la vista de creació de socis</a>
@endsection