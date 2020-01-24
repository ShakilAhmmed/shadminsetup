<?php


namespace Shadmin\Setup\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Shadmin\Setup\SetupModel;
use Validator;
use Arr;
use Session;
class SetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $default_data=SetupModel::first();
        return view('setupview::setupview.setup',['default_data'=>$default_data]);
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
        $setup_model=new SetupModel;
        $validation=Validator::make($request->all(),$setup_model->validation_rules());
        if($validation->fails())
        {
            return back()->withInput()->withErrors($validation);
        }
        else 
        {
            $request_data=$request->all();
            if($request->hasFile('company_logo'))
            {
                $file_path="setupassets/";
                $file_name="logo.jpg";
                $img_url=$file_path.$file_name;
                $request->file('company_logo')->move($file_path,$img_url);
                $request_data=Arr::set($request_data,'company_logo',$img_url);
            }
            $setup_model->fill($request_data)->save();
            Session::flash('success','Setup Updated Successfully');
            return back();
        }
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
        //
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
        //
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
