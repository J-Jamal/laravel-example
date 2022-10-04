{{-- ini adalah anonymous component --}}
<div class="alert">
    <div class="alert-header">
        {{-- ini untuk title atau judul --}}
        {{ $title }}
    </div>
    {{-- Ini adalah konten atau childern nya --}}
    {{ $slot }}
    {{-- bisa menjadi footer --}}
    <div class="alert-footer">
        {{ $footer }}
    </div>
</div>
