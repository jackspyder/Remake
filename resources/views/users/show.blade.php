@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Account Details</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-1">

                            <img class="img-circle" width="150" height="150"
                                 src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg"/>
                        </div>
                        <div class="" col-md-4>
                            <ul class="list">
                                <li><b>User ID: </b>{{ $user->id }}</li>
                                <li><b>Username: </b> {{ $user->username }}</li>
                                <li><b>Name: </b> {{ $user->name }}</li>
                                <li>
                                    <b>Roles:</b> @foreach($user->roles as $role) {{ $role->role_label }} @endforeach
                                </li>
                            </ul>

                        </div>

                    </div>
                    @if($user->deleted_at == null)
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-primary pull-right">Edit
                            User</a>

                        {{ Form::open(['route' => ['users.destroy', $user->id],'class' => 'pull-left']) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete this User!',['class' => 'btn btn-danger'])}}
                        {{ Form::close() }}
                    @else
                        {{ Form::open(['action' => ['UsersController@restore', $user->id],'class' => 'pull-right']) }}
                        {{ Form::hidden('_method', 'PUT') }}
                        {{ Form::submit('Restore This User',['class' => 'btn btn-primary'])}}
                        {{ Form::close() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
