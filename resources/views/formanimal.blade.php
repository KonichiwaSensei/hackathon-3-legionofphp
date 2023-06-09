@include('html-start')

@if ($animal->id)
    <form action="{{ route('animals.delete', $animal->id)}}" method="post">
        @method('delete')
        @csrf
        <button>Delete this animal</button>
        <br />
    </form>
    <br />

    <form action="{{ route('animals.update', $animal->id)}}" method="post">
        @method('put')
    @else
        <form action="{{ route('animals.store')}}" method="post">
        @endif
        @csrf
        <label for="name">Name:</label>
        <input id="name" name="name" value="{{$animal->name}}" type="text" />
        <br />
        <label for="species">Species:</label>
        <input id="species" name="species" value="{{$animal->species}}" type="text" />
        <br />
        <label for="breed">Breed:</label>
        <input id="breed" name="breed" value="{{$animal->breed}}" type="text" />
        <br />
        <label for="age">Age:</label>
        <input id="age" name="age" value="{{$animal->age}}" type="text" />
        <br />
        <label for="weight">Weight:</label>
        <input id="weight" name="weight" value="{{$animal->weight}}" type="text" />
        <br />
        <button>Submit</button>
        <br />
        </form>
        <br />


@include('html-end')