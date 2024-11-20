@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Childmenu</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Childmenu</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
    <!-- /Page Header -->
	<div class="row">
        <div class="col-auto float-right ml-auto pb-2" >
            <a href="#"  class="btn btn-success btn-block" data-toggle="modal" data-target="#add_childmenu"><i class="fa fa-plus"></i>Add Childmenu</a> 
        </div>
	</div>
	<!-- /Page Header -->
    <div class="row">
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Childmenu Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Submenu Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @forelse ($childmenu as $key=> $childmenu)
                    <tr class="odd">
                        <td>{{$key+1}}</td>
                        <td>{{$childmenu-> submenu_name}}</td>
                        <td>{{$childmenu-> childmenu_name}}</td>
                        <td class="text-right py-0 align-middle">
							<div class="btn-group btn-group-sm">
								<button type="button" value="{{$childmenu->id}}" class="btn btn-primary" id="editchildmenu" ><i class="fas fa-pencil-alt" ></i></button>&nbsp;
                                <button type="button" value="{{$childmenu->id}}" class="btn btn-danger" id="childmenuDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add ChildMenu Modal -->
<div id="add_childmenu" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add ChildMenu</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add member--}}
			<div class="modal-body">
				<form action="{{route('childmenu.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Sub Name:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<select id="txtSubMenuId" class="form-control" name="txtSubMenuId" required>
										<option selected><---Select Sub-Name---></option>
										@foreach ($submenu as $submenu)
										<option value="{{ $submenu->id }}">{{ $submenu->submenu_name }}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Childmenu Name:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="txtChildmenuName" name="txtChildmenuName"required>
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<label class="container">Status
								<input type="checkbox" checked="checked">
								<span class="checkmark"></span>
							</label>
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
<!-- /Add ChildMenu Modal -->

<!-- Edit ChildMenu Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit ChildMenu</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url ('childmenu-update') }}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-4">
								<input type="hidden" value="" id="cmbChildmenuId" name="cmbChildmenuId" >
								<div class="col-sm-3">
									<label class="col-form-label">Sub-Menu Name:&nbsp; <span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<select id="eSubMenuId" class="form-control" name="txtSubMenuId" required>
										<option ><---Select Sub-Menu---></option>
											@php
												$submenu = App\Models\Submenu::all();
											@endphp
										@foreach ($submenu as $submenu)
											<option value="{{ $submenu->id }}">{{ $submenu->submenu_name }}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Childmenu Name:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="eChildmenuName" name="txtChildmenuName" required>
								</div>
							</div>

							<div class="input-group mb-5">
								<label class="container">Status
									<input type="checkbox" id="eStatus" checked="checked">
									<span class="checkmark"></span>
								</label>
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
<!-- /Edit Childmenu Modal -->
<!-- Delete Childmenu Modal -->
<div class="modal custom-modal fade" id="delete_childmenu" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Childmenu</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('childemenu-delete')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_childmenuId" name="d_childmenu">
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
<!-- /Delete Submenu Modal -->

<script>
	$(document).ready(function(){

        $(document).on('click','#childmenuDbtn',function(){
			var childmenu_id=$(this).val();
			$('#delete_childmenu').modal('show');
			$('#delete_childmenuId').val(childmenu_id);
		});

		$(document).on('click','#editchildmenu',function(){
			var eid = $(this).val();
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-childmenu/"+eid,
				success:function(response){
					console.log(response);  
					$('#cmbChildmenuId').val(eid);
					$('#eSubMenuId').val(response.childmenu.submenu_id);      
					$('#eChildmenuName').val(response.childmenu.childmenu_name);
					$('#eURL').val(response.childmenu.childmenu_url);
					$('#eStatus').val(response.childmenu.satus);
				}
			});
		});
	});
</script>
@endsection