<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $data = User::where('usertype', '!=', 'admin')->latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';

                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('backend.pages.user_details');
    }


    public function store(Request $request)
    {
        User::updateOrCreate(
            [
                'id' => $request->product_id
            ],
            [
                'name' => $request->name,
                'detail' => $request->detail
            ]
        );

        return response()->json(['success' => 'Product saved successfully.']);
    }

    public function edit($id)
    {
        $product = User::find($id);
        return response()->json($product);
    }


    public function destroy($id)
    {
        User::find($id)->delete();

        return response()->json(['success' => 'Product deleted successfully.']);
    }
}
