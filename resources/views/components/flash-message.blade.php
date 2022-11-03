@props([
    'code',
    'message'
])
<div class="bg-white text-{{$type}} border border-{{ $type }} p-2">
    {{ $code}}  - {{ $message}}
</div>