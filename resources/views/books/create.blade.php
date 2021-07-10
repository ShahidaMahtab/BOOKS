  @extends('books.layout')

  @section('content')
      <div class="container">
        <div class="header">
          <div class="title">
      <h1 class="title-text create">Add new books</h1>
          </div>
          <div>
            <a class="btn btn-create" href="/books">Back</a>
          </div>
      </div>
      <div class="section-center">
      <form action="/books" method="POST" class="form-p">
      @csrf
     
        {{-- <div class="form-group">
          <h3 class="form-text">ID :</h3>
          <input type="number" name="ID" class="form-control" id="">
        </div> --}}

        <div class="form-group">
          <h3 class="form-text">ISBN :</h3>
          <input type="number" name="ISBN" class="form-control" id="">
        </div>
          
        <div class="form-group">
          <h3 class="form-text">Title : </h3>
          <input type="text" name="Title" class="form-control" id="" placeholder="title">
        </div>
        
        <div class="form-group">
          <h3 class="form-text">Author : </h3>
          <input type="text" name="Author" class="form-control" id="" placeholder="author">
        </div>
    
        <div class="form-group">
          <h3 class="form-text">Publisher : </h3>
          <input type="text" name="Publisher" class="form-control" id="" placeholder="publisher">
        </div>
        <div class="form-group">
          <h3 class="form-text">Price : </h3>
          <input type="number" name="Price" class="form-control" id="" placeholder="price">
        </div>
        
  
      <div class="submit">
          <button type="submit" class="btn btn-create">Submit</button>
      </div>
      </form>
      @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
          </div>
      @endif
        </div>
      </div>
  @endsection