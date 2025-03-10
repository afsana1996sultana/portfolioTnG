@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Service</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Service</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
   <!-- /Page Header -->
	<div class="row">
        <div class="col-auto float-right ml-auto pb-2" >
            <a href="#"  class="btn btn-success btn-block" data-toggle="modal" data-target="#add_service"><i class="fa fa-plus"></i>Add Service</a> 
        </div>
	</div>
	<!-- /Page Header -->
    <div class="row">
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Category</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Title</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Created Date</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @forelse ($service as $key=> $service)
                    <tr class="odd">
                        <td>{{ $key+1 }}</td>
                        <td>{{$service-> sc_name}}</td>
                        <td>{{$service-> title}}</td>
                        <td>{{$service-> created_at}}</td>
                        <td class="text-right py-0 align-middle">
							<div class="btn-group btn-group-sm">
								<button type="button" value="{{$service->id}}" class="btn btn-primary" id="editservice" ><i class="fas fa-pencil-alt" ></i> </button>&nbsp;
                                <button type="button" value="{{$service->id}}" class="btn btn-danger" id="serviceDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add Service Modal -->
<div id="add_service" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><i class="fa fa-edit">Add Service</i></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add member--}}
			<div class="modal-body">
				<form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Category:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-10">
									<select id="txtCategory" class="form-control" name="txtCategory" required>
										<option selected><---Father Category---></option>
										@foreach ($servicecategories as $servicecategori)
										<option value="{{ $servicecategori->id }}">{{ $servicecategori->sc_name }}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Title:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtTitle" name="txtTitle" required>
								</div>
							</div>
						</div>

                         <!-- /.card-header -->
						 <div class="col-sm-12">
                            <div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Details:&nbsp;<span class="text-danger">*</span></label>
								</div>
                                <div class="col-sm-10">
									<textarea name="txtDetails" id="txtDetails" class="summernote"></textarea>
                            	</div>
                            </div>
                        </div>


						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Icon:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtIcon" name="txtIcon">
								</div>
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Photo:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="file" class="form-control" id="filePhoto" name="filePhoto">
								</div>
							</div>
						</div>
					</div>

					<div class="submit-section float-right">
                        <button type="button" class="btn btn-secondary" style="width:80px;" data-dismiss="modal">Close</button>
						<input class="btn btn-primary submit-btn" type="submit" name="btnCreate" style="width:80px;" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Add Service Modal -->

<!-- Edit Service Center Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Service</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('service-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<input type="hidden" value="" id="cmbServiceId" name="cmbServiceId" >
								<div class="col-sm-2">
									<label class="col-form-label">Category:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-10">
									<select id="eCategory" class="form-control" name="txtCategory" required>
										<option ><---Father Category---></option>
										@foreach ($servicecategories as $servicecategori)
										<option value="{{ $servicecategori->id }}" >{{ $servicecategori->sc_name }}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Title:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="eTitle" name="txtTitle" required>
								</div>
							</div>
						</div>

						<div class="col-sm-12">
                            <div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Details:&nbsp;<span class="text-danger">*</span></label>
								</div>
                                <div class="col-sm-10">
									<textarea class="summernote" id="eDetails" name="txtDetails"></textarea>
                            	</div>
                            </div>
                        </div>


						<div class="col-sm-12">
							<div class="input-group mb-4">
								<div class="col-sm-2">
									<label class="col-form-label">Icon:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="eIcon" name="txtIcon">
								</div>
							</div>
						</div>
					
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<div class="col-sm-2">
									<label class="col-form-label">Photo:&nbsp;</label>
								</div>
								<div class="col-sm-10">
									<input type="file" class="form-control" name="filePhoto"  placeholder="image"><br>
									<div class="form-group" id="eFilephoto"></div>	
								</div>
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
<!-- /Edit Service Center Modal -->

<!-- Delete Service Modal -->
<div class="modal custom-modal fade" id="delete_service" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Service</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-service')}}" method="post" >
								@csrf
								@method("DELETE")
								<input type="hidden" id="delete_serviceId" name="d_service">
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

        $(document).on('click','#serviceDbtn',function(){
            // alart("ok");
			var service_id=$(this).val();
			$('#delete_service').modal('show');
			$('#delete_serviceId').val(service_id);
		});


		$(document).on('click','#editservice',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-service/"+eid,
				success:function(response){
					//console.log(response.service.details);	
					$('#cmbServiceId').val(eid);		
					$('#eCategory').val(response.service.category);
					$('#eTitle').val(response.service.title);
					$('#eDetails').summernote('code', response.service.details);
					$('#eIcon').val(response.service.icon);
					$("#eFilephoto").html(
                        `<img src="img/${response.service.image}" width="100" class="img-fluid img-thumbnail">`);
					
				}
			});
		});
	});
</script>
@endsection