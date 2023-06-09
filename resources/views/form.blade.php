@include('html-start')

@if (false)
    <form action="" method="post">
        @method('delete')
        @csrf
        <button>Delete this animal</button>
        <br />
    </form>
    <br />

    <form action="" method="post">
        @method('put')
    @else
        <form action="" method="post">
        @endif
        @csrf
        <label for="name">Name:</label>
        <input id="name" name="name" value="" type="text" />
        <br />
        <label for="year">Year:</label>
        <input id="year" name="year" value="" type="text" />
        <br />
        <button>Submit</button>
        <br />
        </form>
        <br />


@include('html-end')