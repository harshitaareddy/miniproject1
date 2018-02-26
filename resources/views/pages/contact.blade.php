@extends('layouts.default')

@section('content')

    <div class="card mt-3 pl-2 pr-2 color   ">
        <div class="card-title"><h1>Contact</h1>
            <p class="lead">contact the page owner? Fill in the details and we shall get back to you soon :)</p></div>
        <div class="card-body">

            <form action="/contact" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="Subject">Subject:</label>
                    <input name="Subject" type="Subject" class="form-control" id="Subject" placeholder="Subject">
                </div>

                <div class="form-group">
                    <label for="body">Message:</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>

@endsection