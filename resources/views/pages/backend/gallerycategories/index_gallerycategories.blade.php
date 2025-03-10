@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Gallery Add</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Add Gallery</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
     <!-- /Page Header -->
	<div class="row">
        <div class="col-auto float-right ml-auto pb-2" >
            <a href="#"  class="btn btn-success btn-block" data-toggle="modal" data-target="#add_category"><i class="fa fa-plus"></i>Add Gallery</a> 
        </div>
	</div>
	<!-- /Page Header -->
    
    <div class="row">
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
					  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Title</th>
					  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Gallery Category</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Created Date</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @forelse ($gallerycategories as $key=> $gallerycategories)
                    <tr class="odd">
                        <td>{{ $key+1 }}</td>
                        <td>{{$gallerycategories-> title}}</td>
                        <td>{{$gallerycategories-> g_group}}</td>
                        <td>{{$gallerycategories-> created_at}}</td>
                        <td class="text-right py-0 align-middle">
							<div class="btn-group btn-group-sm">
								<button type="button" value="{{$gallerycategories->id}}" class="btn btn-primary" id="editgallerycategories" ><i class="fas fa-pencil-alt" ></i> </button>&nbsp;
                                <button type="button" value="{{$gallerycategories->id}}" class="btn btn-danger" id="gallerycategoriesDbtn" ><i class="fas fa-trash"></i> </button>
							</div>
                        </td>   
                    </tr>
					@empty
						<div colspan="14">No records found</div>
					@endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Gallery Modal -->
<div id="add_category" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Gallery</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add member--}}
			<div class="modal-body">
				<form action="{{route('gallerycategories.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div>
						<div class="col-sm-12">
    						<div class="input-group mb-4">
    							<label class="col-form-label">Gallery Group:&nbsp;<span class="text-danger">*</span></label>
    							<select id="txtGroup" class="form-control" name="txtGroup" required>
    								<option selected><------------Select Group----------------></option>
    								<option value="Seminer">Seminer</option>
    								<option value="Occational">Occational</option>
    								<option value="Corporate">Corporate</option>
    							</select>
    						</div>
						</div>
						
						
						<div class="col-sm-12">
    						<div class="input-group mb-4">
    							<label class="col-form-label">Title:&nbsp;<span class="text-danger">*</span></label>
    							<input type="text" class="form-control" id="txtTitle" name="txtTitle" required>
    						</div>
						</div>
						
						
						<div class="col-sm-12">
    						<div class="input-group mb-5">
    							<label class="col-form-label">Photo:&nbsp;<span class="text-danger">*</span></label>
    							<input type="file" class="form-control" id="filePhoto" name="filePhoto" required>
    						</div>
						</div>
					</div>

					<div class="submit-section float-right">
						<input class="btn btn-primary submit-btn" style="width:80px;" type="submit" name="btnCreate" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Add Category Modal -->

<!-- Edit Category Center Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Gallery</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('gallerycategories-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
    						<div class="input-group mb-4">
								<input type="hidden" value="" id="cmbGallerycategoriesId" name="cmbGallerycategoriesId" >
    							<label class="col-form-label">Gallery Group:&nbsp;<span class="text-danger">*</span></label>
    							<select id="eGroup" class="form-control" name="txtGroup">
    								<option value="Seminer">Seminer</option>
    								<option value="Occational">Occational</option>
    								<option value="Corporate">Corporate</option>
    							</select>
    						</div>
						</div>
						
						
						<div class="col-sm-12">
    						<div class="input-group mb-4">
    							<label class="col-form-label">Title:&nbsp;<span class="text-danger">*</span></label>
    							<input type="text" class="form-control" id="eTitle" name="txtTitle">
    						</div>
						</div>
						
						<div class="input-group mb-5">
							<div class="col-sm-1">
								<label class="col-form-label">Photo:&nbsp;<span class="text-danger">*</span></label>
							</div>
							<div class="col-sm-11">
								<input type="file" class="form-control" name="filePhoto"  placeholder="image"><br>
								<div class="form-group" id="eFilephoto"></div>	
							</div>
						</div>
					</div>

					<div class="submit-section float-right">
						<button type="button" class="btn btn-secondary" style="width:80px;" data-dismiss="modal">Cancle</button>
						<input class="btn btn-primary submit-btn" type="submit"  name="btnUpdate" value="Update">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Edit Category Center Modal -->

<!-- Delete Category Modal -->
<div class="modal custom-modal fade" id="delete_gallerycategories" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Gallery</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-gallerycategories')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_gallerycategoriesId" name="d_gallerycategories">
                                <button type="submit" class="btn btn-danger continue-btn">Delete</button>		
							</form>
						</div>
						<div class="col-6">
							<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-info cancel-btn">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Delete Category Modal -->
<script>
	$(document).ready(function(){

        $(document).on('click','#gallerycategoriesDbtn',function(){
            // alart("ok");
			var gallerycategories_id=$(this).val();
			$('#delete_gallerycategories').modal('show');
			$('#delete_gallerycategoriesId').val(gallerycategories_id);
		});

		$(document).on('click','#editgallerycategories',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-gallerycategories/"+eid,
				success:function(response){
					$('#cmbGallerycategoriesId').val(eid);		
					$('#eGroup').val(response.gallerycategories.g_group);
					$('#eTitle').val(response.gallerycategories.title);
					$("#eFilephoto").html(
                        `<img src="img/${response.gallerycategories.image}" width="100" class="img-fluid img-thumbnail">`);
					
				}
			});
		});
    
	});
</script>
@endsection