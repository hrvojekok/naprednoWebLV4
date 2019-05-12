<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class TasksController extends Controller {

  public function insertform() {

      return view('tasks');
  }

    public function insert (Request $request) {

        $naziv_rada = $request->input('naziv_rada');
        $naziv_rada_na_engleskom = $request->input('naziv_rada_na_engleskom');
        $zadatak_rada = $request->input('zadatak_rada');
        $tip_studija = $request->input('tip_studija');

        $data = array('naziv_rada'=>$naziv_rada, 'naziv_rada_na_engleskom'=>$naziv_rada_na_engleskom,
          'zadatak_rada'=>$zadatak_rada, 'tip_studija'=>$tip_studija);

        DB::table('tasks')->insert($data);

        return redirect()->to('/home');

    }
}
