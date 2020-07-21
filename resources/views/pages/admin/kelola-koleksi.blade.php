@extends('layouts.app')

@section('content')
<section id="kelola-koleksi">
    <div class="container-fluid">
        <h2>Kelola Koleksi</h2>
        <hr>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
            Tambah Koleksi
        </button>
  
        <!-- Modal Add Collection -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>

        <table class="table table-striped table-hover table-bordered">
            <thead>
                <th>No.</th>
                <th>Name</th>
                <th>Type</th>
                <th>Author</th>
                <th>Action</th>
            </thead>
            <tbody>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tbody>
        </table>
    </div>
</section>
@endsection