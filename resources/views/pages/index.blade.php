<?php

use App\Models\News;
use Illuminate\Contracts\View\View;
use function Laravel\Folio\render;

render(function (View $view) {
    return $view->with('news', News::take(5)->get());
});
?>

<x-layouts.app>
    <h1>Sirana</h1>
    <h2>Berita</h2>
    @foreach($news as $berita)
        <a href="{{ route('news.show', ['news' => $berita]) }}">{{ $berita->title }}</a>
    @endforeach
</x-layouts.app>
