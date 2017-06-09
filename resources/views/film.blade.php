@extends('app')

@section('content')
    
    <div id="films">
      <div class="row">
        <div class="col-sm-6">
          <img class="film-photo" src="" alt="">
        </div>
        <div class="col-sm-6">
          <h2 class="film-title">Title</h2>
          <p class="descr">Description</p>
          <div class="details">
            <span>Rating: </span><span class="rating"></span> | <span>Ticket Price: </span><span class="price"></span> | <span>Release Date: </span><span class="release"></span>
          </div>
        </div>
      </div>
    </div><!-- row -->
    <script type="text/javascript" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        console.log('Ready');
        var films = 
        $.ajax({
          url: "/api/films/{{$slug}}",
        }).done(function(res) {
          console.log(res[0].slug);
          if(res.length > 0){
            $('.film-photo').attr('src',res[0].photo);
            $('.film-title').text(res[0].name);
            $('.descr').text(res[0].description);
            $('.rating').text(res[0].rating);
            $('.price').text(res[0].ticket_price);
            $('.release').text(res[0].release_date);
          }
        });
      })
    </script>

@endsection