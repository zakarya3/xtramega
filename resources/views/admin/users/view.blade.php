@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h4>User details</h4>
                  <a href="{{ url('users') }}" class="btn btn-primary">Utilisateurs</a>
                  <hr>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label for="">Rôle</label>
                            <div class="p-2 border">{{ $user->role_as == '0' ? 'Utilisateur' : 'Administrateur' }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Nom</label>
                            <div class="p-2 border">{{ $user->name }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Email</label>
                            <div class="p-2 border">{{ $user->email }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Phone</label>
                            <div class="p-2 border">{{ $user->phone }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Adresse</label>
                            <div class="p-2 border">{{ $user->address }}</div>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
</div>
    
@endsection