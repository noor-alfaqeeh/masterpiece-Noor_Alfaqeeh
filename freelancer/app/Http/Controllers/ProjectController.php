<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=Project::all();
        return view('projects.index',['projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
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
            'name'                =>  'required',
            'description'          =>  'required',
            'img1'               =>  'required',
            'img2'          =>  'required',
            'img3'          =>  'required'
        ]);

        $img1 = $request->file('img1');
        $new_name1 = rand() . '.' . $img1->getClientOriginalExtension();
        $img1->move(public_path('images/project'), $new_name1);

        $img2 = $request->file('img2');
        $new_name2 = rand() . '.' . $img2->getClientOriginalExtension();
        $img2->move(public_path('images/project'), $new_name2);

        $img3 = $request->file('img3');
        $new_name3 = rand() . '.' . $img3->getClientOriginalExtension();
        $img3->move(public_path('images/project'), $new_name3);

        $img4 = $request->file('img4');
        $new_name4 = rand() . '.' . $img4->getClientOriginalExtension();
        $img4->move(public_path('images/project'), $new_name4);

        $img5 = $request->file('img5');
        $new_name5 = rand() . '.' . $img5->getClientOriginalExtension();
        $img5->move(public_path('images/project'), $new_name5);

        $form_data = array(
            'name'          =>$request->name,
            'description'     =>$request->description,
            'img1'            =>$new_name1,
            'img2'              =>$new_name2,
            'img3'              =>$new_name3,
            'img4'              =>$new_name4,
            'img5'              =>$new_name5,
            'user_id'            =>auth()->id()

        );
        Project::create($form_data);
        return redirect('projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projects=Project::findOrFail($id);
        return view('projects.view', compact('projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects=Project::findOrFail($id);
        return view('projects.edit', compact('projects'));
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
        $image_name1 = $request->hidden_image1;
        $img1 = $request->file('img1');

        $image_name2 = $request->hidden_image2;
        $img2 = $request->file('img2');

        $image_name3 = $request->hidden_image3;
        $img3 = $request->file('img3');

        $image_name4 = $request->hidden_image4;
        $img4 = $request->file('img4');

        $image_name5 = $request->hidden_image5;
        $img5 = $request->file('img5');

        if($img1 != '' && $img2 != '' && $img3 != '' && $img4 != '' && $img5 != '')
        {
            $request->validate([
                'name'                =>  'required',
                'description'          =>  'required',
                'img1'          =>  'img1',
                'img2'          =>  'img2',
                'img3'          =>  'img3',
                'img4'          =>  'img4',
                'img5'          =>  'img5'
            ]);

            $image_name1 = rand() . '.' . $img1->getClientOriginalExtension();
            $img1->move(public_path('images/project'), $image_name1);

            $image_name2 = rand() . '.' . $img2->getClientOriginalExtension();
            $img2->move(public_path('images/project'), $image_name2);

            $image_name3 = rand() . '.' . $img3->getClientOriginalExtension();
            $img3->move(public_path('images/project'), $image_name3);

            $image_name4 = rand() . '.' . $img4->getClientOriginalExtension();
            $img4->move(public_path('images/project'), $image_name4);

            $image_name5 = rand() . '.' . $img5->getClientOriginalExtension();
            $img5->move(public_path('images/project'), $image_name5);

        }
        else
        {
            $request->validate([
                'name'                =>  'required',
                'description'          =>  'required'
            ]);
        }

        $projects = array(
            'name'              =>$request->name,
            'description'       =>$request->description,
            'img1'              =>$image_name1,
            'img2'              =>$image_name2,
            'img3'              =>$image_name3,
            'img4'              =>$image_name4,
            'img5'              =>$image_name5

        );

        Project::whereId($id)->update($projects);
        return redirect('projects')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects = Project::findOrFail($id);
        $projects->delete();
        return redirect('projects')->with('success', 'The project is successfully deleted');
    }
}
