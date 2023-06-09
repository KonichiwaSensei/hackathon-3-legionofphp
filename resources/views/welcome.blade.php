@include('html-start')

<h1>St. Hector's Veterinary Clinic</h1>


<h2>Search for your Animal: {{ $search_term }} </h2>

<form action="/" method="get">
    <input type="text" name="search" value="{{$search_term}}">
    <button>Search</button>
</form>
<br/>

@if ($search_term)

    @foreach ($results as $dog)
    <ul>
        <h2 style="text-decoration: underline">Results {{$dog->id}}:</h2>
        <h4>Animal:</h4>
        <li>Name: <strong>{{$dog->name}}</strong></li>
        <li>Species: <strong>{{$dog->species}}</strong></li>
        <li>Breed: <strong>{{$dog->breed}}</strong></li>
        <li>Age: <strong>{{$dog->age}}</strong></li>
        <li>Weight: <strong>{{$dog->age}}kg</strong></li>
        <h4>Picture:</h4>
        <img src="/images/pets/{{ $dog->path }}" alt="">
        <h4>Owner:</h4>
        <li>Full Name: <strong>{{$dog->first_name}} {{$dog->last_name}}</strong></li>
    </ul>
    @endforeach

@endif

@include('html-end')