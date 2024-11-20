@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">All Dealers</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">All Dealers</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

    <!-- /Page Header -->
	<div class="row">
        <div class="col-auto float-right ml-auto pb-2" >
            <a href="{{route ('create.dealer') }}"  class="btn btn-success btn-block"><i class="fa fa-plus"></i>Add Dealer</a> 
        </div>
	</div>
	<!-- /Page Header -->
        <div class="row">
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">SL</th>
					  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Dealer Image</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Company Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Phone</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Email</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Address</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @forelse ($dealers as $key => $dealer)
                        <tr class="odd">
                            <td>{{ $key+1 }}</td>
                            <td>
                                @if (!empty($dealer->passport_img))
                                    @php
                                        $images = json_decode($dealer->passport_img, true); // Convert JSON string to array
                                    @endphp
                                    @if (!empty($images) && is_array($images))
                                        <img src="{{ asset($images[0]) }}" height="110px" width="150px" alt="">
                                    @else
                                        No Image Available
                                    @endif
                                @else
                                    No Image Available
                                @endif
                            </td>
                            <td>{{$dealer->name}}</td>
                            <td>{{$dealer->company_name}}</td>
                            <td>{{$dealer->phone}}</td>
                            <td>{{$dealer->email}}</td>
                            <td>{{$dealer->address}}</td>
                            <td class="text-right py-0 align-middle">
                                <div class="btn-group btn-group-sm">
                                    <a type="button" href="{{route('dealer.show',$dealer->id)}}" class="btn btn-primary"><i class="fas fa-eye"></i> </a>&nbsp;
                                    <a type="button" href="{{route('dealer.edit',$dealer->id)}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> </a>&nbsp;
                                    <button type="button" value="{{$dealer->id}}" class="btn btn-danger" id="dealerDbtn"><i class="fas fa-trash"></i> </button>
                                </div>
                            </td>   
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">No records found</td>
                        </tr>
                    @endforelse
                </tbody>                
            </table>
        </div>
    </div>
</div>

<!-- Delete Dealer Modal -->
<div class="modal custom-modal fade" id="delete_dealer" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Dealer</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-dealer')}}" method="post" >
								@csrf
								@method("DELETE")
								<input type="hidden" id="delete_dealerId" name="d_dealer">
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
<!-- /Delete Dealer Modal -->

<script>
    $(document).ready(function(){
        $(document).on('click','#dealerDbtn',function(){
            var dealer_id = $(this).val();
            $('#delete_dealer').modal('show'); // Change the modal ID here
            $('#delete_dealerId').val(dealer_id);
        });
    });
</script>
@endsection