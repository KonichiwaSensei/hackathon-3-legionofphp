@include('html-start')

<h2>{{ $owner->name }}</h2>

<p>System Id: {{ $owner->id }}</p>
<p>First Name: {{ $owner->first_name }}</p>
<p>Surname: {{ $owner->surname }}</p>
<p>Email: {{ $owner->email }}</p>
<p>Phone: {{ $owner->phone }}</p>

@include('html-end')