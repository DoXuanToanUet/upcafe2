@extends('admin.layouts.app')
@section('title', 'Site Settings')
@section('content')

<div class="content-body">
    <div class="container-fluid">
		<div class="row page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Site Settings</a></li>
			</ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Site Settings</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form id="site">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Email*</label>
                                    <input type="text" class="form-control" name="email" value="{{$site->email}}">
                                    <span id="emailErr"></span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Contact Number*</label>
                                    <input type="text" class="form-control" name="contact" value="{{$site->contact}}">
                                    <span id="contactErr"></span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Address*</label>
                                    <input type="text" class="form-control" name="address" value="{{$site->address}}">
                                    <span id="addressErr"></span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Short About</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="shortinfo" rows="3">{{$site->shortinfo}}</textarea>

                                    <span id="addressErr"></span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Logo*</label>
                                    <input type="file" class="form-control" name="logo" accept="image/png, image/gif, image/jpeg">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="{{$site->facebook}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" value="{{$site->instagram}}">
                                </div>   
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </div>
</div>

@endsection