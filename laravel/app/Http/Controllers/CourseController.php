<?php

namespace App\Http\Controllers;

use App\Encontrista;
use App\EncontristaMeeting;
use App\Meeting;
use App\MeetingType;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class CourseController extends Controller
{
    function index()
    {
        return view('subscribe');
    }

    function meetings(Request $request)
    {
        switch ($request->input('filter')) {
            case 'future':
                return response()->json(Meeting::where('start_date', '>', Carbon::today()->timestamp)->get());
            default:
                return response()->json(Meeting::all());
        }
    }

    function meeting($id, $encontrista = null)
    {

        if (is_null($encontrista))
            $encontrista = Auth::user()->id;

        $meeting = Meeting::find($id)->first();

        $meeting->status = ['subscribed' => !is_null($status = $meeting->encontristas()->find($encontrista))];
        if ($meeting->status['subscribed'])
            $meeting->status = $status->pivot;


        return response()->json($meeting);
    }

    function subscribe($id, $encontrista = null)
    {
        $encontrista = Encontrista::find(is_null($encontrista) ? Auth::user()->id : $encontrista);

        if (is_null($response['encontrista'] = !is_null($encontrista) ? $encontrista->id : null))
            return response()->json($response);

        if (is_null($response['course_subscribed'] = !is_null(Meeting::find($id)) ? Meeting::find($id)->id : null))
            return response()->json($response);

        $response['old_subscribe_status'] = !is_null($encontrista->meetings()->find($id));

        if ($response['modified_subscribe_status'] = !$response['old_subscribe_status'])
            $encontrista->meetings()->attach($response['course_subscribed'], ['subscriber_id' => Auth::user()->id]);

        $response['new_subscribe_status'] = !is_null($encontrista->meetings()->find($id));

        return response()->json($response);
    }

    /**
     * @param int $id
     * @param  $encontristaId
     * @return mixed
     */
    function unsubscribe($id, $encontristaId = null)
    {

        /** @var Encontrista $encontrista */
        $encontrista = Encontrista::find(is_null($encontristaId) ? Auth::user()->id : $encontristaId);

        if (is_null($response['encontrista'] = !is_null($encontrista) ? $encontrista->id : null))
            return response()->json($response);

        if (is_null($response['course_subscribed'] = !is_null(Meeting::find($id)) ? Meeting::find($id)->id : null))
            return response()->json($response);

        $response['old_subscribe_status'] = !is_null($encontrista->meetings()->find($id));

        if ($response['modified_subscribe_status'] = $response['old_subscribe_status'])
            $encontrista->meetings()->detach($response['course_subscribed']);

        $response['new_subscribe_status'] = !is_null($encontrista->meetings()->find($id));

        return response()->json($response);
    }


    function admin_index()
    {
        return view('admin.meetings.index');
    }

  
    function adminEditCourse($id = null)
    {

        if ($vars['in_create'] = is_null($id)) {

        }
        $vars['course'] = Encontro::find($id);
        $vars['encontro_types'] = DB::table('tipo_encontros')->select('tipo_encontros')->distinct(['tipo_encontros'])->get();
        $vars['in_create'] = is_null($id);

        return view('admin.meetings.edit');
    }
}
