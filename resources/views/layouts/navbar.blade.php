{{-- blade templating untuk mempermudah pengaturan menu, dan tinggal di export --}}
<ul class="navbar">
    {{-- list untuk menu ke url home --}}
    <li><a href="/home">Home</a></li>
    {{-- list untuk menu ke url contact --}}
    <li><a href="/contact">Contact</a></li>
    {{-- list untuk menu ke url post --}}
    <li><a href="/post">Post</a></li>
    {{-- list untuk menu ke url about --}}
    <li><a href="/about">About</a></li>
    {{-- list untuk menu ke url profile --}}
    <li><a href="/profile">Profile</a></li>
</ul>

{{-- <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand" href="#">Laravel 8</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach ($navbar as $name => $url)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $url }}">{{ $name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav> --}}
