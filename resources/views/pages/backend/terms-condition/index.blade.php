@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Terms Condition</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Terms Condition</li>
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
                        <form action="{{url('terms-condition/1')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="">Existing Image</label>
                                    <div>
                                        <img src="{{asset('img/'.$condition->image)}}" alt="" sizes="" srcset="" height="200px" width="300px"> 
                                    </div>
                                    <div class="pt-3">
                                        <label for="">Image</label>
                                        <input type="file" name="image">
                                    </div>
                                </div>
                                
            					<div class="form-group col-6">
                                    <label>Title<span class="text-danger">*</span></label>
                                    <input type="text" name="txtTitle" id="txtTitle" class="form-control" value="{{$condition->title}}">
                                </div>
        						
        						<div class="form-group col-6">
                                    <label>Heading<span class="text-danger">*</span></label>
                                    <input type="text" name="txtHeading" id="txtHeading" class="form-control" value="{{$condition->heading}}">
                                </div>
                                
                                 <div class="form-group col-12">
                                    <label>Details<span class="text-danger">*</span></label>
                                    <textarea class="summernote" id="txtDetails" name="txtDetails">{{$condition->details}}</textarea>
                                </div>
        					</div>
    
    					    <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary">Update</button>
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