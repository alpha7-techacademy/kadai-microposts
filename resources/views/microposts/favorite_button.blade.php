
    @if (Auth::user()->is_favorite($micropost->id))
        {{-- アンフェイバリットボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- Favoriteボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favirite', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif

