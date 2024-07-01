<x-layout>
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
    <div class="row">
        @foreach ($videogames as $videogame)
            <div class="col-12 col-md-4 mb-3">
                <x-card :videogame="$videogame">
                </x-card>
            </div>
        @endforeach
    </div>
</x-layout>
