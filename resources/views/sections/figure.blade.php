<div class="col">
    <div class="grid">
        <figure class="effect-milo">
            <img src="{{url("storage/".$image->image)}}" alt="{{$image->title}}">
            <figcaption>
                <h2>J.A.W.</h2>
                <p>  {{ $image->title }}</p>
                <a data-target="#{{ $image->id }}" data-toggle="modal" href="#myModal">View
                    More</a>
            </figcaption>
        </figure>
    </div>
</div>