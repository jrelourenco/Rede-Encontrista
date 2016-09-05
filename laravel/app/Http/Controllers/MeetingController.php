<?php

namespace App\Http\Controllers;

use App\Group;
use App\Grupo;
use App\Meeting;
use App\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class MeetingController extends Controller
{
//TODO valores obrigtorios não defeidos e resolvidos

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Meeting::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return self::update($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = Meeting::findOrfail($id);
        return response()->json($group);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = null)
    {
        if (is_null($id))
            $obj = new Meeting();
        else
            $obj = Meeting::findOrfail($id);
        //TODO: corrigir
        /*
                $obj->designation = Input::get('designation');
                $obj->localization = Input::get('localization');
                $obj->creation_date = Input::get('creation_date');
                $obj->inactivation_date = Input::get('inactivation_date');
        */

        $obj->save();




        return response()->json([
            'message' => is_null($id) ? 'Successfully created Meeting!' : 'Successfully updated Meeting!',
            'obj' => $obj
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Meeting::findOrfail($id)->delete();
        return response()->json(['message' => 'Successfully deleted the Meeting!']);
    }
}
