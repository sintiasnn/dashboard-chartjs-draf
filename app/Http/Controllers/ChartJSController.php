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
    public function indeks_a()
    {
        //SELECT tabel_a.ikp_a1, COUNT(tabel_a.ikp_a1) as jumlah FROM tabel_a GROUP BY tabel_a.ikp_a1;
        $a1 = DB::table('tabel_a')
                ->selectRaw('count(ikp_a1) as jumlah')
                ->groupBy('ikp_a1')
                ->get()->toArray();
        $values_a1 = array_column($a1, 'jumlah');

        $a2 = DB::table('tabel_a')
                ->selectRaw('count(ikp_a2) as jumlah')
                ->groupBy('ikp_a2')
                ->get()->toArray();
        $values_a2 = array_column($a2, 'jumlah');

        $a4 = DB::table('tabel_a')
                ->selectRaw('count(ikp_a4) as jumlah')
                ->groupBy('ikp_a4')
                ->get()->toArray();
        $values_a4 = array_column($a4, 'jumlah');
  
        return view('chartjs', compact('values_a1','values_a2','values_a4'));
    }
    
}