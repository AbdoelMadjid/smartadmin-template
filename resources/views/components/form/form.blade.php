@props([
    'action',
    'method' => 'POST', // default method is POST
    'enctype' => null, // for file uploads, set this to 'multipart/form-data'
])

<form action="{{ $action }}" method="{{ strtoupper($method) }}" {{ $attributes->merge(['enctype' => $enctype]) }}>
    @csrf
    @if (!in_array(strtoupper($method), ['GET', 'POST']))
        @method($method)
    @endif

    {{ $slot }}
</form>
