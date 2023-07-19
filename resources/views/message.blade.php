<div>hello world again page</div>
@if(Route::has('Create'))
    <form action="{{route('Create')}}" method="post">
        @csrf
        <div>
           <input type="text" name="someName">
            <button type="submit"></button>
        </div>
    </form>
@endif

