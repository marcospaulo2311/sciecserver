@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">

                <table class="table table-inverse">
                    <th>Nome </th>
                    <th>Descricao </th>
                    <th>Telefone </th>

                    <tr>
                        @forelse ($courses as $c)

                            <td>{{ $c->nome }}</td>
                            <td>{{ $c->descricao }}</td>
                            <td>{{ $c->telefone }}</td>

                    </tr>
                    @empty
                        <p>No users</p>
                    @endforelse

                    </table>

        </div>
    </div>
@endsection
