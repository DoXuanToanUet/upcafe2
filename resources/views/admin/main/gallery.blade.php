@extends('admin.layouts.app')
@section('title', 'Gallery')
@section('content')

<div class="content-body">
    <div class="container-fluid">
		<div class="row page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Gallery</a></li>
			</ol>
        </div>

        <div class="row">

			<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Gallery</h4>
						<button type="button" class="btn btn-rounded btn-primary new-banner-modal" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-page="6">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
                    </div>
                    <div class="card-body">
						@if($data->count() > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
										<tr>
											<th><strong>#</strong></th>
											<th><strong>Action</strong></th>
										</tr>
									</thead>
									<tbody>
										@foreach($data as $d)
											<tr>
												<td>
													<?php
														$img = asset('/uploads/banner/'.$d->name);
													?>
													<img src="{{$img}}" width="80" height="80">
												</td>
												<td>
													<a class="btn btn-danger shadow btn-xs sharp" onclick="destroy({{$d->id}}, '/admin/banner/destroy/{{$d->id}}', '/admin/gallery');"><i class="fa fa-trash"></i></a>
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