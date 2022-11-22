<div class="col-md-4 d-flex align-items-stretch text-center">
    <div class="card p-2 m-1 w-100">
        @isset($img)
            @if($img != '')
            <img src="{{ $img }}" class="card-img-top" alt="{{ $title }}">
            @else 
            <img src="{{ asset ('/img/logo.png') }}" class="card-img-top" alt="{{ $title }}">
            
            @endif
        @endisset
        <div class="card-body">
            <h5 class="card-title">{{ $title }}</h5>
            <p class="card-text">{{ $content }}</p>
            @isset($author)
            <p class="card-text">Creado por {{ $author }}</p>    
            @endisset

            @isset($group)
            <p class="card-text">Publicado en  {{ $group }}</p>    
            @endisset
            

        </div>

        @isset($link) 
        <a href="{{ $link }}" class="btn btn-success m-4"> {{ ((isset($linkTxt))? $linkTxt : "Ver detalle" )  }}</a>

        @endisset

    </div>
</div>
