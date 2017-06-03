@if(count($errors)>0)
    <div class="alert alert-danger">
        @foreach($errors as $error)
            {{$error}}<br>
            @endforeach
    </div>
    @endif
@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
    @endif