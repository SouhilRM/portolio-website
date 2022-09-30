@extends('admin.admin_master')
@section('id_admin')

<div class="page-content">
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Data Tables</h4>                
            </div>
        </div>
    </div>
    <!-- end page title -->
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title mb-3">Muli Image Setting</h4>
                    
                    <table id="datatable" class="table table-bordered dt-responsive nowrap table-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="table-secondary">
                        <tr>
                            <th>N°</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>

                        @php($i = 1)
                
                        @foreach($AllMultiImage as $image)
                            <tr class="align-middle">

                                <td>{{ $i++ }}</td>

                                <td><img src="{{ asset($image->multi_image) }}" alt="MultiImage" style="height: 100px;"></td>

                                <td>
                                    <!-- tu passe l'id de ton image via la route pour edit et delete -->
                                    <a href="{{ route('edit.multi.image',$image->id) }}" class="btn btn-info sm" title="edit"><i class="fas fa-edit"></i></a>

                                    <a href="{{ route('delete.multi.image',$image->id) }}" class="btn btn-danger sm" title="delete" id="delete"><i class="fas fa-trash-alt"></i></a>
                                </td>

                            </tr>   
                        @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    
    
</div> <!-- container-fluid -->
</div>

@endsection