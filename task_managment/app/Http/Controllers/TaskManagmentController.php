<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskManagmentController extends Controller
{
    $result = CheckoutModel::select('id', 'order_id', 'username', 'email', 'member_id', 'mobile', 'store_id', 'order_status', 'header_data', 'created_at', 'nav_server_status', 'remarks', 'expected_time')->orderBy('id', 'DESC')->when($request->has("q"), function ($q) use ($request) {
        return $q->where("member_id", "like", "%" . $request->get("q") . "%")->orWhere("username", "like", "%" . $request->get("q") . "%");
    })->paginate(10);

    if ($request->ajax()) {
        return view('admin.products.checkout_ajax', ['response' => $result]);
    }

    return view('admin.products.checkout', ['response' => $result]);
}
