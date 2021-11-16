@extends('admin.layouts.app')
@section('title', 'Catering Banner')
@section('content')

<div class="content-body">
    <div class="container-fluid">
		<div class="row page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)">More</a></li>
			</ol>
        </div>

        <div class="row">

            <!-- Island -->
			<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Island</h4>
						<button type="button" class="btn btn-rounded btn-primary add-catering" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-parent="1">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
                    </div>
                    <div class="card-body">
						@if(isset($data['island']) && count($data['island']) > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
										<tr>
											<th><strong>Name</strong></th>
											<th><strong>Content</strong></th>
                                            <th><strong>Additional</strong></th>
											<th><strong>Group of People</strong></th>
											<th><strong>Price per person</strong></th>
											<th><strong>Action</strong></th>
										</tr>
									</thead>
									<tbody>
										@foreach($data['island'] as $d)
											<tr>
												<td>{{$d->name}}</td>
                                                <td>{!! $d->content !!}</td>
                                                <td>
                                                    @if($d->vegetarian)
                                                        Vegetarian,
                                                    @endif
                                                    @if($d->gluten)
                                                        Gluten Free,
                                                    @endif
                                                    @if($d->vegan)
                                                        Vegan
                                                    @endif
                                                </td>
                                                <td>{{$d->group}}</td>
                                                <td>{{ $d->formatted_price }}</td>
												<td>
                                                    <div class="dropdown">
														<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a href="javascript:void(0)" class="dropdown-item edit-catering" data-bs-toggle="modal" data-bs-target=".edit-catering-modal" data-name="{{$d->name}}" data-content="{{$d->content}}" data-id="{{$d->id}}" data-group="{{$d->group}}" data-price="{{$d->price}}" data-parent="{{$d->parent}}" data-vegetarian="{{$d->vegetarian}}" data-gluten="{{$d->gluten}}" data-vegan="{{$d->vegan}}">Edit</a>
															<a class="dropdown-item" onclick="destroy({{$d->id}}, '/admin/catering/destroy/{{$d->id}}', '/admin/catering/more');">Delete</a>
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

            <!-- Island Setups -->
			<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Island Option 1 Setup</h4>
						<button type="button" class="btn btn-rounded btn-primary add-catering" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-parent="2">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
                    </div>
                    <div class="card-body">
						@if(isset($data['island-option-1-setup']) && count($data['island-option-1-setup']) > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
										<tr>
											<th><strong>Name</strong></th>
											<th><strong>Content</strong></th>
                                            <th><strong>Additional</strong></th>
											<th><strong>Group of People</strong></th>
											<th><strong>Price per person</strong></th>
											<th><strong>Action</strong></th>
										</tr>
									</thead>
									<tbody>
										@foreach($data['island-option-1-setup'] as $d)
											<tr>
												<td>{{$d->name}}</td>
                                                <td>{!! $d->content !!}</td>
                                                <td>
                                                    @if($d->vegetarian)
                                                        Vegetarian,
                                                    @endif
                                                    @if($d->gluten)
                                                        Gluten Free,
                                                    @endif
                                                    @if($d->vegan)
                                                        Vegan
                                                    @endif
                                                </td>
                                                <td>{{$d->group}}</td>
                                                <td>{{ $d->formatted_price }}</td>
												<td>
                                                    <div class="dropdown">
														<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a href="javascript:void(0)" class="dropdown-item edit-catering" data-bs-toggle="modal" data-bs-target=".edit-catering-modal" data-name="{{$d->name}}" data-content="{{$d->content}}" data-id="{{$d->id}}" data-group="{{$d->group}}" data-price="{{$d->price}}" data-parent="{{$d->parent}}" data-vegetarian="{{$d->vegetarian}}" data-gluten="{{$d->gluten}}" data-vegan="{{$d->vegan}}">Edit</a>
															<a class="dropdown-item" onclick="destroy({{$d->id}}, '/admin/catering/destroy/{{$d->id}}', '/admin/catering/more');">Delete</a>
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

            <!-- Island Setups -->
			<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Island Option 2 Setup</h4>
						<button type="button" class="btn btn-rounded btn-primary add-catering" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-parent="3">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
                    </div>
                    <div class="card-body">
						@if(isset($data['island-option-2-setup']) && count($data['island-option-2-setup']) > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
										<tr>
											<th><strong>Name</strong></th>
											<th><strong>Content</strong></th>
                                            <th><strong>Additional</strong></th>
											<th><strong>Group of People</strong></th>
											<th><strong>Price per person</strong></th>
											<th><strong>Action</strong></th>
										</tr>
									</thead>
									<tbody>
										@foreach($data['island-option-2-setup'] as $d)
											<tr>
												<td>{{$d->name}}</td>
                                                <td>{!! $d->content !!}</td>
                                                <td>
                                                    @if($d->vegetarian)
                                                        Vegetarian,
                                                    @endif
                                                    @if($d->gluten)
                                                        Gluten Free,
                                                    @endif
                                                    @if($d->vegan)
                                                        Vegan
                                                    @endif
                                                </td>
                                                <td>{{$d->group}}</td>
                                                <td>{{ $d->formatted_price }}</td>
												<td>
                                                    <div class="dropdown">
														<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a href="javascript:void(0)" class="dropdown-item edit-catering" data-bs-toggle="modal" data-bs-target=".edit-catering-modal" data-name="{{$d->name}}" data-content="{{$d->content}}" data-id="{{$d->id}}" data-group="{{$d->group}}" data-price="{{$d->price}}" data-parent="{{$d->parent}}" data-vegetarian="{{$d->vegetarian}}" data-gluten="{{$d->gluten}}" data-vegan="{{$d->vegan}}">Edit</a>
															<a class="dropdown-item" onclick="destroy({{$d->id}}, '/admin/catering/destroy/{{$d->id}}', '/admin/catering/more');">Delete</a>
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

            <!-- Island Additional Options -->
			<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Island Option 1 Additional Options</h4>
						<button type="button" class="btn btn-rounded btn-primary add-catering" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-parent="4">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
                    </div>
                    <div class="card-body">
						@if(isset($data['island-option-1-additional-options']) && count($data['island-option-1-additional-options']) > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
										<tr>
											<th><strong>Name</strong></th>
											<th><strong>Content</strong></th>
                                            <th><strong>Additional</strong></th>
											<th><strong>Group of People</strong></th>
											<th><strong>Price per person</strong></th>
											<th><strong>Action</strong></th>
										</tr>
									</thead>
									<tbody>
										@foreach($data['island-option-1-additional-options'] as $d)
											<tr>
												<td>{{$d->name}}</td>
                                                <td>{!! $d->content !!}</td>
                                                <td>
                                                    @if($d->vegetarian)
                                                        Vegetarian,
                                                    @endif
                                                    @if($d->gluten)
                                                        Gluten Free,
                                                    @endif
                                                    @if($d->vegan)
                                                        Vegan
                                                    @endif
                                                </td>
                                                <td>{{$d->group}}</td>
                                                <td>{{ $d->formatted_price }}</td>
												<td>
                                                    <div class="dropdown">
														<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a href="javascript:void(0)" class="dropdown-item edit-catering" data-bs-toggle="modal" data-bs-target=".edit-catering-modal" data-name="{{$d->name}}" data-content="{{$d->content}}" data-id="{{$d->id}}" data-group="{{$d->group}}" data-price="{{$d->price}}" data-parent="{{$d->parent}}" data-vegetarian="{{$d->vegetarian}}" data-gluten="{{$d->gluten}}" data-vegan="{{$d->vegan}}">Edit</a>
															<a class="dropdown-item" onclick="destroy({{$d->id}}, '/admin/catering/destroy/{{$d->id}}', '/admin/catering/more');">Delete</a>
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

            <!-- Graze -->
			<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Graze</h4>
						<button type="button" class="btn btn-rounded btn-primary add-catering" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-parent="5">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
                    </div>
                    <div class="card-body">
						@if(isset($data['graze']) && count($data['graze']) > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
										<tr>
											<th><strong>Name</strong></th>
											<th><strong>Content</strong></th>
                                            <th><strong>Additional</strong></th>
											<th><strong>Group of People</strong></th>
											<th><strong>Price per person</strong></th>
											<th><strong>Action</strong></th>
										</tr>
									</thead>
									<tbody>
										@foreach($data['graze'] as $d)
											<tr>
												<td>{{$d->name}}</td>
                                                <td>{!! $d->content !!}</td>
                                                <td>
                                                    @if($d->vegetarian)
                                                        Vegetarian,
                                                    @endif
                                                    @if($d->gluten)
                                                        Gluten Free,
                                                    @endif
                                                    @if($d->vegan)
                                                        Vegan
                                                    @endif
                                                </td>
                                                <td>{{$d->group}}</td>
												<td>{{ $d->formatted_price }}</td>
												<td>
                                                    <div class="dropdown">
														<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a href="javascript:void(0)" class="dropdown-item edit-catering" data-bs-toggle="modal" data-bs-target=".edit-catering-modal" data-name="{{$d->name}}" data-content="{{$d->content}}" data-id="{{$d->id}}" data-group="{{$d->group}}" data-price="{{$d->price}}" data-parent="{{$d->parent}}" data-vegetarian="{{$d->vegetarian}}" data-gluten="{{$d->gluten}}" data-vegan="{{$d->vegan}}">Edit</a>
															<a class="dropdown-item" onclick="destroy({{$d->id}}, '/admin/catering/destroy/{{$d->id}}', '/admin/catering/more');">Delete</a>
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

            <!-- Funeral -->
			<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Funeral</h4>
						<button type="button" class="btn btn-rounded btn-primary add-catering" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-parent="6">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
                    </div>
                    <div class="card-body">
						@if(isset($data['funeral']) && count($data['funeral']) > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
										<tr>
											<th><strong>Name</strong></th>
											<th><strong>Content</strong></th>
											<th><strong>Additional</strong></th>
											<th><strong>Group of People</strong></th>
											<th><strong>Price per person</strong></th>
											<th><strong>Action</strong></th>
										</tr>
									</thead>
									<tbody>
										@foreach($data['funeral'] as $d)
											<tr>
												<td>{{$d->name}}</td>
                                                <td>{!! $d->content !!}</td>
                                                <td>
                                                    @if($d->vegetarian)
                                                        Vegetarian,
                                                    @endif
                                                    @if($d->gluten)
                                                        Gluten Free,
                                                    @endif
                                                    @if($d->vegan)
                                                        Vegan
                                                    @endif
                                                </td>
                                                <td>{{$d->group}}</td>
                                                <td>{{ $d->formatted_price }}</td>
												<td>
                                                    <div class="dropdown">
														<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a href="javascript:void(0)" class="dropdown-item edit-catering" data-bs-toggle="modal" data-bs-target=".edit-catering-modal" data-name="{{$d->name}}" data-content="{{$d->content}}" data-id="{{$d->id}}" data-group="{{$d->group}}" data-price="{{$d->price}}" data-parent="{{$d->parent}}" data-vegetarian="{{$d->vegetarian}}" data-gluten="{{$d->gluten}}" data-vegan="{{$d->vegan}}">Edit</a>
															<a class="dropdown-item" onclick="destroy({{$d->id}}, '/admin/catering/destroy/{{$d->id}}', '/admin/catering/more');">Delete</a>
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

            <!-- Funeral Option 1 Setup -->
			<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Funeral Option 1 Setup</h4>
						<button type="button" class="btn btn-rounded btn-primary add-catering" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-parent="7">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
                    </div>
                    <div class="card-body">
						@if(isset($data['funeral-option-1-setup']) && count($data['funeral-option-1-setup']) > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
										<tr>
											<th><strong>Name</strong></th>
											<th><strong>Content</strong></th>
											<th><strong>Additional</strong></th>
											<th><strong>Group of People</strong></th>
											<th><strong>Price per person</strong></th>
											<th><strong>Action</strong></th>
										</tr>
									</thead>
									<tbody>
										@foreach($data['funeral-option-1-setup'] as $d)
											<tr>
												<td>{{$d->name}}</td>
                                                <td>{!! $d->content !!}</td>
                                                <td>
                                                    @if($d->vegetarian)
                                                        Vegetarian,
                                                    @endif
                                                    @if($d->gluten)
                                                        Gluten Free,
                                                    @endif
                                                    @if($d->vegan)
                                                        Vegan
                                                    @endif
                                                </td>
                                                <td>{{$d->group}}</td>
                                                <td>{{ $d->formatted_price }}</td>
												<td>
                                                    <div class="dropdown">
														<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a href="javascript:void(0)" class="dropdown-item edit-catering" data-bs-toggle="modal" data-bs-target=".edit-catering-modal" data-name="{{$d->name}}" data-content="{{$d->content}}" data-id="{{$d->id}}" data-group="{{$d->group}}" data-price="{{$d->price}}" data-parent="{{$d->parent}}" data-vegetarian="{{$d->vegetarian}}" data-gluten="{{$d->gluten}}" data-vegan="{{$d->vegan}}">Edit</a>
															<a class="dropdown-item" onclick="destroy({{$d->id}}, '/admin/catering/destroy/{{$d->id}}', '/admin/catering/more');">Delete</a>
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

            <!-- Funeral Option 2 Setup -->
			<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Funeral Option 2 Setup</h4>
						<button type="button" class="btn btn-rounded btn-primary add-catering" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-parent="8">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
                    </div>
                    <div class="card-body">
						@if(isset($data['funeral-option-2-setup']) && count($data['funeral-option-2-setup']) > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
										<tr>
											<th><strong>Name</strong></th>
											<th><strong>Content</strong></th>
											<th><strong>Additional</strong></th>
											<th><strong>Group of People</strong></th>
											<th><strong>Price per person</strong></th>
											<th><strong>Action</strong></th>
										</tr>
									</thead>
									<tbody>
										@foreach($data['funeral-option-2-setup'] as $d)
											<tr>
												<td>{{$d->name}}</td>
                                                <td>{!! $d->content !!}</td>
                                                <td>
                                                    @if($d->vegetarian)
                                                        Vegetarian,
                                                    @endif
                                                    @if($d->gluten)
                                                        Gluten Free,
                                                    @endif
                                                    @if($d->vegan)
                                                        Vegan
                                                    @endif
                                                </td>
                                                <td>{{$d->group}}</td>
                                                <td>{{ $d->formatted_price }}</td>
												<td>
                                                    <div class="dropdown">
														<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a href="javascript:void(0)" class="dropdown-item edit-catering" data-bs-toggle="modal" data-bs-target=".edit-catering-modal" data-name="{{$d->name}}" data-content="{{$d->content}}" data-id="{{$d->id}}" data-group="{{$d->group}}" data-price="{{$d->price}}" data-parent="{{$d->parent}}" data-vegetarian="{{$d->vegetarian}}" data-gluten="{{$d->gluten}}" data-vegan="{{$d->vegan}}">Edit</a>
															<a class="dropdown-item" onclick="destroy({{$d->id}}, '/admin/catering/destroy/{{$d->id}}', '/admin/catering/more');">Delete</a>
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

            <!-- Funeral Option 3 Setup -->
			<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Funeral Option 3 Setup</h4>
						<button type="button" class="btn btn-rounded btn-primary add-catering" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-parent="9">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
                    </div>
                    <div class="card-body">
						@if(isset($data['funeral-option-3-setup']) && count($data['funeral-option-3-setup']) > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
										<tr>
											<th><strong>Name</strong></th>
											<th><strong>Content</strong></th>
											<th><strong>Additional</strong></th>
											<th><strong>Group of People</strong></th>
											<th><strong>Price per person</strong></th>
											<th><strong>Action</strong></th>
										</tr>
									</thead>
									<tbody>
										@foreach($data['funeral-option-3-setup'] as $d)
											<tr>
												<td>{{$d->name}}</td>
                                                <td>{!! $d->content !!}</td>
                                                <td>
                                                    @if($d->vegetarian)
                                                        Vegetarian,
                                                    @endif
                                                    @if($d->gluten)
                                                        Gluten Free,
                                                    @endif
                                                    @if($d->vegan)
                                                        Vegan
                                                    @endif
                                                </td>
                                                <td>{{$d->group}}</td>
                                                <td>{{ $d->formatted_price }}</td>
												<td>
                                                    <div class="dropdown">
														<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a href="javascript:void(0)" class="dropdown-item edit-catering" data-bs-toggle="modal" data-bs-target=".edit-catering-modal" data-name="{{$d->name}}" data-content="{{$d->content}}" data-id="{{$d->id}}" data-group="{{$d->group}}" data-price="{{$d->price}}" data-parent="{{$d->parent}}" data-vegetarian="{{$d->vegetarian}}" data-gluten="{{$d->gluten}}" data-vegan="{{$d->vegan}}">Edit</a>
															<a class="dropdown-item" onclick="destroy({{$d->id}}, '/admin/catering/destroy/{{$d->id}}', '/admin/catering/more');">Delete</a>
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

            <!-- High Tea -->
			<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">High Tea</h4>
						<button type="button" class="btn btn-rounded btn-primary add-catering" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-parent="10">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
                    </div>
                    <div class="card-body">
						@if(isset($data['high-tea']) && count($data['high-tea']) > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
										<tr>
											<th><strong>Name</strong></th>
											<th><strong>Content</strong></th>
											<th><strong>Additional</strong></th>
											<th><strong>Group of People</strong></th>
											<th><strong>Price per person</strong></th>
											<th><strong>Action</strong></th>
										</tr>
									</thead>
									<tbody>
										@foreach($data['high-tea'] as $d)
											<tr>
												<td>{{$d->name}}</td>
                                                <td>{!! $d->content !!}</td>
                                                <td>
                                                    @if($d->vegetarian)
                                                        Vegetarian,
                                                    @endif
                                                    @if($d->gluten)
                                                        Gluten Free,
                                                    @endif
                                                    @if($d->vegan)
                                                        Vegan
                                                    @endif
                                                </td>
                                                <td>{{$d->group}}</td>
                                                <td>{{ $d->formatted_price }}</td>
												<td>
                                                    <div class="dropdown">
														<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a href="javascript:void(0)" class="dropdown-item edit-catering" data-bs-toggle="modal" data-bs-target=".edit-catering-modal" data-name="{{$d->name}}" data-content="{{$d->content}}" data-id="{{$d->id}}" data-group="{{$d->group}}" data-price="{{$d->price}}" data-parent="{{$d->parent}}" data-vegetarian="{{$d->vegetarian}}" data-gluten="{{$d->gluten}}" data-vegan="{{$d->vegan}}">Edit</a>
															<a class="dropdown-item" onclick="destroy({{$d->id}}, '/admin/catering/destroy/{{$d->id}}', '/admin/catering/more');">Delete</a>
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

            <!-- High Tea Additional Options -->
			<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">High Tea Additional Options</h4>
						<button type="button" class="btn btn-rounded btn-primary add-catering" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-parent="11">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
                    </div>
                    <div class="card-body">
						@if(isset($data['high-tea-additional-options']) && count($data['high-tea-additional-options']) > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
										<tr>
											<th><strong>Name</strong></th>
											<th><strong>Content</strong></th>
											<th><strong>Additional</strong></th>
											<th><strong>Group of People</strong></th>
											<th><strong>Price per person</strong></th>
											<th><strong>Action</strong></th>
										</tr>
									</thead>
									<tbody>
										@foreach($data['high-tea-additional-options'] as $d)
											<tr>
												<td>{{$d->name}}</td>
                                                <td>{!! $d->content !!}</td>
                                                <td>
                                                    @if($d->vegetarian)
                                                        Vegetarian,
                                                    @endif
                                                    @if($d->gluten)
                                                        Gluten Free,
                                                    @endif
                                                    @if($d->vegan)
                                                        Vegan
                                                    @endif
                                                </td>
                                                <td>{{$d->group}}</td>
                                                <td>{{ $d->formatted_price }}</td>
												<td>
                                                    <div class="dropdown">
														<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
															<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
														</button>
														<div class="dropdown-menu">
															<a href="javascript:void(0)" class="dropdown-item edit-catering" data-bs-toggle="modal" data-bs-target=".edit-catering-modal" data-name="{{$d->name}}" data-content="{{$d->content}}" data-id="{{$d->id}}" data-group="{{$d->group}}" data-price="{{$d->price}}" data-parent="{{$d->parent}}" data-vegetarian="{{$d->vegetarian}}" data-gluten="{{$d->gluten}}" data-vegan="{{$d->vegan}}">Edit</a>
															<a class="dropdown-item" onclick="destroy({{$d->id}}, '/admin/catering/destroy/{{$d->id}}', '/admin/catering/more');">Delete</a>
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

			<!-- Platters -->
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Platters</h4>
						<button type="button" class="btn btn-rounded btn-primary add-catering" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-parent="12">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
					</div>
					<div class="card-body">
						@if(isset($data['platters']) && count($data['platters']) > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
									<tr>
										<th><strong>Name</strong></th>
										<th><strong>Content</strong></th>
										<th><strong>Additional</strong></th>
										<th><strong>Group of People</strong></th>
										<th><strong>Price per person</strong></th>
										<th><strong>Action</strong></th>
									</tr>
									</thead>
									<tbody>
									@foreach($data['platters'] as $d)
										<tr>
											<td>{{$d->name}}</td>
											<td>{!! $d->content !!}</td>
											<td>
												@if($d->vegetarian)
													Vegetarian,
												@endif
												@if($d->gluten)
													Gluten Free,
												@endif
												@if($d->vegan)
													Vegan
												@endif
											</td>
											<td>{{$d->group}}</td>
											<td>{{ $d->formatted_price }}</td>
											<td>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
														<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a href="javascript:void(0)" class="dropdown-item edit-catering" data-bs-toggle="modal" data-bs-target=".edit-catering-modal" data-name="{{$d->name}}" data-content="{{$d->content}}" data-id="{{$d->id}}" data-group="{{$d->group}}" data-price="{{$d->price}}" data-parent="{{$d->parent}}" data-vegetarian="{{$d->vegetarian}}" data-gluten="{{$d->gluten}}" data-vegan="{{$d->vegan}}">Edit</a>
														<a class="dropdown-item" onclick="destroy({{$d->id}}, '/admin/catering/destroy/{{$d->id}}', '/admin/catering/more');">Delete</a>
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

			<!-- Platters WALK & FORK -->
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Platters WALK & FORK</h4>
						<button type="button" class="btn btn-rounded btn-primary add-catering" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-parent="13">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
					</div>
					<div class="card-body">
						@if(isset($data['platters-walk-and-fork']) && count($data['platters-walk-and-fork']) > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
									<tr>
										<th><strong>Name</strong></th>
										<th><strong>Content</strong></th>
										<th><strong>Additional</strong></th>
										<th><strong>Group of People</strong></th>
										<th><strong>Price per person</strong></th>
										<th><strong>Action</strong></th>
									</tr>
									</thead>
									<tbody>
									@foreach($data['platters-walk-and-fork'] as $d)
										<tr>
											<td>{{$d->name}}</td>
											<td>{!! $d->content !!}</td>
											<td>
												@if($d->vegetarian)
													Vegetarian,
												@endif
												@if($d->gluten)
													Gluten Free,
												@endif
												@if($d->vegan)
													Vegan
												@endif
											</td>
											<td>{{$d->group}}</td>
											<td>{{ $d->formatted_price }}</td>
											<td>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
														<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a href="javascript:void(0)" class="dropdown-item edit-catering" data-bs-toggle="modal" data-bs-target=".edit-catering-modal" data-name="{{$d->name}}" data-content="{{$d->content}}" data-id="{{$d->id}}" data-group="{{$d->group}}" data-price="{{$d->price}}" data-parent="{{$d->parent}}" data-vegetarian="{{$d->vegetarian}}" data-gluten="{{$d->gluten}}" data-vegan="{{$d->vegan}}">Edit</a>
														<a class="dropdown-item" onclick="destroy({{$d->id}}, '/admin/catering/destroy/{{$d->id}}', '/admin/catering/more');">Delete</a>
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

			<!-- Xmas Themed Finger Food Style Setup -->
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Xmas Themed</h4>
						<button type="button" class="btn btn-rounded btn-primary add-catering" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-parent="14">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
					</div>
					<div class="card-body">
						@if(isset($data['xmas-themed']) && count($data['xmas-themed']) > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
									<tr>
										<th><strong>Name</strong></th>
										<th><strong>Content</strong></th>
										<th><strong>Additional</strong></th>
										<th><strong>Group of People</strong></th>
										<th><strong>Price per person</strong></th>
										<th><strong>Action</strong></th>
									</tr>
									</thead>
									<tbody>
									@foreach($data['xmas-themed'] as $d)
										<tr>
											<td>{{$d->name}}</td>
											<td>{!! $d->content !!}</td>
											<td>
												@if($d->vegetarian)
													Vegetarian,
												@endif
												@if($d->gluten)
													Gluten Free,
												@endif
												@if($d->vegan)
													Vegan
												@endif
											</td>
											<td>{{$d->group}}</td>
											<td>{{ $d->formatted_price }}</td>
											<td>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
														<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a href="javascript:void(0)" class="dropdown-item edit-catering" data-bs-toggle="modal" data-bs-target=".edit-catering-modal" data-name="{{$d->name}}" data-content="{{$d->content}}" data-id="{{$d->id}}" data-group="{{$d->group}}" data-price="{{$d->price}}" data-parent="{{$d->parent}}" data-vegetarian="{{$d->vegetarian}}" data-gluten="{{$d->gluten}}" data-vegan="{{$d->vegan}}">Edit</a>
														<a class="dropdown-item" onclick="destroy({{$d->id}}, '/admin/catering/destroy/{{$d->id}}', '/admin/catering/more');">Delete</a>
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

			<!-- Xmas Themed -->
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Xmas Themed Finger Food Style Setup</h4>
						<button type="button" class="btn btn-rounded btn-primary add-catering" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-parent="15">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
					</div>
					<div class="card-body">
						@if(isset($data['xmas-themed-finger-food-style-setup']) && count($data['xmas-themed-finger-food-style-setup']) > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
									<tr>
										<th><strong>Name</strong></th>
										<th><strong>Content</strong></th>
										<th><strong>Additional</strong></th>
										<th><strong>Group of People</strong></th>
										<th><strong>Price per person</strong></th>
										<th><strong>Action</strong></th>
									</tr>
									</thead>
									<tbody>
									@foreach($data['xmas-themed-finger-food-style-setup'] as $d)
										<tr>
											<td>{{$d->name}}</td>
											<td>{!! $d->content !!}</td>
											<td>
												@if($d->vegetarian)
													Vegetarian,
												@endif
												@if($d->gluten)
													Gluten Free,
												@endif
												@if($d->vegan)
													Vegan
												@endif
											</td>
											<td>{{$d->group}}</td>
											<td>{{ $d->formatted_price }}</td>
											<td>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
														<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a href="javascript:void(0)" class="dropdown-item edit-catering" data-bs-toggle="modal" data-bs-target=".edit-catering-modal" data-name="{{$d->name}}" data-content="{{$d->content}}" data-id="{{$d->id}}" data-group="{{$d->group}}" data-price="{{$d->price}}" data-parent="{{$d->parent}}" data-vegetarian="{{$d->vegetarian}}" data-gluten="{{$d->gluten}}" data-vegan="{{$d->vegan}}">Edit</a>
														<a class="dropdown-item" onclick="destroy({{$d->id}}, '/admin/catering/destroy/{{$d->id}}', '/admin/catering/more');">Delete</a>
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

			<!-- Xmas Themed Sweet Platter Additional Options -->
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Xmas Themed Sweet Platter Additional Options</h4>
						<button type="button" class="btn btn-rounded btn-primary add-catering" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-parent="16">
							<span class="btn-icon-start text-primary">
								<i class="fa fa-plus color-primary"></i>
                        	</span>
							Add
						</button>
					</div>
					<div class="card-body">
						@if(isset($data['xmas-themed-sweet-platter-additional-options']) && count($data['xmas-themed-sweet-platter-additional-options']) > 0)
							<div class="table-responsive">
								<table class="table table-responsive-md">
									<thead>
									<tr>
										<th><strong>Name</strong></th>
										<th><strong>Content</strong></th>
										<th><strong>Additional</strong></th>
										<th><strong>Group of People</strong></th>
										<th><strong>Price per person</strong></th>
										<th><strong>Action</strong></th>
									</tr>
									</thead>
									<tbody>
									@foreach($data['xmas-themed-sweet-platter-additional-options'] as $d)
										<tr>
											<td>{{$d->name}}</td>
											<td>{!! $d->content !!}</td>
											<td>
												@if($d->vegetarian)
													Vegetarian,
												@endif
												@if($d->gluten)
													Gluten Free,
												@endif
												@if($d->vegan)
													Vegan
												@endif
											</td>
											<td>{{$d->group}}</td>
											<td>{{ $d->formatted_price }}</td>
											<td>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
														<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a href="javascript:void(0)" class="dropdown-item edit-catering" data-bs-toggle="modal" data-bs-target=".edit-catering-modal" data-name="{{$d->name}}" data-content="{{$d->content}}" data-id="{{$d->id}}" data-group="{{$d->group}}" data-price="{{$d->price}}" data-parent="{{$d->parent}}" data-vegetarian="{{$d->vegetarian}}" data-gluten="{{$d->gluten}}" data-vegan="{{$d->vegan}}">Edit</a>
														<a class="dropdown-item" onclick="destroy({{$d->id}}, '/admin/catering/destroy/{{$d->id}}', '/admin/catering/more');">Delete</a>
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

<div class="modal fade bd-example-modal-lg catering-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="modal-content" id="catering">
			@csrf
            <div class="modal-header">
                <h5 class="modal-title">Add Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
				<div class="row">
					<div class="col-12 mb-3">
						<label class="form-label">Name*</label>
						<input type="text" class="form-control input-default " placeholder="Name" name="name">
                        <span id="nameErr"></span>
					</div>
                    <div class="col-12 mb-3">
						<label class="form-label">Content</label>
						<textarea name="content" id="editor"></textarea>
					</div>
                    <div class="col-xs-12 col-6 mb-2">
						<label class="form-label">Group of People</label>
						<input type="number" class="form-control input-default " placeholder="10" name="group">
					</div>
                    <div class="col-xs-12 col-6 mb-2">
						<label class="form-label">Price per person</label>
						<input type="number" class="form-control input-default " placeholder="10.00" name="price" step="0.1">
						<div class="form-check form-check-inline">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input price_on_request" name="price_on_request" value="1"><small>Price on request</small>
							</label>
						</div>
					</div>
                    <div class="col-xs-12 mb-3">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="1" name="vegetarian">Vegetarian
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="1" name="gluten">Gluten Free
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="1" name="vegan">Vegan
                            </label>
                        </div>
                    </div>
				</div>
			</div>
            <div class="modal-footer">
                <input type="hidden" name="grandparent" value="more">
                <input type="hidden" name="parent" id="parent">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
		</form>
    </div>
</div>

<div class="modal fade bd-example-modal-lg edit-catering-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="modal-content" id="editCatering">
			@csrf
            <div class="modal-header">
                <h5 class="modal-title">Edit Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
				<div class="row">
					<div class="col-12 mb-3">
						<label class="form-label">Name*</label>
						<input type="text" class="form-control input-default " placeholder="Name" name="name" id="name">
                        <span id="nameErr"></span>
					</div>
                    <div class="col-12 mb-3">
						<label class="form-label">Content</label>
						<textarea name="content" id="content"></textarea>
					</div>
                    <div class="col-xs-12 col-6 mb-3">
						<label class="form-label">Group of People</label>
						<input type="number" class="form-control input-default " placeholder="10" name="group" id="group">
					</div>
                    <div class="col-xs-12 col-6 mb-3">
						<label class="form-label">Price per person</label>
						<input type="number" class="form-control input-default " placeholder="10.00" name="price" step="0.01" id="price">
						<div class="form-check form-check-inline">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input price_on_request" name="price_on_request" id="price_on_request"><small>Price on request</small>
							</label>
						</div>
					</div>
                    <div class="col-xs-12 mb-3">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="1" name="vegetarian" id="vegetarian">Vegetarian
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="1" name="gluten" id="gluten">Gluten Free
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="1" name="vegan" id="vegan">Vegan
                            </label>
                        </div>
                    </div>
				</div>
			</div>
            <div class="modal-footer">
                <input type="hidden" name="grandparent" value="more">
                <input type="hidden" name="parent" id="parent">
                <input type="hidden" name="id" id="id">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
		</form>
    </div>
</div>

<?php
    $ckeditor = true;
?>
@endsection