<?php

namespace App\Http\Controllers;

use App\Encontrista;
use App\Encontro;
use App\TipoEncontro;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use phpDocumentor\Reflection\Types\Object_;

class CourseController extends Controller
{
    function index()
    {
        return view('subscribe');
    }

    function meetings(Request $request)
    {
        $vars = array();
        $vars['meetings'] = array();

        switch ($request->input('filter')) {
            case 'future':
                $meetings = Encontro::where('data_inicio', '>', Carbon::today())->get();
                break;
            default:
                $meetings = Encontro::all();
                break;
        }

        foreach ($meetings as $meeting)
            $vars['meetings'][] = [
                'id' => $meeting->id,
                'start_date' => $meeting->data_inicio->timestamp * 1000,
                'end_date' => $meeting->data_final->timestamp * 1000,
                'place' => $meeting->lugar,
                'type' => [
                    'id' => $meeting->tipo->id,
                    'name' => $meeting->tipo->nome_encontro,
                    'meeting_type' => $meeting->tipo->tipo_encontros,
                    'description' => $meeting->tipo->descricao,
                ],
            ];


        return response()->json($vars);


    }

    function meeting($id)
    {

        $meeting = Encontro::find($id);
        $vars['meeting'] = [
            'id' => $meeting->id,
            'place' => $meeting->lugar,
            'start_date' => ($meeting->data_inicio->timestamp * 1000),
            'end_date' => ($meeting->data_final->timestamp * 1000),
            'description' => $meeting->descricao,
        ];

        $vars['meeting_type'] = [
            'id' => $meeting->tipo->id,
            'name' => $meeting->tipo->nome_encontro,
            'type' => $meeting->tipo->tipo_encontros,
            'address' => $meeting->tipo->morada,
            'description' => $meeting->tipo->descricao,
        ];

        $vars['status'] = DB::table('encontrista_encontro')->where('encontrista_id', '=', Auth::user()->id)
            ->where('encontro_id', '=', $id)->select([
                'role as role',
                'subscriber as subscriber',
                'participated as participated',
                'payed as payed',
            ])->first();


        if (!is_null($vars['status'])) {
            $vars['status']->subscribed = true;
            $vars['status']->payed = $vars['status']->payed == 1;
            $vars['status']->participated = $vars['status']->participated == 1;
        } else  $vars['status'] = ['subscribed' => false];

        return response()->json($vars);
    }

    function subscribe($id, $encontrista = null)
    {
        $encontrista = Encontrista::find(is_null($encontrista) ? Auth::user()->id : $encontrista);

        if (is_null($response['encontrista'] = !is_null($encontrista) ? $encontrista->id : null))
            return response()->json($response);

        if (is_null($response['course_subscribed'] = !is_null(Encontro::find($id)) ? Encontro::find($id)->id : null))
            return response()->json($response);

        $response['old_subscribe_status'] = !is_null($encontrista->encontros()->find($id));

        if ($response['modified_subscribe_status'] = !$response['old_subscribe_status'])
            $encontrista->encontros()->attach($response['course_subscribed'], ['subscriber' => Auth::user()->id]);

        $response['new_subscribe_status'] = !is_null($encontrista->encontros()->find($id));

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

        if (is_null($response['course_subscribed'] = !is_null(Encontro::find($id)) ? Encontro::find($id)->id : null))
            return response()->json($response);

        $response['old_subscribe_status'] = !is_null($encontrista->encontros()->find($id));

        if ($response['modified_subscribe_status'] = $response['old_subscribe_status'])
            $encontrista->encontros()->detach($response['course_subscribed']);

        $response['new_subscribe_status'] = !is_null($encontrista->encontros()->find($id));

        return response()->json($response);
    }


    function admin_index()
    {
        return view('admin.meetings.index');
    }

    function adminCourseInfo($encontro)
    {
        $vars['course_types'] = DB::table('tipo_encontros')->select(['nome_encontro'])->where('tipo_encontros', '=', $encontro)->get();
        return response()->json($vars);
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
