<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\FeaturesCreateRequest;
use App\Feature;
use App\Subfeature;
use App\User;
use App\Photo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = Feature::all();
        return view('admin.features.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.features.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $user = Auth::user();
        
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo =  Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $user->features()->create($input);
        return redirect('/admin/features');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feature = Feature::findOrFail($id);
        return view('admin.features.edit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo =  Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        
        Auth::user()->features()->whereId($id)->first()->update($input);
        return redirect('/admin/features');
        
        // $feature =  Feature::findOrFail($id);
        // $feature->update($input);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feature = Feature::findOrFail($id);
        unlink(public_path() . $feature->photo->file);
        $feature->photo->delete();
        $feature->delete();
        Session::flash('feature_deleted', 'The feature has been deleted.');
        return redirect('/admin/features');
    }
    
    public function post($param)
    {
        $feature = Feature::where('id', $param)->orWhere('slug', $param)->firstOrFail();
        $subfeatures = $feature->subfeature()->whereIsActive(1)->orderBy('created_at', 'asc')->get();
        $menufeatures = Feature::all();
        
        $idprev = $feature->id - 1;
        if($idprev > 0) {
            $featureprev = Feature::where('id', '=', $idprev)->firstOrFail();
        } else {
            $featureprev = null;
        }
        
        $idnext = $feature->id + 1;
        if($idnext <= count($menufeatures)) {
            $featurenext = Feature::where('id', '=', $idnext)->firstOrFail();
        } else {
            $featurenext = null;
        }
        
        return view('feature', compact('feature', 'subfeatures', 'menufeatures', 'featureprev', 'featurenext'));
    }
    
    public function fullFeatureList()
    {
        $menufeatures = Feature::all();
        return view('full_feature_list', compact('menufeatures'));
    }
}
