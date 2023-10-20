@extends("layouts.app")

@section("title", "create woman")

@section("content")

<form class="mx-5" method="post" action="{{route('women.store')}}">
    @csrf
    @method("post")
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Name Author</label>
        <div class="col-sm-10">
            <input name="woman_name" type="input" class="form-control" id="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Biograpgy</label>
        <div class="col-sm-10">
            <input name="woman_biography" type="input"  class="form-control" id="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Field of work</label>
        <div class="col-sm-10">
            <input name="woman_fieldOfWork" type="input"  class="form-control" id="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
            <input name="woman_image" type="input" class="form-control" id="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Birth Day</label>
        <div class="col-sm-10">
            <input name="woman_birthDay" type="date"  class="form-control" id="name">
        </div>
    </div>
    <button name="submit_eidtWoman" type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection