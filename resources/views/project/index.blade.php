@extends('app')

@section('content')
<section id="gallery" class="uk-block">
    <div class="uk-container uk-container-center">
        <ul class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-3" data-uk-grid-margin data-uk-grid-match>
            <li class="uk-container-center uk-text-center">
                <div class="uk-panel">
                    <figure class="uk-overlay uk-overlay-hover">
                        <img src="img/maryballener.com.thumb.png" class="uk-overlay-grayscale uk-thumbnail">
                        <figcaption class="uk-overlay-panel uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center uk-overlay-background">
                            Etiam tristique congue sollicitudin.
                            Sed velit diam, hendrerit sit amet
                            rutrum id, viverra quis felis.
                        </figcaption>
                    </figure>

                </div>
            </li>
            @for ($i = 0; $i < 9; $i++)
                <li class="uk-container-center uk-text-center">
                    <div class="uk-panel">
                        <figure class="uk-overlay uk-overlay-hover">
                            <img src="http://placehold.it/250x334/660033/e3e3e3" class="uk-overlay-grayscale uk-thumbnail">
                            <figcaption class="uk-overlay-panel uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center uk-overlay-background">
                                Etiam tristique congue sollicitudin.
                                Sed velit diam, hendrerit sit amet
                                rutrum id, viverra quis felis.
                            </figcaption>
                        </figure>

                    </div>
                </li>
            @endfor
        </ul>
    </div>
</section>
@endsection
