<form action="UserController1" method="POST">
    {{@csrf_field()}}
    {{-- {{@errors}} --}}
    {{-- @if(@errors->any()) --}}
    {{-- <ul> --}}
        {{-- @foreach($errors->all() as $error) --}}
        {{-- <li>{{@errors}}</li> --}}
        {{-- @endforeach --}}
    {{-- </ul> --}}
    {{-- @endif --}}

    <input type="text" name="adress" placeholder="Podaj adres", autofocus>
    <input type="email" name="email" placeholder="Podaj email">
    <input type="submit" value="zatwierdz">
</form>