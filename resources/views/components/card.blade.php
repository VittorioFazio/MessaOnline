<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($videogame->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$videogame->title}}</h5>
      <p class="card-text">{{$videogame->description}}</p>
      <p class="card-text">{{$videogame->category}}</p>
      @if (Route::currentRouteName() === "videogames.index")
      <a href="{{route('videogames.show', compact('videogame'))}}" class="btn btn-primary">Dettaglio</a>    
      <a href="{{route('videogames.edit', compact('videogame'))}}" class="btn btn-primary">Modifica</a>
      <form action="{{route('videogames.destroy', compact('videogame'))}}" method="post">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger" type="submit">Cancella</button>
      </form>  
      @else
      <a href="{{route('videogames.index')}}" class="btn btn-warning">Torna indietro</a>
      @endif
    </div>
</div>