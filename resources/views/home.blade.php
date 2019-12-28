@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>You are logged in!</h5>

                    <ul class="row" id="dashboardLinks">
                        <li class="col-xs-6 zero-padding">
                            <a href="{{ url('/flicks') }}" id="withPadding">
                            <i class="fas fa-film fa-5x"></i> Flicks</a>
                        </li>
                        <li class="col-xs-6">
                            <a href="{{ url('/binge') }}">
                            <i class="fas fa-eye fa-5x"></i>Binge</a>
                        </li>
                        {{-- <br> --}}
                        <li class="col-xs-6 zero-padding">
                            <a href="{{ url('/discover') }}">
                            <i class="far fa-star fa-5x"></i>Discover</a>
                        </li>
                        <li class="col-xs-6">
                            <a href="{{ url('/profile') }}">
                            <i class="fas fa-user-circle fa-5x"></i></i>Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
