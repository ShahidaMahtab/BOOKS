  @extends('books.layout')
  @section('content')
  <div class="container">
        <div class="header">
      <div class="title">
      <h1 class="title-text">Book Information</h1>
  </div>

      <div class="btn btn-c">
      <a class="btn-create" href="books/create">Add new books &rarr;</a>
      </div>

        </div>
      <div class="section-center">
      <table  class="content-table">
      <thead>
      <tr>
      <th>ID</th>
      <th>ISBN</th>
      <th>Title</th>
      <th>Author</th>
      <th>Publisher</th>
      <th>Price</th>
      <th>Action</th>
      <th></th>
      </tr>
      </thead>
      <tr>
          <tbody>
      @foreach ($books as $book)
          <td>{{  $book->id }}</td>
          <td>{{ $book->ISBN }}</td>
          <td>{{ $book->Title }}</td>
          <td>{{ $book->Author }}</td>
          <td>{{ $book->Publisher }}</td>
          <td>{{ $book->Price }}</td>
          <td>
      <a class="btn btn-primary" href="books/{{$book->id}}/edit">Edit</a></td>
          
        <td>   
          <form action="/books/{{ $book->id }}" method="POST"
              >         
            @csrf
            @method('delete')
            <button 
            type="submit" 
            class="btn btn-danger"> 
            Delete
          </button> 
            </form>
          </td>
          </tr>
          
      @endforeach
      </tbody>
      </table>
      <div>
        {{ $books->links() }}
      </div>
      </div>
      </div>
  @endsection