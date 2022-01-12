@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            Strona administracyjna
          </div>
          <div class="card-body">
            Strona zalogowanego użytkownika z rolą: Admin<br>
            Rola użytkownika: {{Auth::user()->role}}
            <table>
                <tr>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Role</th>
                </tr>
                <tr>
                    @foreach($name as $user)
                </tr>
                <td>{{$user->email}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->role}}</td>
            </tr>
                    @endforeach
                </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
