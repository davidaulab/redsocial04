@props([
    'code',
    'message'
])
@if ($code > 0)
<div id="flashMessage" class="bg-white text-{{$type}} border border-{{ $type }} p-2 flash">
    {{ $code}}  - {{ $message}}
</div>
@if ($timeout > 0) 
<script>
    setTimeout(() => {
        let msg = document.getElementById ('flashMessage');
        if (msg) {
            msg.style.display = 'none'; 
        }

    }, {{$timeout}});
    </script>
    @endif
@endif