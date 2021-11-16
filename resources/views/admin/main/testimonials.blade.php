@extends('admin.layouts.app')
@section('title', 'Testimonials')
@section('content')

<div class="content-body">
    <div class="container-fluid">
		<div class="row page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Testimonials</a></li>
			</ol>
        </div>

        <div class="row">
			<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            Testimonials 
						</h4>
						<button type="button" class="btn btn-rounded btn-primary new-banner-modal" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">
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
											<th><strong>Name</strong></th>
                                            <th><strong>Content</strong></th>
											<th><strong>Action</strong></th>
										</tr>
									</thead>
									<tbody>
										@foreach($data as $d)
											<tr>
												<td>
													<?php
														$img = 'https://ui-avatars.com/api/?name='.$d->name;
													?>
													<img src="{{$img}}" width="40" height="40">
												</td>
												<td>
													{{$d->name}}
												</td>
                                                <td>
													{{$d->content}}
												</td>
												<td>
                                                    <div class="dropdown">
														<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a href="javascript:void(0)" class="dropdown-item edit-testimonial" data-bs-toggle="modal" data-bs-target=".edit-testimonial-modal" data-name="{{$d->name}}" data-content="{{$d->content}}" data-id="{{$d->id}}">Edit</a>
															<a class="dropdown-item" onclick="destroy({{$d->id}}, '/admin/testimonials/destroy/{{$d->id}}', '/admin/testimonials');">Delete</a>
														</div>
													</div>
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

<div class="modal fade bd-example-modal-lg testimonial-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="modal-content" id="testimonial">
			@csrf
            <div class="modal-header">
                <h5 class="modal-title">Add Testimonial</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
				<div class="row">
                    <div class="mb-3">
						<label class="form-label">Name*</label>
						<input type="text" class="form-control input-default " placeholder="Name" name="name">
                        <span id="nameErr"></span>
					</div>
					<div class="mb-3">
						<label class="form-label">Content*</label>
						<textarea class="form-control" rows="6" name="content"></textarea>
                        <span id="contentErr"></span>
					</div>
				</div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
		</form>
    </div>
</div>

<div class="modal fade bd-example-modal-lg edit-testimonial-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="modal-content" id="editTestimonial">
			@csrf
            <div class="modal-header">
                <h5 class="modal-title">Edit Testimonial</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
				<div class="row">
                    <div class="mb-3">
						<label class="form-label">Name*</label>
						<input type="text" class="form-control input-default " placeholder="Name" name="name" id="name">
                        <span id="nameErr"></span>
					</div>
					<div class="mb-3">
						<label class="form-label">Content*</label>
						<textarea class="form-control" rows="6" name="content" id="content"></textarea>
                        <span id="contentErr"></span>
					</div>
				</div>
			</div>
            <div class="modal-footer">
                <input type="hidden" id="id" name="id">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
		</form>
    </div>
</div>
@endsection