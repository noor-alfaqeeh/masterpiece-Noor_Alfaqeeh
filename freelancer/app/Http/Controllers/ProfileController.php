<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Major;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Major::all();
        $profile=Profile::where ('user_id',auth()->id())->get();
        return view('profile.view',['profile'=>$profile,'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Major::all();
        return view('profile.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name'                =>  'required',
            'image'          =>  'required|image|max:2048',
            'country'               =>  'required',
            'brief'          =>  'required',
            'major_id'          =>  'required'
        ]);

        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/profile'), $new_name);

        $form_data = array(
            'full_name'          =>$request->full_name,
            'image'              =>$new_name,
            'country'            =>$request->country,
            'brief'              =>$request->brief,
            'user_id'            =>auth()->id(),
            'major_id'           => $request->major_id

        );
        Profile::create($form_data);
        return redirect('profile');
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
        $data2=Major::all();
        $data = Profile::findOrFail($id);
        return view('profile.edit', compact('data','data2'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'full_name'    =>  'required',
                'image'         =>  'image|max:2048',
                'country'    =>  'required',
                'brief'    =>  'required',
                'major_id'    =>  'required'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/profile'), $image_name);
        }
        else
        {
            $request->validate([
                'full_name'    =>  'required',
                'country'    =>  'required',
                'brief'    =>  'required',
                'major_id'    =>  'required'
            ]);
        }

        $data = array(
            'full_name'    =>  $request->full_name,
            'image'         =>  $image_name,
            'country'    =>  $request->country,
            'brief'    =>  $request->brief,
            'major_id'    =>  $request->major_id,
        );

        Profile::whereId($id)->update($data);
        return redirect('profile')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
