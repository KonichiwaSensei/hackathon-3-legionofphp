@include('html-start')

<?php 
if (!isset($animal)){
    $animal = $visit->animal;
}
?>

@if ($visit->id)
    <form action="{{ route('visits.delete', $visit->id)}}" method="post">
        @method('delete')
        @csrf
        <button>Delete this visit</button>
        <br />
    </form>
    <br />

    <form action="{{ route('visits.update', $visit->id)}}" method="post">
        @method('put')
    @else
        <form action="{{ route('visits.store')}}" method="post">
        @endif
        @csrf
        <input id="animal_id" name="animal_id" value="{{$animal->id}}" type="hidden" />
        <br />
        <label for="report">Report:</label>
        <input id="report" name="report" value="{{$visit->report}}" type="textfield" />
        <br />
        <button>Submit</button>
        <br />
        </form>
        <br />


@include('html-end')