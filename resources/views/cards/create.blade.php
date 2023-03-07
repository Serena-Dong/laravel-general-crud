@vite('resources/js/app.js')

<section class="add-form py-5 text-center">
    <a class='btn btn-primary mb-3' href="{{route('index')}}">Torna Indietro</a>
    <h2 class="mb-4">AGGIUNGI UNA NUOVA CARTA</h2>
    @if ($errors->any())
        <div class="col-12 alert mb-3 container p-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="mb-1">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="container d-flex flex-wrap" method="POST" action="">
        @csrf
        <div class="col-3 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="name_card">Nome Carta</label>
            <input class="p-2 text-center" type="text" id='name_card' name="name_card" value="{{ old('name_card') }}">
        </div>
        <div class="col-3 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="coast">Coast</label>
            <input class="p-2 text-center" type="text" id='coast' name="coast" value="{{ old('coast') }}">
        </div>
        <div class="col-3 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="img">Url Immagine</label>
            <input class="p-2 text-center" type="url" id='img' name="img" value="{{ old('img') }}">
        </div>
        <div class="col-3 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="type_card">Tipo di Carta</label>
            <input class="p-2 text-center" type="text" id='type_card' name="type_card" value="{{ old('type_card') }}">
        </div>
        <div class="col-4 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="ed">ED</label>
            <input class="p-2 text-center" type="text" id='ed' name="ed" value="{{ old('ed') }}">
        </div>
        <div class="col-4 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="force">Forza</label>
            <input class="p-2 text-center" name="force" id="force">{{ old('force') }}
        </div>
        <div class="col-4 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="costitution">Constitution</label>
            <input class="p-2 text-center" name="costitution" id="costitution" >{{ old('costitution') }}
        </div>
        <div class="col-6 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="effect">Effetti</label>
            <textarea class="w-50" name="effect" id="effect" rows="5">{{ old('effect') }}</textarea>
        </div>
        <div class="col-6 d-flex flex-column align-items-center mb-3">
            <label class="mb-1" for="text">Testo</label>
            <textarea class="w-50" name="text" id="text" rows="5">{{ old('text') }}</textarea>
        </div>

        <div class="col-12 d-flex justify-content-center mt-3">
            <button class="btn btn-success" type="submit">Aggiungi</button>
        </div>
    </form>
</section>