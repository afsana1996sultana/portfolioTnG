@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Create Product</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Create Product</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<div class="section-body">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="form-group col-6">
									<label>Title<span class="text-danger">*</span></label>
									<input type="text" name="title" id="title" class="form-control">
								</div>
								<div class="form-group col-6">
									<label>Select Category<span class="text-danger">*</span></label>
									<select class="form-control categorySelect" name="child_menu_id">
                                        <option value="">Select Category</option>
                                        @foreach ($childmenus as $childmenu)
                                            <option value="{{ $childmenu->id }}">{{ $childmenu->childmenu_name }} ({{ $childmenu->submenu->submenu_name }})</option>
                                        @endforeach
                                    </select>
								</div>
								<input type="hidden" name="sub_menu_id" class="hiddensubmenuID" value="">
								<div class="form-group col-6">
									<label>Feature Image<span class="text-danger">*</span></label>
									<input type="file" name="fitureImg" class="form-control">
								</div>
								<div class="form-group col-6">
									<label>Multiple Images<span></span></label>
									<input type="file" name="multiImg[]" id="multiImg" class="form-control" multiple>
								</div>
								<div class="form-group col-6">
									<label>Price<span></span></label>
									<input type="number" name="price" id="price" class="form-control">
								</div>
								<div class="form-group col-6">
									<label>Status<span></span></label>
									<select class="form-control" name="status">
										<option value="1">Active</option>
										<option value="0">Inactive</option>
									</select>
								</div>
								<div class="form-group col-12">
									<label>Description<span class="text-danger">*</span></label>
									<textarea class="summernote" id="txtDetails" name="description"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<button type="submit" class="btn btn-primary">Add Product</button>
								</div>
							</div>
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>

   $(document).on("change", ".categorySelect", function(){
    var childMenuId = $(this).val();
    var url = "{{ route('product.getSubmenuId', '') }}/" + childMenuId;
    console.log("sohid zia omor hok", childMenuId, url);
    
    $.ajax({
        type: "POST",
        data: {
            "_token": "{{ csrf_token() }}"
        },
        url: url,
        success: function(data){
            console.log('data', data?.data?.submenu_id);
            $(".hiddensubmenuID").val(data?.data?.submenu_id);
            
        }
    });
});
</script>