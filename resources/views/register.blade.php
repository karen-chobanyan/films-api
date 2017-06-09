@extends('app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                  <div class="panel-heading">Sign In</div>
                  <div class="panel-body">
                    <form class="" method="post">
                      <div class="input-group">
                        <input class="form-control" type="text" name="name" placeholder="Full Name">
                      </div>
                      <br>
                      <div class="input-group">
                        <input class="form-control" type="text" name="email" placeholder="E-mail">
                      </div>
                      <br>
                      <div class="input-group">
                        <input class="form-control" type="password" name="password" value="">
                      </div>
                      <br>
                      <div class="input-group">
                        <input class="button" type="submit" name="" value="Sign In">
                      </div>
                    </form>
                  </div><!-- panel body -->
            </div><!-- panel -->
        </div><!-- col-md-8 -->
    </div><!-- row -->

@endsection