@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">BOOK LIST</h1>
        </div>
        <form action="{{ route('book-store') }}" method="POST" enctype="multipart/form">
            @csrf
            <div class="col-lg-12">
              <div class="row">
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
          </div>
        </form>
        
        <div class="col-lg-12">
            <table class="table table-success table-striped">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Type</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($books as $key => $book )
                  <tr>
                    {{-- <th scope="row">{{  ++$key }}</th> --}}
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->Description }}</td>
                    <td>
                        @if ($book->type == 0)
                            <span class="badge text-bg-warning">Borrow Book</span>
                        @else
                            <span class="badge text-bg-success">Return Book</span>
                        @endif
                    </td>
                    <td>{{ $book->price }}</td>
                    <td>
                        <a href="{{ route('book-delete',$book->id) }}" class="btn btn-danger">Delete</a>
                        <a href="{{ route('book-type',$book->id) }}" class="btn btn-success">Change</a> 
                        <a href="javascript:void(0)" class="btn btn-info" onclick="bookEditModal({{ $book->id }})">Update</a> 

                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="bookEdit" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="bookeditLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="bookEditLabel">UPDATE BOOK DATA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="bookEditContent">
          
        </div>
      </div>
    </div>
  </div>
  
  
@endsection

@push('css')
<style>
    .page-title{
        padding-top: 5vh;
        font-size: 5em;
        color: #4b85bf
    }
</style>
    
@endpush

@push('js')
<script>
    function bookEditModal(book_id){
        var data = {
            book_id: book_id,
        };
        $.ajax ({
            url: "{{ route('book-edit') }}",
            headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            datatype:'',
            data: data,
            success: function(response){
                $('#bookEdit').modal('show');
                $('#bookEditContent').html(response);
            }
        });
        }
</script>
    
@endpush