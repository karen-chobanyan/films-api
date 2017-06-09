@extends('app')

@section('content')
    
    <div id="films">

    </div><!-- row -->
    <script type="text/javascript" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        console.log('Ready');
        var films = 
        $.ajax({
          url: "/api/films",
        }).done(function(res) {
          console.log(res);
          if(res.length > 0){
            for (var i = 0; i < res.length; i++) {
              var html = '<div class="row">';
              html += '<div class="col-sm-3 title" ><a href="/film/'+res[i].slug+'"><img src="'+res[i].photo+'"/>' + res[i].name + '</a></div>';
              html += '<div class="col-sm-6" >' + res[i].description + '</div>';
              html += '<div class="col-sm-1" >' + res[i].rating + '</div>';
              html += '<div class="col-sm-1" >$' + res[i].ticket_price/100 + '</div>';
              html += '</div><hr>';
              $('#films').append(html);
            }
          }
        });
      })
    </script>

@endsection