@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif


@if(session('success'))
  <div class="alert alert-success" role="alert">
    <div class="container">
        <div class="alert-icon">
          <span class="nc-like-2"></span>
        </div>
        <strong>Well done! You successfully Updated your post</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">
                <i class=""></i>
            </span>
        </button>
    </div>
    </div>
@endif

@if(session('error'))
  <div class="alert alert-danger" role="alert">
    <div class="container">
        <div class="alert-icon">
        </div>
      <strong>You successfully deleted your post</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">
                <i class=""></i>
            </span>
        </button>
    </div>
    </div>
@endif
