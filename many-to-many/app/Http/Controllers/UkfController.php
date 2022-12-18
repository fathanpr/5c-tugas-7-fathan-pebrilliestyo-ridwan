<?php

namespace App\Http\Controllers;

use App\Models\Ukf;
use Illuminate\Http\Request;

class UkfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ukfs = Ukf::with('mahasiswas')->paginate(5);

        return view('ukfs.index',compact('ukfs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('ukfs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_ukf'=>'required',
        ]);
        $ukf = Ukf::create([
            'nama_ukf' => $request->nama_ukf
        ]);

        if($ukf){
            return redirect()->route('ukf.index')->with(['success' => 'Successfully Added Data Extracurriculer']);
        }else{
            return redirect()->route('ukf.update')->with('error');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Ukf $ukf)
    {

        return view('ukfs.edit',[
            'ukf' => $ukf
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ukf  $Ukf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Ukf $ukf)
    {
        $validate = $this->validate($request,[
            'nama_ukf'=>'required',
        ]);
        Ukf::where('id', $ukf->id)->update($validate);

        if($ukf){
            return redirect()->route('ukf.index')->with(['success' => 'Data Berhasil UKF berhasil diubah!']);
        }else{
            return redirect()->route('ukf.edit')->with('error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ukf  $Ukf
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ukf $ukf)
    {
        $ukf->delete();

        return redirect()->route('ukf.index')->with('success',"Data Berhasil dihapus!");
    }
}
