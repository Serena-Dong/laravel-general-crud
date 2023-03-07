 @vite('resources/js/app.js')


<div class="container show d-flex justify-content-between g-3 align-items-center mt-5">
   <img src="{{$card->img}}" class="me-5">

   <div class="descriptions">
        <h3><span class="text-success">Nome: </span > {{$card->name_card}}</h3>
        <h3><span class="text-success">Costo:</span > {{$card->coast}}</h3>
        <h3><span class="text-success">Tipo:</span > {{$card->type_card}}</h3>
        <h3><span class="text-success">Edizione:</span > {{$card->ed}}</h3>
        <h3><span class="text-success">Effetto: </span >{{$card->effect}}</h3>
        <h3><span class="text-success">Descrizione: </span >{{$card->text}}</h3>
        <h3><span class="text-success">Forza:</span > {{$card->force}}</h3>
        <h3><span class="text-success">Costituzione:</span > {{$card->costitution}}</h3>
   
   </div>

   
   
</div>

<div class="container mt-5">
    <a href="{{route('cards.edit', $card['id'])}}" class="btn btn-success">modifica</a>
    <a href="{{route('index')}}" class="btn btn-primary">indietro</a>
    <a href="TODO" class="btn btn-danger">Elimina</a>
</div>