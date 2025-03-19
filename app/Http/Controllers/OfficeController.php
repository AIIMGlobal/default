<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Crypt;

/* included models */
use App\Models\Office;
use App\Models\Division;
use App\Models\District;
use App\Models\Upazila;

class OfficeController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        if (Gate::allows('manage_office', $user)) {
            $orgs = Office::where('status', '!=', 2)->orderBy('name', 'asc')->get();
            $divisions = Division::where('status', 1)->get();
            $districts = District::where('status', 1)->get();
            $upazilas = Upazila::where('status', 1)->get();

            $query = Office::query();

            if (isset($request->office_id) && $request->office_id != '') {
                $query->where('id', $request->office_id);
            }

            $offices = $query->where('status', '!=', 2)->orderBy('name', 'asc')->get();
            
            if ($request->ajax()) {
                $html = view('backend.admin.office.table', compact('offices'))->render();

                return response()->json([
                    'success' => true,
                    'html' => $html,
                ]);
            }

            return view('backend.admin.office.index', compact('offices', 'divisions', 'districts', 'upazilas', 'orgs'));
        } else {
            return abort(403, "You don't have permission!");
        }
    }

    public function archived()
    {
        $offices = Office::where('status', 2)->latest()->paginate(15);
        $divisions = Division::where('status', 1)->get();
        $districts = District::where('status', 1)->get();
        $upazilas = Upazila::where('status', 1)->get();

        return view('backend.admin.office.archived', compact('offices', 'divisions', 'districts', 'upazilas'));
    }

    public function create()
    {
        $user = Auth::user();
        if(Gate::allows('add_office', $user)){
            $menu_expand = route('admin.office.index');
            $divisions = Division::where('status', 1)->get();
            $districts = District::where('status', 1)->get();
            $upazilas = Upazila::where('status', 1)->get();
            
            return view('backend.admin.office.create', compact('menu_expand', 'divisions', 'districts', 'upazilas'));

        }else{
            return abort(403, "You don't have permission..!");
        }
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        if (Gate::allows('add_office', $user)) {
            $office = new Office;

            $office->name           = $request->name;
            $office->division_id    = $request->division;
            $office->district_id    = $request->district;
            $office->upazila_id     = $request->upazila;
            $office->created_by     = $user->id;
            $office->status         = $request->status ?? 0;

            $office->save();

            return redirect()->route('admin.office.index')->with('success', 'Office added successfully...!');
        } else {
            return abort(403, "You don't have permission..!");
        }
    }

    public function show($id)
    {
        $user = Auth::user();
        if(Gate::allows('view_office', $user)){
            $office = Office::where('id', $id)->first();
            $menu_expand = route('admin.office.index');
            return view('backend.admin.office.view', compact('office', 'menu_expand'));
        }else{
            return abort(403, "You don't have permission..!");
        }

    }

    public function edit($id)
    {
        $user = Auth::user();
        if(Gate::allows('edit_office', $user)){
            $office = Office::where('id', $id)->first();
            $divisions = Division::where('status', 1)->get();
            $districts = District::where('status', 1)->get();
            $upazilas = Upazila::where('status', 1)->get();
            $menu_expand = route('admin.office.index');
            return view('backend.admin.office.edit', compact('office', 'menu_expand', 'divisions', 'districts', 'upazilas'));
        }else{
            return abort(403, "You don't have permission..!");
        }
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();

        if (Gate::allows('edit_office', $user)) {
            $office = Office::where('id', $id)->first();

            $office->name           = $request->name;
            $office->division_id    = $request->division;
            $office->district_id    = $request->district;
            $office->upazila_id     = $request->upazila;
            $office->updated_by     = Auth::user()->id;
            $office->status         = $request->status ?? 0;

            $office->save();

            return redirect()->route('admin.office.index')->with('success', 'Office updated successfully..!');
        } else {
            return abort(403, "You don't have permission..!");
        }
    }

    public function delete($id)
    {
        $user = Auth::user();
        if(Gate::allows('delete_office', $user)){
            $id = Crypt::decryptString($id);
            $office = Office::where('id', $id)->first();
            $office->status = 2;
            $office->save();
            return redirect()->back()->with('success', 'Office deleted successfully..!');
        }else{
            return abort(403, "You don't have permission..!");
        }
    }

}
