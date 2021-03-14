<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ComplaintController extends Controller
{

    public $dimen;
    public $com;
    public $path;

    public function __construct(Complaint $complaint)
    {
        $this->com = $complaint;
        $this->dimen = 750;
        $this->path = public_path().'/img/report/';
    }

    public function index(Request $request)
    {
        $query = $this->com->query();
        $complaint = $query->with('Society', 'Response.User', 'Response');
        if($request->get('society') && $request->get('society') != null) {
            $complaint = $query->where('society_id', $request->get('society'));
        }
        if(($request->get('sortType') && $request->get('sortType') != null) &&
        ($request->get('sort') && $request->get('sort') != null)) {
            $complaint = $query->orderBy($request->get('sortType'), $request->get('sort'));
        }
        if($request->get('pagination') && $request->get('pagination') != null) {
            $complaint = $query->paginate($request->get('pagination'));
        } else {
            $complaint = $query->get();
        }
        return $this->onSuccess('Complaint', $complaint, 'Founded');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            $complaint = new Complaint();
            $complaint->user_id = Auth::id();
            $complaint->nik = $request->nik;
            $complaint->report = $request->report;
            if($request->file('picture')) {
                $report = $request->file('picture');
                $fileName = 'Report-Complaint-'.uniqid().'-'.time().'.'.$report->extension();
                if(!File::isDirectory($this->path)) {
                    File::makeDirectory($this->path, 0777, false);
                }
                $img = Image::make($report->path());
                $img->resize($this->dimen, $this->dimen, function($constraint) {
                    $constraint->aspectRatio();
                })->save($this->path.$fileName);
                $complaint->picture = $fileName;
            }
            $complaint->status = 'open';
            $complaint->save();
            return redirect()->route('history.complaint');
            // return $this->onSuccess('Complaint', $complaint, 'Created');
        } catch (\Exception $e) {
            return $this->onError($e);
        }
    }

    public function show($id)
    {
        $complaint = $this->com->with('Society', 'Response.User', 'Response')->where('id', $id)->first();
        return $this->onSuccess('Complaint', $complaint, 'Founded');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        try {
            $complaint = Complaint::find($id);
            $complaint->society_id = $request->society_id;
            $complaint->report = $request->report;
            $complaint->status = $request->status;
            if($request->file('picture') != null) {
                $report = $request->file('picture');
                $fileName = 'Report-Complaint-'.uniqid().'-'.time().'.'.$report->extension();
                if(!File::isDirectory($this->path)) {
                    File::makeDirectory($this->path, 0777, false);
                }
                $img = Image::make($report->path());
                $img->resize($this->dimen, $this->dimen, function($constraint) {
                    $constraint->aspectRatio();
                })->save($this->path.$fileName);
                unlink($this->path.$complaint->picture);
                $complaint->picture = $fileName;
            }
            $complaint->save();
            return $this->onSuccess('Complaint', $complaint, 'Updated');
        } catch (\Exception $e) {
            return $this->onError($e);
        }
    }

    public function destroy($id)
    {
        $complaint = Complaint::find($id);
        if(File::exists($this->path.$complaint->picture)) {
            unlink($this->path.$complaint->picture);
        }
        $complaint->delete();
        return redirect()->back();
    }
}
