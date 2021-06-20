<?php

namespace App\Http\Controllers;

use App\Models\Olahraga;
use Illuminate\Http\Request;

class OlahragaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $olahragas = Olahraga::latest()->Paginate(5);
    
        return view('olahraga.index',compact('olahragas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('olahraga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|max:50|unique:olahragas,nama',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/olahraga/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Olahraga::create($input);
     
        return redirect()->route('olahragas.index')
                        ->with('success','Data Olahraga Berhasil Dibuat !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Olahraga  $olahraga
     * @return \Illuminate\Http\Response
     */
    public function show(Olahraga $olahraga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Olahraga  $olahraga
     * @return \Illuminate\Http\Response
     */
    public function edit(Olahraga $olahraga)
    {
        return view('olahraga.edit',compact('olahraga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Olahraga  $olahraga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Olahraga $olahraga)
    {
        $request->validate([
            'nama' => 'required',
            'body' => 'required'
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/olahraga/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $olahraga->update($input);
    
        return redirect()->route('olahragas.index')
                        ->with('success','Data Olahraga Berhasil Diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Olahraga  $olahraga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Olahraga $olahraga)
    {
        $olahraga->delete();

        return redirect()->route('olahragas.index')
                        ->with('success','Data Olahraga Berhasil Dihapus !');
    }
}
