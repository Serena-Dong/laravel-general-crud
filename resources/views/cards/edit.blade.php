@vite('resources/js/app.js')

<div class="container py-3">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <p class="m-0">Edit data</p>
          <a href="{{ route('cards.show', $cards['id']) }}" class="btn btn-primary btn-sm">Indietro</a>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('cards.update', $cards['id']) }}">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine carta</label>
                        <input type="text" class="form-control" id="img" placeholder="Insert img" name="img" required value="{{old('img', $cards->img)}}">
                      </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="name_card" class="form-label">Nome della carta</label>
                        <input type="text" class="form-control" id="name_card" placeholder="Nome dell'uovo" name="name_card" required value="{{old('name_card', $cards->name_card)}}">
                      </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="coast" class="form-label">Costo</label>
                        <input type="text" class="form-control" id="coast" name="coast" required value="{{old('coast', $cards->coast)}}">
                      </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="type_card" class="form-label">Tipo della carta</label>
                        <input type="text" class="form-control" id="type_card" name="type_card"  value="{{old('type_card', $cards->type_card)}}">
                      </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="ed" class="form-label">Edizione</label>
                        <input type="text" class="form-control" id="ed" name="ed" required value="{{old('ed', $cards->ed)}}">
                      </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="effect" class="form-label">Effetto</label>
                        <textarea name="effect" id="effect" rows="2" class="form-control">"{{old('effect', $cards->effect)}}"</textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="text" class="form-label">testo</label>
                        <textarea name="text" id="text" rows="2" class="form-control">"{{old('text', $cards->text)}}"</textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="force" class="form-label">Forza</label>
                        <input type="text" class="form-control" id="force" name="force" required value="{{old('force', $cards->force)}}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="costitution" class="form-label">Costituzione</label>
                        <input type="text" class="form-control" id="costitution" name="costitution" required value="{{old('costitution', $cards->costitution)}}">
                    </div>
                </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Modifica</button>
            </div>
        </form>
    </div>
</div>