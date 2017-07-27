@extends("layouts.app")

@section("content")
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection