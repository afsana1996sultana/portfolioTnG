@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">All Product</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">All Product</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
    	<!-- /Page Header -->
        <div class="row">
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">SL</th>
					  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Product Image</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Title</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Created Date</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @forelse ($products as $product)
                    <tr class="odd">
                        <td>{{$product->id}}</td>
                        <td><img src="{{asset($product->fitureImg)}}" height="110px" width="150px" alt=""></td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->created_at}}</td>
                        <td class="text-right py-0 align-middle">
							<div class="btn-group btn-group-sm">
                                <button type="button" value="{{$product->id}}" class="btn btn-danger" id="productDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add All Project Modal -->
<div id="add_product" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Project</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add member--}}
			<div class="modal-body">
				<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Project Name:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="txtCategoryOfProject" name="txtCategoryOfProject">
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Project Group:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<select id="txtGroup" class="form-control" name="txtGroup" required>
										<option selected><------------Select Group----------------></option>
										<option value="1">5-Start Hotel</option>
										
									</select>
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Title:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="txtTitle" name="txtTitle"required>
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">URL:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="txtURL" name="txtURL"required>
								</div>
							</div>

							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Photo:&nbsp;</label>
								</div>
								<div class="col-sm-9">
									<input type="file" class="form-control" id="filePhoto" name="filePhoto">
								</div>
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
<!-- /Add All Project Modal -->

<!-- Edit All Project Modal -->
{{-- <div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Project</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('product-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-4">
								<input type="hidden" value="" id="cmbproductId" name="cmbproductId" >
								<div class="col-sm-3">
									<label class="col-form-label">Project Name:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="eproduct" name="txtCategoryOfProject">
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Project Group:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<select id="eGroup" class="form-control" name="txtGroup">
										<option value="1">5-Start Hotel</option>
										<option value="2">3-Star Hotel</option>
										<option value="3">Sea Port</option>
										<option value="4">River Port</option>
										<option value="5">Hospital</option>
										<option value="6">Commercial Building</option>
										<option value="7">University</option>
										<option value="8">Garments Factory</option>
										<option value="9">Washing Factory</option>
										<option value="10">Dyeing Factory</option>
										<option value="11">Food & Beverage</option>
										<option value="12">Toiletries</option>
										<option value="13">Office building</option>
										<option value="14">Footwear industries</option>
										<option value="15">Steel Manufacturing factory</option>
										<option value="16">Residential building</option>
										<option value="17">Resort</option>
										<option value="18">Sports Ground</option>
										<option value="19">ETP & STP</option>
									</select>
								</div>
							</div>

							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">Title:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="eTitle" name="txtTitle">
								</div>
							</div>


							<div class="input-group mb-4">
								<div class="col-sm-3">
									<label class="col-form-label">URL:&nbsp;<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="eURL" name="txtURL">
								</div>
							</div>

							<div class="input-group mb-5">
								<div class="col-sm-3">
									<label class="col-form-label">Photo:&nbsp;</label>
								</div>
								<div class="col-sm-9">
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
</div> --}}
<!-- /Edit All Project Modal -->

<!-- Delete All Project Modal -->
<div class="modal custom-modal fade" id="delete_product" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Product</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-product')}}" method="post" >
								@csrf
								@method("DELETE")
								<input type="hidden" id="delete_productId" name="d_product">
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
<!-- /Delete All Project Modal -->

<script>
	$(document).ready(function(){

        $(document).on('click','#productDbtn',function(){
            // alart("ok");
			var product_id=$(this).val();
			$('#delete_product').modal('show');
			$('#delete_productId').val(product_id);
		});

		$(document).on('click','#editproduct',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-product/"+eid,
				success:function(response){
					// console.log(response.product.name);	
					$('#cmbproductId').val(eid);			
					$('#eproduct').val(response.product.ap_name);
					$('#eGroup').val(response.product.ap_group);
					$('#eTitle').val(response.product.title);
					$('#eURL').val(response.product.url);
					$("#eFilephoto").html(
                        `<img src="public/img/${response.product.image}" width="100" class="img-fluid img-thumbnail">`);
					
				}
			});
		});
    
	});

</script>
@endsection