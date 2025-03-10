@extends('layout.backend.home')
@section('page')

<div class="container-fluid">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Dashboard</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-lg-3 col-6">
		  <!-- small box -->
		  <div class="small-box bg-info">
			<div class="inner">
			  <h3>18+</h3>
			  <p>Business Unit</p>
			</div>
			<div class="icon">
			  <i class="ion ion-bag"></i>
			</div>
			<a href="{{url('/businesscategories')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
		  </div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
		  <!-- small box -->
		  <div class="small-box bg-success">
			<div class="inner">
			  <h3>25+<sup style="font-size: 20px"></sup></h3>

			  <p>Services</p>
			</div>
			<div class="icon">
			  <i class="ion ion-stats-bars"></i>
			</div>
			<a href="{{url('/service')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
		  </div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
		  <!-- small box -->
		  <div class="small-box bg-warning">
			<div class="inner">
			  <h3>200+</h3>

			  <p>Our Clients</p>
			</div>
			<div class="icon">
			  <i class="ion ion-person-add"></i>
			</div>
			<a href="{{url('/ourclient')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
		  </div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
		  <!-- small box -->
		  <div class="small-box bg-danger">
			<div class="inner">
			  <h3>1</h3>

			  <p>Product List</p>
			</div>
			<div class="icon">
			  <i class="ion ion-pie-graph"></i>
			</div>
			<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
		  </div>
		</div>
		<!-- ./col -->
	</div>
	<!-- /.row -->
</div><!-- /.container-fluid -->
  @endsection