@extends('layout.layout')
@section("title", "DC Comics - Homepage")
@section("content")
<div>
  <div class="container container-home position-relative">
    <div class="position-absolute position-set">
      <button class="text-uppercase fw-bold fs-4 p-3" type="button">
        current series
      </button>
    </div>
    <!--Comics-->
    <div>
      <div class="d-flex flex-wrap custom-style">

        @foreach($comics_cards as $card )
        <div class="cardz-box position-relative mb-3">
          <!--immagine-->
          <div><img class="img-cardz" src="{{$card["thumb"]}}" alt="comic" /></div>
          <!--titolo-->
          <div>
          <div class="position-absolute hoverme justify-content-center align-items-center">
            <div>
              <div class="comic-name text-white text-uppercase text-center fw-bold">{{ $card["series"] }}</div>
              <div class="comic-name text-white text-center fw-bold">{{$card["price"]}}</div>
            </div>
          </div>
        </div>
      </div>
        @endforeach
        
        
      </div>
    </div>
    <div class="text-center mb-3">
      <button class="text-uppercase fw-bold fs-6 p-2" type="button">
        show more
      </button>
    </div>
  </div>
</div>
@endsection

