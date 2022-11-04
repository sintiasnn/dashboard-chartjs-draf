<?php
  
  namespace App\Http\Controllers;
    
  use Illuminate\Http\Request;
  use App\Models\User;
  use DB;
    
class ChartJSController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        //SELECT tabel_a.ikp_a1, COUNT(tabel_a.ikp_a1) as jumlah FROM tabel_a GROUP BY tabel_a.ikp_a1;
        $a1 = DB::table('tabel_a')
                ->selectRaw('ikp_a1 as indeks','count(ikp_a1) as jumlah')
                ->groupBy('ikp_a1');
        
        $labels = $a1->keys();
        $data = $a1->values();
              
        return view('chartjs', compact('labels', 'data'));
    }
}