
    @extends('dashboard')
    @section('content')
        <span> Ceci est la page des menus du fast food</span>
        @forelse ($images as $image)
            {{-- {{ $menu->image }} --}}
             <img src="{{ Storage::url($image->path) }}" alt=""  width="200" height="200"> 
        @empty
        <span> Il nya pas de menu disponible</span>
        @endforelse
    @endsection
    
