<?php

namespace App\Http\Controllers;

use App\Edocument;
use App\Typedoc;
use Illuminate\Http\Request;
use File;

class EdocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $edocuments = Edocument::latest()->paginate(5);

        return view('edocuments.index', compact('edocuments'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lastProject = Edocument::orderBy('created_at', 'desc')->first();
        
        $typedocs = Typedoc::all();

        if(isset($lastProject)){
             $number = 'DOC-000'.($lastProject->id + 1);
        } else {
             $number = 'DOC-0001';
        }   

        return view('edocuments.create', compact('typedocs', 'number'));
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
            'number' => 'required',
            'title' => 'required',
            'detail' => 'required',
            'image' => 'required | mimes:pdf,xls,xlsx,doc,docx|max:20480',
            'type_id' => 'required',
            'created_by' => 'required'
        ]);

        $image = $request->file('image');

        $new_name = str_random(10).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'number' => $request->number,
            'title' => $request->title,
            'detail' => $request->detail,
            'image' => $new_name,
            'type_id' => $request->type_id,
            'created_by' => $request->created_by
        );

        Edocument::create($form_data);
        $request->session()->flash('success', 'The Create File is Successfully');
        return redirect('edocuments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Edocument  $edocument
     * @return \Illuminate\Http\Response
     */
    public function show(Edocument $edocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Edocument  $edocument
     * @return \Illuminate\Http\Response
     */
    public function edit(Edocument $edocument)
    {
        $typedocs = Typedoc::all();

        return view('edocuments.edit', compact('edocument', 'typedocs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Edocument  $edocument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Edocument $edocument)
    {
        
        $image_name = $request->hidden_image;
        $image = $request->file('image');

        if($image != '')
        {
            File::delete(public_path('//images//').$edocument->image);

            $request->validate([
                'title' => 'required',
                'detail' => 'required',
                'image' => 'mimes:pdf, xls, xlsx, doc, docx | max:2048',
                'type_id' => 'required',
                'created_by' => 'required'
            ]);

            $image_name = str_random(10).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name); 
        }
        else
        {
            $request->validate([
                'title' => 'required',
                'detail' => 'required',
                'type_id' => 'required',
                'created_by' => 'required'
            ]);
        }
        $form_data = array(
            'title' => $request->title,
            'detail' => $request->detail,
            'image' => $image_name,
            'type_id' => $request->type_id,
            'created_by' => $request->created_by
        );
        $edocument->update($form_data);
        $request->session()->flash('success', 'The Update File is Successfully');
        return redirect('edocuments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Edocument  $edocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(Edocument $edocument)
    {
        $edocument->delete();
        File::delete(public_path('//images//').$edocument->image);
        session()->flash('error', 'The Delete File is Successfully');
        return redirect('edocuments');
    }
}
