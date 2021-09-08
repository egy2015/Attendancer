<?php

namespace App\Http\Controllers;
use App\Models\Absener;
use App\Models\ListAttendance;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AbsenerController extends Controller
{
    //take first choice

    public function classAtt(){

        return view('pages.absener.create');

    }

    public function addList($id){
        
        $take = $id;
        return view('pages.absener.addlist', compact('take'));

    }

    public function saveList(Request $request){
        $request->validate([
            'audience' => 'required',
            'idUnique' => 'required',
            'AbsenerID' => 'required',
        ]);
        $take = $request->all();
        ListAttendance::create($take);
    }

    public function index($data){
        dd($data);
        $list = ListAttendance::find($id);
        return view('pages.absener.index', compact('list'));
    }

    public function showQR(Request $request){
        $request->validate([
            'name' => 'required',
            'att' => 'required',
            'class' => 'required',
        ]);
        $taker = $request->all();
       Absener::create($taker);

       $data = $taker['name'].$taker['att'].$taker['class'];
       
       // dd($taker);
        QrCode::size(500)->format('png')->generate(url('list/'.$data), public_path('images/QRFolder/'.$data.'.png'));
        $qr = 'images/QRFolder/'.$data;
        return view('pages.qr.show', compact('qr', 'data') );
    }



}
