<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class EncoderController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('encoder.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        $users = User::where('deleted_at','')->select(['id', 'name','paymentStatus', 'email', 'created_at', 'updated_at'])->get();

        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                if($user->paymentStatus == 'Paid')
                {
                    return '<button id="approve'.$user->id.'"" class="btn btn-xs btn-default w-100 approve"> Unapprove</button>';
                }
                else
                {
                    return '<button id="approve'.$user->id.'"" class="btn btn-xs btn-primary w-100 approve"> Approve</button>';
                }
            })
            ->editColumn('delete', function ($user) {
                return '<button id="remove'.$user->id.'"" class="btn btn-xs btn-danger w-100 remove"> Remove</button>';
            })
            ->rawColumns(['delete' => 'delete','action' => 'action'])

            ->make(true);
    }

    public function approve(Request $request)
    {
        $id = $str_numbers_only = preg_replace("/[^\d]/", "", $request->input('id'));
        $student = User::find($id);
        $output = array(
            'msg' => ''
        );
        if($student){
            if($student->paymentStatus == 'Paid')
            {
                $student->paymentStatus = 'Unpaid';
                $student->save();
            }
            else
            {
                $student->paymentStatus = 'Paid';
                $student->save();
            }

            $output['msg'] = 'succesfully saved';
        }
        else{
            $output['msg']= 'error ocurred';
        }
        echo json_encode($output);
    }

    public function remove(Request $request)
    {
        $id = $str_numbers_only = preg_replace("/[^\d]/", "", $request->input('id'));
        $student = User::find($id);
        $output = array(
            'msg' => 'deleted successfully'
        );
        if($student){
            $student->deleted_at = Carbon::now();
            $student->save();
            echo json_encode($output);
        }
    }
}
