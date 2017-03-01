@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Member List:
                    </div>

                    <div class="panel-body">
                        @foreach($users as $user)
                            <div>
                                <ul class="list-group">
                                    <a href="/members/{{ $user->id }}" class="list-group-item">
                                        <h4 class="list-group-item-heading">
                                            {{ $user->username }}</h4>
                                    </a>
                                </ul>
                            </div>
                        @endforeach

                    </div>
                </div>
                <a href="#" class="btn btn-primary pull-right">Create Member</a>
            </div>
        </div>
@endsection
