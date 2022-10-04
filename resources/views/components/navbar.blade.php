{{-- blade templating untuk mempermudah pengaturan menu, dan tinggal di export --}}
<ul class="navbar">
    @foreach ($navbar as $name => $url)
        <li><a href="{{ $url }}">{{ $name }}</a></li>
    @endforeach
</ul>
