<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Show the orders page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.order-details', compact('orders'));
    }

    /**
     * Get single order details
     *
     * @param Order $order
     * @return \Illuminate\Http\JsonResponse
     */
    public function getOrder(Order $order)
    {
        $order->load('details');

        $orderDetails = new \stdClass();
        $orderDetails->order_id = $order->id;
        $orderDetails->order_time = $order->created_at->format('d-m-Y') . ' at ' . $order->created_at->format('h:i A');
        $orderDetails->name = $order->name;
        $orderDetails->contact = $order->contact;
        $orderDetails->email = $order->email;

        if ($order->order_type == 'delivery') {
            if (!empty($order->apartment)) {
                $orderDetails->address = $order->apartment . ', ';
            } else {
                $orderDetails->address = '';
            }
            $orderDetails->address .= $order->street . ', ' . $order->city . ', ' . $order->postal_code;
        } else {
            $orderDetails->address = '';
        }

        $orderDetails->datetime = $order->date_time->format('d-m-Y') . ' at ' . $order->date_time->format('h:i A');
        $orderDetails->order_type = ucfirst($order->order_type);
        $orderDetails->order_value = '$' . $order->order_value;
        $orderDetails->order_status = ucfirst($order->status);

        $ordersArray = [];
        foreach ($order->details as $singleOrder) {
            $order_details = $singleOrder->name;
            if (!is_null($singleOrder->quantity)) {
                $order_details .= '(' . $singleOrder->quantity . ')';
            }
            $ordersArray[] = $order_details;
        }
        $orderDetails->order_details = implode(', ', $ordersArray);

        return response()->json($orderDetails);
    }

    /**
     * Change status of single order (pending or completed)
     *
     * @param Order $order
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function changeStatus(Order $order, Request $request)
    {
        $status = $request->input('status');

        try {
            $order->status = $status;
            $order->save();

            return response()->json('success');
        } catch (\Exception $exception) {
            return response()->json('error', 422);
        }
    }
}
