<h3> Uxytkownicy </h3>
@foreach($users as $user)
          <tr>
              <td>imie: {{$user->name}} </td>
              <td>nazwisko: {{$user->surname}} </td>
              <td>nazwisko: {{$user->nazwa}} </td>

              <br>
          </tr>
         @endforeach

<h3> Uxytkownicy powyzej 200</h3>

@foreach($userOver200 as $user)
          <tr>
              <td>imie: {{$user->name}} </td>
              <td>nazwisko: {{$user->surname}} </td>
              <td>wzrost: {{$user->height}} cm </td>
                <br>
          </tr>
         @endforeach
