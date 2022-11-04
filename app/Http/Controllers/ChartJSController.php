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
    public function a1()
    {
        //SELECT tabel_a.ikp_a1, COUNT(tabel_a.ikp_a1) as jumlah FROM tabel_a GROUP BY tabel_a.ikp_a1;
        $a1 = DB::table('tabel_a')
                ->selectRaw('count(ikp_a1) as jumlah')
                ->groupBy('ikp_a1')
                ->get()->toArray();
        
        $labels = ['Puas','Sangat Puas','Tidak Puas'];
        $values = array_column($a1, 'jumlah');
              
        return view('chartjs', compact('labels', 'values'));
    }
    public function a2()
    {
        //SELECT tabel_a.ikp_a1, COUNT(tabel_a.ikp_a1) as jumlah FROM tabel_a GROUP BY tabel_a.ikp_a1;
        $a2 = DB::table('tabel_a')
                ->selectRaw('count(ikp_a2) as jumlah')
                ->groupBy('ikp_a2')
                ->get()->toArray();
        
        $labels = ['Puas','Sangat Puas','Tidak Puas'];
        $values = array_column($a2, 'jumlah');
              
        return view('chartjs', compact('labels', 'values'));
    }
    public function a4()
    {
        //SELECT tabel_a.ikp_a1, COUNT(tabel_a.ikp_a1) as jumlah FROM tabel_a GROUP BY tabel_a.ikp_a1;
        $a4 = DB::table('tabel_a')
                ->selectRaw('count(ikp_a4) as jumlah')
                ->groupBy('ikp_a1')
                ->get()->toArray();
        
        $labels = ['Puas','Sangat Puas','Tidak Puas'];
        $values = array_column($a4, 'jumlah');
              
        return view('chartjs', compact('labels', 'values'));
    }
}