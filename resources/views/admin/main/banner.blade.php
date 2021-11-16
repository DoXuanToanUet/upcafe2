@extends('admin.layouts.app')
@section('title', 'Banner')
@section('content')

<div class="content-body">
    <div class="container-fluid">
		<div class="row page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Home Page Banners</a></li>
			</ol>
        </div>

        <div class="row">
			<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
							Banner 
						</h4>
						<button type="button" class="btn btn-rounded btn-primary new-banner-modal" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-page="1">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
                    </div>
                    <div class="card-body">
						@if($homeBanner->count() > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
										<tr>
											<th><strong>#</strong></th>
											<th><strong>Title</strong></th>
											<th><strong>Action</strong></th>
										</tr>
									</thead>
									<tbody>
										@foreach($homeBanner as $d)
											<tr>
												<td>
													<?php
														$img = asset('/uploads/banner/'.$d->name);
													?>
													<img src="{{$img}}" width="80" height="80">
												</td>
												<td>
													{{$d->title}}
												</td>
												<td>
													<a class="btn btn-danger shadow btn-xs sharp" onclick="destroy({{$d->id}}, '/admin/banner/destroy/{{$d->id}}', '/admin/home-banner');"><i class="fa fa-trash"></i></a>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						@else
							<div class="center">
								No data found.
							</div>
						@endif
                    </div>
                </div>
            </div>

			<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cafe Banner</h4>
						<button type="button" class="btn btn-rounded btn-primary new-banner-modal" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-page="2">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
                    </div>
                    <div class="card-body">
						@if($homeCafe->count() > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
										<tr>
											<th><strong>#</strong></th>
											<th><strong>Title</strong></th>
											<th><strong>Action</strong></th>
										</tr>
									</thead>
									<tbody>
										@foreach($homeCafe as $d)
											<tr>
												<td>
													<?php
														$img = asset('/uploads/banner/'.$d->name);
													?>
													<img src="{{$img}}" width="80" height="80">
												</td>
												<td>
													{{$d->title}}
												</td>
												<td>
													<a class="btn btn-danger shadow btn-xs sharp" onclick="destroy({{$d->id}}, '/admin/banner/destroy/{{$d->id}}', '/admin/home-banner');"><i class="fa fa-trash"></i></a>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						@else
							<div class="center">
								No data found.
							</div>
						@endif
                    </div>
                </div>
            </div>

			<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Catering Banner</h4>
						<button type="button" class="btn btn-rounded btn-primary new-banner-modal" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-page="3">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
                    </div>
                    <div class="card-body">
						@if($homeCatering->count() > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
										<tr>
											<th><strong>#</strong></th>
											<th><strong>Title</strong></th>
											<th><strong>Action</strong></th>
										</tr>
									</thead>
									<tbody>
										@foreach($homeCatering as $d)
											<tr>
												<td>
													<?php
														$img = asset('/uploads/banner/'.$d->name);
													?>
													<img src="{{$img}}" width="80" height="80">
												</td>
												<td>
													{{$d->title}}
												</td>
												<td>
													<a class="btn btn-danger shadow btn-xs sharp" onclick="destroy({{$d->id}}, '/admin/banner/destroy/{{$d->id}}', '/admin/home-banner');"><i class="fa fa-trash"></i></a>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						@else
							<div class="center">
								No data found.
							</div>
						@endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg banner-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="modal-content" id="banner">
			@csrf
            <div class="modal-header">
                <h5 class="modal-title">Add Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
				<div class="row">
					<div class="input-group mb-3">
						<label class="form-label">Image*</label>
						<div class="input-group">
							<div class="form-file">
								<input type="file" class="form-file-input form-control" name="image" accept="image/png, image/gif, image/jpeg">
							</div>
						</div>
						<span id="imageErr"></span>
					</div>
					<div class="mb-3">
						<label class="form-label">Content</label>
						<input type="text" class="form-control input-default " placeholder="Image content" name="title">
					</div>
				</div>
			</div>
            <div class="modal-footer">
				<input type="hidden" id="page" name="page">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
		</form>
    </div>
</div>
@endsection