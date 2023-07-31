@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">BOOK LIST</h1>
        </div>
        <form action="{{ route('book-store') }}" method="POST" enctype="multipart/form">
            @csrf
            <div class="col-lg-12">
                <div class="from-group">
                    <div class="mb-3">
                        <label class="form-label">TITLE</label>
                        <input type="email" class="form-control" id="title" placeholder="Enter Book Title">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">DESCRIPTION</label>
                        <textarea class="form-control" id="Description" rows="3" placeholder="Enter Book Description"></textarea>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">PRICE</label>
                        <input type="email" class="form-control" id="price" placeholder="Enter Book Price">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        
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