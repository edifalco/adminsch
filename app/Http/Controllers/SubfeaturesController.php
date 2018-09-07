<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Subfeature;
use App\User;
use App\Photo;
use App\Feature;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SubfeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subfeatures = Subfeature::paginate(7);
        $features = Feature::pluck('title', 'id')->all();
        return view('admin.subfeatures.index', compact('subfeatures', 'features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $features = Feature::pluck('title', 'id')->all();
        return view('admin.subfeatures.create', compact('features'));
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
        $input['author'] = $user->name;
        $input['is_active'] = 1;
        
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo =  Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        
        $feature = Feature::findOrFail($request['feature_id']);
        $feature->subfeature()->create($input);
        
        $request->session()->flash('subfeature_message','Your subfeature has been successfuly submited.');
        //return redirect('/admin/subfeatures');
        return redirect()->back();
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feature = Feature::findOrFail($id);
        $subfeatures = $feature->subfeature;
        return view('admin.subfeatures.show', compact('subfeatures'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subfeature = Subfeature::findOrFail($id);
        $features = Feature::pluck('title', 'id')->all();
        return view('admin.subfeatures.edit', compact('subfeature','features'));
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
        
        $user = Auth::user();
        $input['author'] = $user->name;
        
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo =  Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        
        $subfeature = Subfeature::findOrFail($id);
        $subfeature->whereId($id)->first()->update($input);
        
        $request->session()->flash('subfeature_message','Your subfeature has been successfuly edited.');
        return redirect('/admin/subfeatures');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subfeature::findOrFail($id)->delete();
        return redirect()->back();
    }
}
