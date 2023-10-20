@extends("layouts.app")

@section("title", "edit woman")

@section("content")

<form class="mx-5" method="post" action="{{route('women.update', $woman->id)}}">
    @csrf
    @method("PUT")
    <div class="mb-3 row">
        <label for="id" class="col-sm-2 col-form-label">Id Woman</label>
        <div class="col-sm-10">
            <input readonly name="idWoman" type="input" value="{{$woman->id}}" class="form-control" id="id">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Name Author</label>
        <div class="col-sm-10">
            <input name="woman_name" type="input" value="{{$woman->name}}" class="form-control" id="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Biograpgy</label>
        <div class="col-sm-10">
            <input name="woman_biography" type="input" value="{{$woman->biography}}" class="form-control" id="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Field of work</label>
        <div class="col-sm-10">
            <input name="woman_fieldOfWork" type="input" value="{{$woman->field_of_work}}" class="form-control" id="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
            <input name="woman_image" type="input" value="{{$woman->image}}" class="form-control" id="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Birth Day</label>
        <div class="col-sm-10">
            <input name="woman_birthDay" type="input" value="{{$woman->birth_date}}" class="form-control" id="name">
        </div>
    </div>
    <button name="submit_eidtWoman" type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection