@if(session('status'))
    <div class="col-3 mt-3 mx-auto alert alert-success">
        {{session('status')}}
    </div>
@endif