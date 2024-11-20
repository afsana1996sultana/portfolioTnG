@extends('layout.backend.home')
@section('page')
<style>
    button.additional_menuBtn {
        float: right;
    }
    .card-header {
        text-align: center;
    }
</style>
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Dealer Details</h1>
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
                        <div class="card-header">
                            <h3>Dealer Basic Information</h3>
                        </div>

                        <div class="card-body">
                            <div class="row pb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name"><strong>Name: </strong></label><span> {{ $dealers->name }}</span>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="company_name"><strong>Company Name: </strong></label><span> {{ $dealers->company_name }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row pb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address"><strong>Address : </strong></label><span> {{ $dealers->address }}</span>
                                    </div>
                                </div>
        
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="district"><strong>District : </strong></label><span> {{ $dealers->district }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row pb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="police_station"><strong>Your Area Police Station : </strong></label><span> {{ $dealers->police_station }}</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="notes"><strong>Notes: </strong></label><span> {{ $dealers->notes }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row pb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="phone"><strong>Phone Number</strong></label><span> {{ $dealers->phone }}</span>
                                    </div>
                                </div>
        
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email"><strong>Email</strong></label><span> {{ $dealers->email }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row pb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="passport_img"><strong>Two Copies Passport size photo</strong> <span class="text-danger">*</span></label>
                                        <div class="mb-4">
                                            <!-- Display uploaded images -->
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
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nid"><strong>Nid Card Colour copy</strong></label>
                                        <div class="mb-4">
                                            <!-- Display uploaded images -->
                                            @if (!empty($dealers->nid))
                                                <img src="{{asset($dealers->nid) }}" height="110px" width="150px" alt="">
                                            @else
                                                No Image Available
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row pb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="trade"><strong>Trade License</strong></label>
                                        <div class="mb-4">
                                            <!-- Display uploaded images -->
                                            @if (!empty($dealers->trade_license))
                                                <img src="{{asset($dealers->trade_license) }}" height="110px" width="150px" alt="">
                                            @else
                                                No Image Available
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="tin"><strong>Tin Certificate</strong></label>
                                        <div class="mb-4">
                                            <!-- Display uploaded images -->
                                            @if (!empty($dealers->tin))
                                                <img src="{{asset($dealers->tin) }}" height="110px" width="150px" alt="">
                                            @else
                                                No Image Available
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row pb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="visiting_card"><strong>Visiting Card</strong></label>
                                        <div class="mb-4">
                                            <!-- Display uploaded images -->
                                            @if (!empty($dealers->visiting_card))
                                                <img src="{{asset($dealers->visiting_card) }}" height="110px" width="150px" alt="">
                                            @else
                                                No Image Available
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="did_copy"><strong>Shop Did Copy</strong></label>
                                        <div class="mb-4">
                                            <!-- Display uploaded images -->
                                            @if (!empty($dealers->did_copy))
                                                <img src="{{asset($dealers->did_copy) }}" height="110px" width="150px" alt="">
                                            @else
                                                No Image Available
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection