@extends('app')

@section('content')
    <div>
        <br><br><br><br>
    </div>
    <div class="container">
        <div class="row">

                <table class="table table-inverse">
                    <th>Nome</th>
                    <th>Cpf</th>
                    <th>Email</th>
                    <th>Telefone</th>

                    <tr>
                        @forelse ($users as $u)

                            <td>{{ $u->nome }}</td>
                            <td>{{ $u->cpf }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->telefone }}</td>


                    </tr>
                    @empty
                        <p>No type_users</p>
                    @endforelse

                </table>
        </div>
    </div>
@endsection