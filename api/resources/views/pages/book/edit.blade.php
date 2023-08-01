<form action="{{ route('book-store') }}" method="POST" enctype="multipart/form">
    @csrf
    <div class="col-lg-12">
        <div class="from-group">
            <div class="mb-3">
                <label class="form-label">TITLE</label>
                <input type="text" class="form-control" name="title" placeholder="Enter Book Title">
              </div>
              <div class="mb-3">
                <label class="form-label">DESCRIPTION</label>
                <textarea class="form-control" name="Description" rows="3" placeholder="Enter Book Description"></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">PRICE</label>
                <input type="text" class="form-control" name="price" placeholder="Enter Book Price">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>