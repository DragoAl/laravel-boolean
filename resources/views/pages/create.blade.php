@extends('layouts.main-layout')
@section('content')
    <div class="container">
        <h2>Create A Postcard</h2>
        <form action="{{route('postcard.store')}}" method="POST" enctype="multipart/form-data">
            @method("POST")
            @csrf
            
            <label for="sender">Mittente:</label>
            <input class="mb-3" type="text" name="sender"> <br>
            <label for="address">Indirizzo:</label>
            <input class="mb-3" type="text" name="address"> <br>
            <label for="text">Testo:</label>
            <input class="mb-3" type="text" name="text"> <br>
            <label for="image">Immagine:</label>
            <input class="mb-3" type="file" name="image"> <br>

            <input class="btn btn-primary" type="submit" value="Create">
        </form>  
    </div>
   
@endsection