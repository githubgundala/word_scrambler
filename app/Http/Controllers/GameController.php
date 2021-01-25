<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScoreModel;
use Illuminate\Support\Facades\Http;
use DataTables;

class GameController extends Controller
{
    public function datatables(){
        return Datatables::of(ScoreModel::orderBy('score', 'desc')->get())
        ->addColumn('tanggal', function(ScoreModel $sc) {
                    return date_format(date_create($sc->created_at),"d/m/Y");;
         })
        ->make(true);
    }

    public function kataApi(Request $request)
    {
        $response = Http::get('http://kateglo.com/api.php?format=json&phrase='.$request->kata);
        $datjson = $response->json();
        $ex = explode(";",$datjson["kateglo"]["definition"][0]["def_text"]);
        if($ex){
            $data = $ex[0];
        }else{
            $data = $datjson["kateglo"]["definition"][0]["def_text"];
        }
        return response()->json(
        [
            'data' => $data
        ], 200);
    }

    public function game()
    {
        return view('game');
    }

    public function gameScore(Request $request)
    {
        ScoreModel::create([
            'name' => $request->nama,
            'score' => $request->score,
        ]);
        return response()->json(
        [
            'message' =>'success'
        ], 200);
    }

    public function dashboard()
    {
        $data['score'] = ScoreModel::orderBy('score','desc')->take(4)->get();
        return view('dashboard',$data);
    }
}
