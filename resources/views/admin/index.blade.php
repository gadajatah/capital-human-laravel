@extends('layouts.app')

@section('title', 'Admin | Staff')
@section('title-2', 'Staff')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Form Staff
                </div>
                
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    
                    <div class="card-body table-responsive p-2">
                        <livewire:table-staff/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@push('js')
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
          "responsive": true,
        });
    } );
  </script>
@endpush