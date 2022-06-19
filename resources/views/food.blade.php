
    @extends('dashboard')
    @section('content')
        <span> Ceci est la page des menus du fast food</span>
        @forelse ($menus as $menu)
            {{ $menu->titre }}
        @empty
        <span> Il nya pas de menu disponible</span>
        @endforelse
    @endsection
    
