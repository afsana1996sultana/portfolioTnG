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
					<h1 class="m-0">Update Dealer</h1>
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
                            <form method="post" action="{{ route('dealer.update',$dealers->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row pb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name"><strong>Name</strong><span class="text-danger">*</span></label>
                                            <input type="text" id="name" name="name" class="form-control" value="{{ $dealers->name }}">
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="company_name"><strong>Company Name</strong><span class="text-danger">*</span></label>
                                            <input type="text" id="company_name" name="company_name" class="form-control" value="{{ $dealers->company_name }}">
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
                                            <input class="form-control" id="address" type="text" name="address" value="{{ $dealers->address }}">
                                            @error('address')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="district"><strong>District : </strong><span class="text-danger">*</span></label>
                                            <input class="form-control" id="district" type="text" name="district" value="{{ $dealers->district }}">
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
                                            <input class="form-control" id="police_station" type="text" name="police_station" value="{{ $dealers->police_station }}">
                                            @error('police_station')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="notes"><strong>Notes: </strong></label>
                                            <input class="form-control" type="text" name="notes" id="notes" value="{{ $dealers->notes }}"/>
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
                                            <input type="text" id="phone" name="phone" class="form-control" value="{{ $dealers->phone }}">
                                            @error('phone')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email"><strong>Email</strong><span class="text-danger">*</span></label>
                                            <input type="email" id="email" name="email" class="form-control" value="{{ $dealers->email }}">
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
                                                @if (!empty($dealers->passport_img))
                                                    @php
                                                        $images = json_decode($dealers->passport_img, true); // Convert JSON string to array
                                                    @endphp
                                                    @if (!empty($images) && is_array($images))
                                                        <img src="{{ asset($images[0]) }}" height="110px" width="150px" alt="">
                                                        <img src="{{ asset($images[1]) }}" height="110px" width="150px" alt="">
                                                    @else
                                                        No Image Available
                                                    @endif
                                                @endif
                                            </div>
                                            <label for="passport_img"><strong>Two Copies Passport size photo</strong> <span class="text-danger">*</span></label>
                                            <input name="passport_img[]" class="form-control" type="file" id="image3" multiple>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-4">
                                                @if (!empty($dealers->nid))
                                                    <img src="{{ asset($dealers->nid) }}" height="110px" width="150px" alt="">
                                                @else
                                                    No Image Available
                                                @endif
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
                                                @if (!empty($dealers->trade_license))
                                                    <img src="{{ asset($dealers->trade_license) }}" height="110px" width="150px" alt="">
                                                @else
                                                    No Image Available
                                                @endif
                                            </div>
                                            <label for="trade_license"><strong>Trade License</strong> <span class="text-danger">*</span></label>
                                            <input name="trade_license" class="form-control" type="file" id="image4">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-4">
                                                @if (!empty($dealers->tin))
                                                    <img src="{{ asset($dealers->tin) }}" height="110px" width="150px" alt="">
                                                @else
                                                    No Image Available
                                                @endif
                                            </div>
                                            <label for="tin"><strong>Tin Certificate</strong> <span class="text-danger">*</span></label>
                                            <input name="tin" class="form-control" type="file" id="image4">
                                        </div>
                                    </div>
                                </div>

                                <div class="row pb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-4">
                                                @if (!empty($dealers->visiting_card))
                                                    <img src="{{ asset($dealers->visiting_card) }}" height="110px" width="150px" alt="">
                                                @else
                                                    No Image Available
                                                @endif
                                            </div>
                                            <label for="visiting_card"><strong>Visiting Card</strong> <span class="text-danger">*</span></label>
                                            <input name="visiting_card" class="form-control" type="file" id="image1">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-4">
                                                @if (!empty($dealers->did_copy))
                                                    <img src="{{ asset($dealers->did_copy) }}" height="110px" width="150px" alt="">
                                                @else
                                                    No Image Available
                                                @endif
                                            </div>
                                            <label for="did_copy"><strong>Shop Did Copy</strong> <span class="text-danger">*</span></label>
                                            <input name="did_copy" class="form-control" type="file" id="image2">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="additional_menuBtn">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection