@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class='col-md-8'>
            <div class='card'>
                <div class='card-header'>Dashboard</div>
                <div class='card-body'>
                    Witaj na stronie administracyjnej
                    Rola: {{Auth::user()->role}}

                    <div class=card-body>
                        <h4>Użytkownicy</h4>
                        <table>
                            <tr>
                                <th>Email</th>
                                <th>Name</th>
                                <th>Role</th>
                            </tr>
                            @foreach($name as $data)
                            <tr>
                                <td>{{$data->email}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->role}}</td>

                            </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>