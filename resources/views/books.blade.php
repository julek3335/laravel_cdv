<h3>książki</h3>

<h3>uzytkownicy</h3>
<ul>
    @foreach($data as $book)
    <li>
        {{$book[title]}} {{book[pages]}}
    </li>
    @endforeach
</ul>