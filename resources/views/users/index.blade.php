@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading tall-header"><b>Users</b>
            <button type="button" class="btn btn-default pull-right" data-toggle="collapse" data-target="#usersPanel">
                <span id="invCaret" class="fa fa-caret-down"></span>
            </button>
        </div>
        <div id="usersPanel" class="panel-body in">
            @foreach($users as $user)
                @if($user->deleted_at == null)
                <div>
                    <ul class="list-group">
                        <a href="/users/{{ $user->id }}" class="list-group-item">
                            <h4 class="list-group-item-heading">
                                {{ $user->username }}</h4>
                        </a>
                    </ul>
                </div>
                @endif
            @endforeach
            <a href="{{ url('/users/create') }}" class="btn btn-primary pull-right">Add User</a>
        </div>

    </div>

    <div class="panel panel-default">
        <div class="panel-heading tall-header"><b>Deleted Users</b>
            <button type="button" class="btn btn-default pull-right" data-toggle="collapse" data-target="#usersTrash">
                <span id="invCaret" class="fa fa-caret-down"></span>
            </button>
        </div>
        <div id="usersTrash" class="panel-body collapse">
            @foreach($users as $user)
                @if($user->deleted_at != null)
                <div>
                    <ul class="list-group">
                        <a href="/users/{{ $user->id }}" class="list-group-item">
                            <h4 class="list-group-item-heading">
                                {{ $user->username }}</h4>
                        </a>
                    </ul>
                </div>
                @endif
            @endforeach
        </div>

    </div>
@endsection
