@extends('admin.layouts.app')
@section('title', 'Order Details')
@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Order Details</a></li>
                </ol>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Order Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive order-details-table">
                                <table id="orders-table" class="display" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Order Date/Time</th>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Location</th>
                                        <th>Order Type</th>
                                        <th>Order Value</th>
                                        <th>Status</th>

                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        @php
                                            if ($order->status == 'complete') {
                                                $badge_class = 'badge-success';
                                                $text_class = 'text-success';
                                            } elseif ($order->status == 'declined') {
                                                $badge_class = 'badge-danger';
                                                $text_class = 'text-danger';
                                            } elseif ($order->status == 'cancelled') {
                                                $badge_class = 'badge-secondary';
                                                $text_class = 'text-secondary';
                                            } else {
                                                $badge_class = 'badge-warning';
                                                $text_class = 'text-warning';
                                            }
                                        @endphp
                                        <tr>
                                            <td>#{{ $order->id }}</td>
                                            <td>{{ $order->created_at->format('d-m-Y') . ' ' . $order->created_at->format('h:i A') }}</td>
                                            <td>{{ $order->name }}</td>
                                            <td>{{ $order->contact }}</td>
                                            <td>{{ $order->email }}</td>
                                            <td>{{ $order->order_type == 'delivery' ? ($order->street . ',' . $order->city) : '' }}</td>
                                            <td>{{ ucfirst($order->order_type) }}</td>
                                            <td>${{ $order->order_value }}</td>
                                            <td>
                                            <span class="badge light {{ $badge_class }}">
														<i class="fa fa-circle {{ $text_class }} me-1"></i>
														{{ $order->status }}
													</span>
                                            </td>

                                            <td>
                                                <div class="dropdown ms-auto text-center">
                                                    <div class="btn-link" data-bs-toggle="dropdown">
                                                        <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                             version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">

                                                        <a class="dropdown-item view-details" href="#"
                                                           data-order="{{ $order->id }}" data-bs-toggle="modal">View
                                                            Details</a>
                                                        @if($order->status == 'complete')
                                                            <a class="dropdown-item mark-pending" href="#"
                                                               data-order="{{ $order->id }}">Mark as Pending</a>
                                                            <a class="dropdown-item mark-declined" href="#"
                                                               data-order="{{ $order->id }}">Mark as Declined</a>
                                                        @elseif($order->status == 'pending')
                                                            <a class="dropdown-item mark-complete" href="#"
                                                               data-order="{{ $order->id }}">Mark as Complete</a>
                                                            <a class="dropdown-item mark-declined" href="#"
                                                               data-order="{{ $order->id }}">Mark as Declined</a>
                                                        @else
                                                            <a class="dropdown-item mark-pending" href="#"
                                                               data-order="{{ $order->id }}">Mark as Pending</a>
                                                            <a class="dropdown-item mark-complete" href="#"
                                                               data-order="{{ $order->id }}">Mark as Complete</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">

                        <tbody>
                        <tr>
                            <th>Order ID:</th>
                            <td id="order-id">#1545</td>
                        </tr>
                        <tr>
                            <th>Order Date/Time:</th>
                            <td id="order-time">27-09-2021 at 10:00 PM</td>
                        </tr>
                        <tr>
                            <th>Name:</th>
                            <td id="customer-name">John Doe</td>
                        </tr>
                        <tr>
                            <th>Contact:</th>
                            <td id="customer-contact">1234567890</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td id="customer-email">jd@email.com</td>
                        </tr>
                        <tr>
                            <th>Delivery Address:</th>
                            <td id="customer-address">Full address here here with zip code</td>
                        </tr>
                        <tr>
                            <th>Delivery Date & Time:</th>
                            <td id="delivery-datetime">30-09-2021 at 12:00 PM</td>
                        </tr>
                        <tr>
                            <th>Order Items:</th>
                            <td id="order-details">All order items will show here</td>
                        </tr>
                        <tr>
                            <th>Order Type:</th>
                            <td id="order-type">Delivery</td>
                        </tr>
                        <tr>
                            <th>Order Value:</th>
                            <td id="order-value">$150.00 USD</td>
                        </tr>
                        <tr>
                            <th>Order Status:</th>
                            <td id="order-status">Pending</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function () {
            const $body = $('body');
            $body.on('click', '.view-details', function () {
                $.ajax({
                    url: '/admin/order/' + $(this).data('order'),
                    method: 'get',
                    dataType: 'json',
                    beforeSend: function () {
                        $body.LoadingOverlay('show');
                    },
                    success: function (data) {
                        $('#order-id').text(data.order_id);
                        $('#order-time').text(data.order_time);
                        $('#customer-name').text(data.name);
                        $('#customer-contact').text(data.contact);
                        $('#customer-email').text(data.email);
                        $('#customer-address').text(data.address);
                        $('#delivery-datetime').text(data.datetime);
                        $('#order-details').text(data.order_details);
                        $('#order-type').text(data.order_type);
                        $('#order-value').text(data.order_value);
                        $('#order-status').text(data.order_status);
                        $('#orderModal').modal('show');
                    },
                    error: function () {
                        swal("Oops...", "An error occurred. Pleas try again.", "error");
                    },
                    complete: function () {
                        $body.LoadingOverlay('hide');
                    }
                });
            });

            $body.on('click', '.mark-pending', function (event) {
                event.preventDefault();
                const $element = $(event.target);

                $.ajax({
                    url: '/admin/order/' + $(this).data('order') + '/status',
                    method: 'post',
                    data: {
                        _method: 'put',
                        _token: $('meta[name=csrf-token]').attr('content'),
                        status: 'pending'
                    },
                    dataType: 'json',
                    beforeSend: function () {
                        $body.LoadingOverlay('show');
                    },
                    success: function () {
                        swal("Success", "Order marked as pending.", "success").then(() => {location.reload()});
                    },
                    error: function () {
                        swal("Oops...", "An error occurred. Pleas try again.", "error");
                    },
                    complete: function () {
                        $body.LoadingOverlay('hide');
                    }
                });
            });

            $body.on('click', '.mark-complete', function (event) {
                event.preventDefault();
                const $element = $(event.target);

                $.ajax({
                    url: '/admin/order/' + $(this).data('order') + '/status',
                    method: 'post',
                    data: {
                        _method: 'put',
                        _token: $('meta[name=csrf-token]').attr('content'),
                        status: 'complete'
                    },
                    dataType: 'json',
                    beforeSend: function () {
                        $body.LoadingOverlay('show');
                    },
                    success: function () {
                        swal("Success", "Order marked as complete.", "success").then(() => {location.reload()});
                    },
                    error: function () {
                        swal("Oops...", "An error occurred. Pleas try again.", "error");
                    },
                    complete: function () {
                        $body.LoadingOverlay('hide');
                    }
                });
            });

            $body.on('click', '.mark-declined', function (event) {
                event.preventDefault();
                const $element = $(event.target);

                swal({
                    title: "Are you sure?",
                    text: "You are going to decline the order!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDecline) => {
                        if (willDecline) {
                            $.ajax({
                                url: '/admin/order/' + $(this).data('order') + '/status',
                                method: 'post',
                                data: {
                                    _method: 'put',
                                    _token: $('meta[name=csrf-token]').attr('content'),
                                    status: 'declined'
                                },
                                dataType: 'json',
                                beforeSend: function () {
                                    $body.LoadingOverlay('show');
                                },
                                success: function () {
                                    swal("Success", "Order marked as declined.", "success").then(() => {location.reload()});
                                },
                                error: function () {
                                    swal("Oops...", "An error occurred. Pleas try again.", "error");
                                },
                                complete: function () {
                                    $body.LoadingOverlay('hide');
                                }
                            });
                        }
                    });
            });
        });
    </script>
@endsection