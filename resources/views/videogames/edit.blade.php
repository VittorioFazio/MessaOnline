<x-layout>
    <h1 class="text-center">Modifica il videogioco</h1>
    <div class="container">
        <form method="POST" action="{{ route('videogames.update', compact('videogame')) }}" enctype="multipart/form-data">
            {{-- @method sovrascrive il metodo http originario (POST in questo caso) --}}
            @method('PUT')
            {{-- ^ spoofing --}}
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $videogame->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ $videogame->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" name="category" class="form-control" id="category"
                    value="{{ $videogame->category }}">
            </div>
            <div class="mb-3">
                <div>
                    <span>Immagine attuale:</span>
                    <img width="200" height="200" src="{{ Storage::url($videogame->img) }}" alt="">
                </div>
                <label for="img" class="form-label">Image</label>
                <input type="file" name="img" class="form-control" id="img">
            </div>
            <button type="submit" class="btn btn-dark">Inserisci Gioco</button>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</x-layout>
