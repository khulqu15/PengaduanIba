<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{

    public $res;

    public function __construct(Response $response)
    {
        $this->res = $response;
    }

    public function index(Request $request)
    {
        $query = $this->res->query();
        $response = $query->with('Complaint', 'Complaint.Society', 'User');
        if($request->get('complaint') && $request->get('complaint') != null) {
            $response = $query->where('complaint_id', $request->get('complaint'));
        }
        if($request->get('user') && $request->get('user') != null) {
            $response = $query->where('user_id', $request->get('user'));
        }
        if(($request->get('sortType') && $request->get('sortType') != null) &&
        ($request->get('sort') && $request->get('sort') != null)) {
            $response = $query->orderBy($request->get('sortType'), $request->get('sort'));
        }
        if($request->get('pagination') && $request->get('pagination') != null) {
            $response = $query->paginate($request->get('pagination'));
        } else {
            $response = $query->get();
        }
        return $this->onSuccess('Response', $response, 'Founded');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            $response = $this->res->create($request->all());
            return redirect()->route('ver.complaint');
        } catch (\Exception $e) {
            return $this->onError($e);
        }
    }

    public function show($id)
    {
        $response = $this->res->with('Complaint', 'Complaint.Society', 'User')->where('id', $id)->first();
        return $this->onSuccess('Response', $response, 'Founded');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        try {
            $update = $this->res->where('id', $id)->update($request->except('_method', '_token', 'tgl'));
            $response = $this->res->find($id);
            return redirect()->route('lihat.response');
        } catch (\Exception $e) {
            return $this->onError($e);
        }
    }

    public function destroy($id)
    {
        $response = $this->res->find($id);
        $delete = $this->res->destroy($id);
        return redirect()->back();
    }
}
