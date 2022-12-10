@extends('backend.master')
@section('title', 'Dashboard')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
           <div class="card-body table-responsive">
                <table class="mb-0 table table-bordered table-striped" id="data_table">
                    <thead>
                        <tr>
                            
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
            </div>

           
        </div>
    </div>
</div>
@endsection
@push('js')
<script type="text/javascript">
    $(document).ready(function(){
        $('#data_table').DataTable();
    });
 </script>

@endpush
