@extends ('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <head>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th colspan="3"></th>
                        </tr>
                    </head>
                    <tbody>
                        @foreach ($users as $user)
                            <tr> 
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{route('admin.users.edit' , $user->id)}}</td>
                                <td>{{route}}</td>
                                <td>{{route}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection