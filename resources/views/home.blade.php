@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Dashboard</h3></div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h4>
                    <div>
                        Birthdate : 
                       {{ Auth::user()->birthdate }}
                    </div>
                        </h4>
                     <h4>
                    <div>
                        Country : 
                       {{ Auth::user()->country }}
                    </div>
                         </h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
