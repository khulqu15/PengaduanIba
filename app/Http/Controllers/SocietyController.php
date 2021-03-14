<?php

namespace App\Http\Controllers;

use App\Models\Society;
use Illuminate\Http\Request;

class SocietyController extends Controller
{

    public $soc;

    public function __construct(Society $society)
    {
        $this->soc = $society;
    }

    public function index(Request $request)
    {
        $query = $this->soc->query();
        $society = $query->with('Complaint');
        if(($request->get('sortType') && $request->get('sortType') != null) &&
        ($request->get('sort') && $request->get('sort') != null)) {
            $society = $query->orderBy($request->get('sortType'), $request->get('sort'));
        }
        if($request->get('pagination') && $request->get('pagination') != null) {
            $society = $query->paginate($request->get('pagination'));
        } else {
            $society = $query->get();
        }
        return $this->onSuccess('Society', $society, 'Founded');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            $society = $this->soc->create($request->all());
            return $this->onSuccess('Society', $society, 'Created');
        } catch (\Exception $e) {
            return $this->onError($e);
        }
    }

    public function show($id)
    {
        $society = $this->soc->with('Complaint')->where('id', $id)->first();
        return $this->onSuccess('Society', $society, 'Founded');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        try {
            $update = $this->soc->where('id', $id)->update($request->all());
            $society = $this->soc->find($id);
            return $this->onSuccess('Society', $society, 'Updated');
        } catch (\Exception $e) {
            return $this->onError($e);
        }
    }

    public function destroy($id)
    {
        $society = $this->soc->find($id);
        $delete = $this->soc->destroy($id);
        return $this->onSuccess('Society', $society, 'Destroyed');
    }
}
