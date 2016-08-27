<?php

namespace App\Http\Controllers;

use App\Group;
use App\Grupo;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class GroupController extends Controller
{

   
    /**
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Group::all());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = array(
            'designation' => 'required',
            'localization' => 'required',
            'creation_date' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            // TODO: resolver exeção
            return "fail";
        } else {
            $group = new Group;
            $group->designation = Input::get('designation');
            $group->localization = Input::get('localization');
            $group->creation_date = Input::get('creation_date');
            $group->inactivation_date = Input::get('inactivation_date');
            $group->save();

            return response()->json([
                'message' => 'Successfully created Group!',
                'group' => $group
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = Group::findOrfail($id);
        return response()->json($group);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $rules = array(
            'designation' => 'required',
            'localization' => 'required',
            'creation_date' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return "fail";
        } else {
            $group = Group::find($id);
            $group->designation = Input::get('designation');
            $group->localization = Input::get('localization');
            $group->creation_date = Input::get('creation_date');
            if (Input::get('inactivation_date') != 'null') $group->inactivation_date = Input::get('inactivation_date');
            $group->save();

            return response()->json(['message' => 'Successfully updated Group!', 'group' => $group]);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)

    {
        Group::findOrfail($id)->delete();
        return response()->json(['message' => 'Successfully deleted the Group!']);
    }
}
