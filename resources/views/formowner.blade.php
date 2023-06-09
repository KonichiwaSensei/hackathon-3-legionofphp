@include('html-start')

@if ($owner->id)
    <form action="{{ route('owners.delete', $owner->id)}}" method="post">
        @method('delete')
        @csrf
        <button>Delete this owner</button>
        <br />
    </form>
    <br />

    <form action="{{ route('owners.update', $owner->id)}}" method="post">
        @method('put')
    @else
        <form action="{{ route('owners.store')}}" method="post">
        @endif
        @csrf
        <label for="first_name">First Name:</label>
        <input id="first_name" name="first_name" value="{{$owner->first_name}}" type="text" />
        <br />
        <label for="surname">Surname:</label>
        <input id="surname" name="surname" value="{{$owner->surname}}" type="text" />
        <br />
        <label for="email">Email:</label>
        <input id="email" name="email" value="{{$owner->email}}" type="text" />
        <br />
        <label for="phone">Phone:</label>
        <input id="phone" name="phone" value="{{$owner->phone}}" type="text" />
        <br />
        <label for="address">Address:</label>
        <input id="address" name="address" value="{{$owner->address}}" type="text" />
        <br />
        <button>Submit</button>
        <br />
        </form>
        <br />


@include('html-end')