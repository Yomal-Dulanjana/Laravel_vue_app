<form action="{{ route('book-update' , $book->id) }}" method="POST" enctype="multipart/form">
    @csrf
    <div class="col-lg-12">
        <div class="from-group">
            <div class="mb-3">
                <label class="form-label">TITLE</label>
                <input type="text" class="form-control" value='{{ $book->title }}' name="title" placeholder="Enter Book Title">
              </div>
              <div class="mb-3">
                <label class="form-label">DESCRIPTION</label>
                <textarea class="form-control" name="Description" value='{{ $book->Description }}' rows="3" placeholder="Enter Book Description"></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">PRICE</label>
                <input type="text" class="form-control" name="price" value='{{ $book->price }}' placeholder="Enter Book Price">
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>