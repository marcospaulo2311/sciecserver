@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal" >
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Cadastrar Curso</legend>

                       @include('form._form1');
                       @include('curso._form');

                    </fieldset>
                </form>

            </div>
        </div>
    </div>
@endsection
