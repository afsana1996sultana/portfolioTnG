@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Edit Blog</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Edit Blog</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
    <div class="section-body">
        <a href="{{url('all-blog')}}" class="btn btn-primary"><i class="fas fa-list"></i> All Blog</a>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                <div class="card-body">
                    <form action="{{url('all-blog/'.$allblog->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')                        
                        <div class="row">
                            <div class="form-group col-12">
                                <label>Thumbnail Image Preview</label>
                                <div>
                                    <img id="preview-img" src="{{asset('public/img/'.$allblog->blog_img)}}" alt="" sizes="" srcset="" height="120px" width="160px"> 
                                </div>
                            </div>

                            <div class="form-group col-12">
                                <label>Thumnail Image <span class="text-danger">*</span></label>
                                <input type="file" class="form-control-file"  name="file_blog_img" onchange="previewThumnailImage(event)">
                            </div>


                            <div class="form-group col-12">
                                <label>Banner Image Preview</label>
                                <div>
                                    <img id="preview-banner-img" src="{{asset('public/img/'.$allblog->banner_img)}}" alt="" height="120px" width="160px">
                                </div>
                            </div>

                            <div class="form-group col-12">
                                <label>Banner Image <span class="text-danger">*</span></label>
                                <input type="file" class="form-control-file"  name="file_banner_img" onchange="previewBannerImage(event)">
                            </div>

                            <div class="form-group col-12">
                                <label>Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control"  name="txtTitle" value="{{$allblog->title}}">
                            </div>

                            <div class="form-group col-12">
                                <label>Slug <span class="text-danger">*</span></label>
                                <input type="text" class="form-control"  name="txtSlug" value="{{$allblog->slug}}">
                            </div>

                            <div class="form-group col-12">
                                <label>Description <span class="text-danger">*</span></label>
                                <textarea name="txtDescription" class="summernote">{{$allblog->description}}</textarea>
                            </div>

                            <div class="form-group col-12">
                                <label class="col-form-label">Published Date&nbsp;</label>
                                <input type="datetime-local" name="txtPublishedDate" class="form-control datetimepicker-input" value="{{$allblog->published_date}}">
                            </div>


                            <div class="form-group col-12">
                                <label>SEO Title</label>
                                <input type="text" class="form-control" name="txtSeoTitle" value="{{$allblog->seo_title}}">
                            </div>

                            <div class="form-group col-12">
                                <label>SEO Description</label>
                                <textarea name="txtSeoDescription" id="txtSeoDescription" cols="30" rows="10" class="form-control text-area-5">{{$allblog->seo_description}}</textarea>
                            </div>
                        </div>

                        <div class="row pt-4">
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
@endsection