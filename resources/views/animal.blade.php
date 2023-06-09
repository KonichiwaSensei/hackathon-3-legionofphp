@include('html-start')

    <p>Animal Id: {{$animal->id}}</p>
    <p>Animal Name: {{$animal->name}}</p>
    <p>Animal Breed: {{$animal->breed}}</p>
    <p>Animal Species: {{$animal->species}}</p>
    <p>Animal Age: {{$animal->age}}</p>
    <p>Animal Weight: {{$animal->weight}}</p>
   
    <a href="/visits/create/{{$animal->id}}"><button>New Visit</button></a>
    

@include('html-end')
    