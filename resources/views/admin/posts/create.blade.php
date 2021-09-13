@extends('layouts.app')

@section('content')

    <div class="container">

        <form>
       
            <div class="mb-3">
       
                <label for="titolo" class="form-label">Titolo</label>
       
                <input type="text" class="form-control" id="titolo" name="title ">
       
            </div>
       
            <div class="mb-3">
       
                <label for="desc" class="form-label">Descrizione</label>
       
       
            </div>
       
            <div class="mb-3 form-check">
       
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
       
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
       
            </div>
       
            <button type="submit" class="btn btn-primary">Submit</button>
       
        </form>

    </div>

@endsection