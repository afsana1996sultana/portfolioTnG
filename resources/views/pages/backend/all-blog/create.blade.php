@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Create Blog</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Create Blog</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

    
    <div class="section-body">
        <a href="{{url('all-blog')}}" class="btn btn-primary"><i class="fas fa-list"></i>All Blog</a>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('all-blog.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>Thumbnail Image Preview</label>
                                    <div>
                                        <img id="preview-img" class="admin-img" src="{{url('backend/assets/photo/preview.png')}}" alt="" height="120px" width="160px">
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label>Thumnail Image <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file"  name="file_blog_img" onchange="previewThumnailImage(event)">
                                </div>

                                <div class="form-group col-12">
                                    <label>Banner Image Preview</label>
                                    <div>
                                        <img id="preview-banner-img" class="admin-banner-img" src="{{url('backend/assets/photo/preview.png')}}" alt="" height="120px" width="160px">
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label>Banner Image <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file"  name="file_banner_img" onchange="previewBannerImage(event)">
                                </div>

                                <div class="form-group col-12">
                                    <label>Title <span class="text-danger">*</span></label>
                                    <input type="text" id="txtTitle" class="form-control"  name="txtTitle" required>
                                </div>

                                <div class="form-group col-12">
                                    <label>Meta Title <span class="text-danger">*</span></label>
                                    <input type="text" id="txtMetaTitle" class="form-control"  name="txtMetaTitle" required>
                                </div>


                                <div class="form-group col-12">
                                    <label>Slug <span class="text-danger">*</span></label>
                                    <input type="text" id="txtSlug" class="form-control"  name="txtSlug" required>
                                </div>


                                <div class="form-group col-12">
                                    <label>Description <span class="text-danger">*</span></label>
                                    <textarea name="txtDescription" id="txtDescription" class="summernote"></textarea>
                                </div>

                                <div class="form-group col-12">
                                    <label class="col-form-label">Published Date&nbsp;</label>
                                    <input type="datetime-local" name="txtPublishedDate" id="txtPublishedDate" class="form-control">
                                </div>

                                <div class="form-group col-12">
                                    <label>SEO Title</label>
                                    <input type="text" class="form-control" name="txtSeoTitle" id="txtSeoTitle" required>
                                </div>

                                <div class="form-group col-12">
                                    <label>SEO Description</label>
                                    <textarea name="txtSeoDescription" id="txtSeoDescription" cols="30" rows="10" class="form-control text-area-5"></textarea>
                                </div>
                            </div>

                            <div class="row pt-4">
                                <div class="col-12">
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function previewThumnailImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('preview-img');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
};

function previewBannerImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('preview-banner-img');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
};

</script>
@endsection