<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::select('id', 'name', 'email', 'created_at');


        if (request()->has('name')) {
            if (!empty($request->name)) {
                $users = $users->where('name', 'like', '%' . $request->name . '%');
            }
        }

        if (request()->has('email')) {
            if (!empty($request->email)) {
                $users = $users->where('email', 'like', '%' . $request->email . '%');
            }
        }

        if (request()->has('startDate')) {
            if (!empty($request->startDate)) {
                $users = $users->where(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d')"), '>=', dateConvertYMD($request->startDate));
            }
        }

        if (request()->has('endDate')) {
            if (!empty($request->endDate)) {
                $users = $users->where(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d')"), '<=', dateConvertYMD($request->endDate));
            }
        }

        $users = $users->get();

        return view('admin/users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function data(Request $request)
    {
        $Users = User::select('id', 'name', 'email', 'created_at');


        if (request()->has('name')) {
            if (!empty($request->name)) {
                $Users = $Users->where('name', 'like', '%' . $request->name . '%');
            }
        }

        if (request()->has('email')) {
            if (!empty($request->email)) {
                $Users = $Users->where('email', 'like', '%' . $request->email . '%');
            }
        }

        if (request()->has('startDate')) {
            if (!empty($request->startDate)) {
                $Users = $Users->where(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d')"), '>=', dateConvertYMD($request->startDate));
            }
        }

        if (request()->has('endDate')) {
            if (!empty($request->endDate)) {
                $Users = $Users->where(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d')"), '<=', dateConvertYMD($request->endDate));
            }
        }


        return Datatables::of($Users)

            ->addIndexColumn()
            ->addColumn('name', function ($model) {
                return '<input type="hidden" name="name_' . $model->id . '" id="name_' . $model->id . '" class="name_' . $model->id . '" value="' . $model->name . '">' . $model->name;
            })
            ->addColumn('email', function ($model) {
                return '<input type="hidden" name="email_' . $model->id . '" id="email_' . $model->id . '" class="email_' . $model->id . '" value="' . $model->email . '">' . $model->email;
            })
            ->addColumn('roles', function ($model) {
                return '';
            })
            ->addColumn('action', function ($model) {

                $edit  = '<button type="button" class="btn btn-info btn-sm btnEdit" name="btnEdit" id="btnEdit" data-target="#editUserInfo" data-toggle="modal" value="' . $model->id . '" >Edit</button>';
                $reset = '<a class=""><button type="submit" class="btn btn-default btn-xs">Reset Password</button></a>';

                $delete = '<button type="button" class="btn btn-danger btn-xs btnDelete" name="btnDelete" id="btnDelete" value="' . $model->id . '" >Delete</button>';

                return '<form method="POST" action="' . route("password.email") . '">' . csrf_field() . '<input type="hidden" class="form-control" id="email"  name="email" value="' . $model->email . '">' . $edit .'</form>';

            })
            ->editColumn('created_at', function ($model) {
                return dateConvertDMY($model->created_at);
            })
            ->escapeColumns([])
            ->make(true);
    }
}
