@extends('layout.backend.home')
@section('page')
<style>
    button.additional_menuBtn {
        float: right;
    }
</style>
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Create Dealer</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<div class="col-auto float-right ml-auto pb-2" >
                        <a href="{{route ('dealer.list') }}"  class="btn btn-success btn-block">Dealer List</a> 
                    </div>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<div class="section-body">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.dealer.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row pb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name"><strong>Name</strong><span class="text-danger">*</span></label>
                                            <input type="text" id="name" name="name" class="form-control"
                                                placeholder="Enter Your Name" value="{{ old('name') }}">
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="company_name"><strong>Company Name</strong><span class="text-danger">*</span></label>
                                            <input type="text" id="company_name" name="company_name" class="form-control"
                                                placeholder="Enter Your CompanyName" value="{{ old('company_name') }}">
                                            @error('company_name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row pb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address"><strong>Address : </strong><span class="text-danger">*</span></label>
                                            <input class="form-control" id="address" type="text" name="address" placeholder="Enter Your Address" value="{{ old('address') }}">
                                            @error('address')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="district"><strong>District : </strong><span class="text-danger">*</span></label>
                                            <input class="form-control" id="district" type="text" name="district" placeholder="Enter Your District" value="{{ old('district') }}">
                                            @error('district')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row pb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="police_station"><strong>Your Area Police Station : </strong><span class="text-danger">*</span></label>
                                            <input class="form-control" id="police_station" type="text" name="police_station" placeholder="Enter Your Police Station">
                                            @error('police_station')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="notes"><strong>Notes: </strong></label>
                                            <input class="form-control" placeholder="Write Notes" type="text" name="notes" id="notes" />
                                            @error('notes')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row pb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone"><strong>Phone Number</strong><span class="text-danger">*</span></label>
                                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Your Phone Number" value="{{ old('phone') }}">
                                            @error('phone')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email"><strong>Email</strong><span class="text-danger">*</span></label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Your Email" value="{{ old('email') }}">
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row pb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-4">
                                                <!-- Display uploaded images -->
                                                @if(!empty($editData->profile_image))
                                                    @foreach($editData->profile_image as $image)
                                                        <img class="rounded avatar-lg" src="{{ url('upload/admin_images/' . $image) }}" alt="Card image cap" width="100px" height="80px;">
                                                    @endforeach
                                                @else
                                                    <img id="showImage3" class="rounded avatar-lg" src="{{ url('img/no_image.jpg') }}" alt="No Image" width="100px" height="80px;">
                                                @endif
                                            </div>
                                            <label for="passport_img"><strong>Two Copies Passport size photo</strong> <span class="text-danger">*</span></label>
                                            <!-- Allow multiple image uploads -->
                                            <input name="passport_img[]" class="form-control" type="file" id="image3" multiple>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-4">
                                                <img id="showImage4" class="rounded avatar-lg"
                                                    src="{{ !empty($editData->profile_image) ? url('upload/admin_images/' . $editData->profile_image) : url('img/no_image.jpg') }}"
                                                    alt="Card image cap" width="100px" height="80px;">
                                            </div>
                                            <label for="nid"><strong>Nid Card Colour copy</strong> <span class="text-danger">*</span></label>
                                            <input name="nid" class="form-control" type="file" id="image4">
                                        </div>
                                    </div>
                                </div>

                                <div class="row pb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-4">
                                                <img id="showImage4" class="rounded avatar-lg"
                                                    src="{{ !empty($editData->profile_image) ? url('upload/admin_images/' . $editData->profile_image) : url('img/no_image.jpg') }}"
                                                    alt="Card image cap" width="100px" height="80px;">
                                            </div>
                                            <label for="trade"><strong>Trade License</strong><span class="text-danger">*</span></label>
                                            <input name="trade_license" class="form-control" type="file" id="image4">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-4">
                                                <img id="showImage3" class="rounded avatar-lg"
                                                    src="{{ !empty($editData->profile_image) ? url('upload/admin_images/' . $editData->profile_image) : url('img/no_image.jpg') }}"
                                                    alt="Card image cap" width="100px" height="80px;">
                                            </div>
                                            <label for="tin"><strong>Tin Certificate</strong><span class="text-danger">*</span></label>
                                            <input name="tin" class="form-control" type="file" id="image3">
                                        </div>
                                    </div>
                                </div>

                                <div class="row pb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-4">
                                                <img id="showImage1" class="rounded avatar-lg"
                                                    src="{{ !empty($editData->profile_image) ? url('upload/admin_images/' . $editData->profile_image) : url('img/no_image.jpg') }}"
                                                    alt="Card image cap" width="100px" height="80px;">
                                            </div>
                                            <label for="image"><strong>Visiting Card : </strong></label>
                                            <input name="visiting_card" class="form-control" type="file" id="image1">
                                            @error('visiting_card')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-4">
                                                <img id="showImage2" class="rounded avatar-lg"
                                                    src="{{ !empty($editData->profile_image) ? url('upload/admin_images/' . $editData->profile_image) : url('img/no_image.jpg') }}"
                                                    alt="Card image cap" width="100px" height="80px;">
                                            </div>
                                            <label for="image"><strong>Shop Did Copy : </strong></label>
                                            <input name="did_copy" class="form-control" type="file" id="image2">
                                            @error('did_copy')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="additional_menuBtn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection