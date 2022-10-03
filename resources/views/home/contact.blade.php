{{-- membuat ketergantungan dengan menu app blade --}}
{{-- memanggil paramater title dengan membuat array dan arrow function dan memasukkan value --}}
@extends('layouts.app', ['title' => 'Contact'])


{{-- memanggil yield yang ada di app --}}
@section('content')
    {{-- di dalam section dapat memasukkan kode seperti html, css dan js --}}
    <h2>Ini adalah halaman content</h2>
    <p><strong style="color: red">Lorem ipsum dolor</strong> sit amet consectetur adipisicing elit. Nostrum dicta voluptatum
        aut, quasi
        veritatis consequuntur,
        dignissimos quae iste, iure modi aliquam dolore odio provident cumque repellendus deserunt tenetur corrupti ullam?
    </p>
    {{-- dengan cara menambahkan endsection sebagai pembungkus dari section --}}
@endsection
