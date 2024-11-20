@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Why Choose Us</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Choose Section</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

     <!-- /Page Header -->
	<div class="row">
        <div class="col-auto float-right ml-auto pb-2" >
            <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#add_choosesection"><i class="fa fa-plus"></i>Add Content</a> 
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
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @forelse ($choosesection as $key=> $choosesection)	
                    <tr class="odd">
                        <td>{{ $key+1 }}</td>
                        <td>{{$choosesection-> title}}</td>
                        <td class="text-right py-0 align-middle">
							<div class="btn-group btn-group-sm">
								<button type="button" value="{{$choosesection->id}}" class="btn btn-primary" id="editchoosesection" ><i class="fas fa-pencil-alt" ></i> </button>&nbsp;
                                <button type="button" value="{{$choosesection->id}}" class="btn btn-danger" id="choosesectionDbtn" ><i class="fas fa-trash"></i> </button>
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
<!-- Add Choose-section Modal -->
<div id="add_choosesection" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><i class="fa fa-edit">Add Content</i></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add member--}}
			<div class="modal-body">
				<form action="{{route('choosesection.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
                        <div class="col-sm-12">
							<div class="input-group mb-5">
								<label class="col-form-label">Srl:&nbsp;<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="txtSn" name="txtSn"required>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="input-group mb-5">
								<label class="col-form-label">Title:&nbsp;<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="txtTitle" name="txtTitle"required>
							</div>
						</div>

                        <!-- /.card-header -->
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Details:<span class="text-danger">*</span></label>
                                <textarea name="txtDetail" id="txtDetail" class="summernote"></textarea>
                            </div>
                        </div>

						<div class="col-sm-12">
							<div class="input-group mb-5">
								<label class="col-form-label">Icon:&nbsp;<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="txtIcon" name="txtIcon"required>
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
<!-- /Add Choose-section Modal -->

<!-- Edit Choose-section Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Content</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('choosesection-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<input type="hidden" value="" id="cmbChoosesectionId" name="cmbChoosesectionId" >
								<label class="col-form-label">Srl:&nbsp;<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="eSn" name="txtSn" required>
							</div>
						</div>
						
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<label class="col-form-label">Title:&nbsp;<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="eTitle" name="txtTitle" required>
							</div>
						</div>
							
						<div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Details:&nbsp;<span class="text-danger">*</span></label>
                                <textarea class="summernote" id="eDetail" name="txtDetail"></textarea>
                            </div>
                        </div>
						
						<div class="col-sm-12">
							<div class="input-group mb-5">
								<label class="col-form-label">Icon:&nbsp;<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="eIcon" name="txtIcon" required>
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
<!-- /Edit Choose-section Modal -->

<!-- Delete Choose-section Modal -->
<div class="modal custom-modal fade" id="delete_choosesection" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Content</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-choosesection')}}" method="post" >
								@csrf
								@method("DELETE")
								<input type="hidden" id="delete_choosesectionId" name="d_choosesection">
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
<!-- /Delete Choose-section Modal -->
<script>
	$(document).ready(function(){

        $(document).on('click','#choosesectionDbtn',function(){
            // alart("ok");
			var choosesection_id=$(this).val();
			$('#delete_choosesection').modal('show');
			$('#delete_choosesectionId').val(choosesection_id);
		});

		$(document).on('click','#editchoosesection',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-choosesection/"+eid,
				success:function(response){
					// console.log(response.choosesection.brunch_id);	
					$('#cmbChoosesectionId').val(eid);		
					$('#eSn').val(response.choosesection.sn);
					$('#eTitle').val(response.choosesection.title);
					$('#eDetail').summernote('code', response.choosesection.detail);
					$('#eIcon').val(response.choosesection.icon);
				}
			});
		});
    
	});

</script>

@endsection