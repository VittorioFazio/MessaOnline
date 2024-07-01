<x-layout>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div data-aos="fade-up" class="test">ciao</div>
</x-layout>
