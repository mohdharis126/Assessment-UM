<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAssetRequest;
use App\Http\Requests\UpdateAssetRequest;
use App\Mail\ExampleMail;
use App\Models\Asset;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use App\Http\Controllers\FacecadePdf;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Mail;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request->ajax()) {
            $searchTerm = $request->search;
            
            $result = Asset::where('no_kakitangan', 'LIKE', "%$searchTerm%")
                            ->orWhere('nama', 'LIKE', "%$searchTerm%")
                            ->orWhere('email', 'LIKE', "%$searchTerm%")
                            ->orderByDesc('updated_at')
                            ->get();
            
            return response()->json([$result]);
        }
    
        return view('user.index', [
            'assets' => Asset::orderByDesc('updated_at')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $validated = $request->validate([
        //     "email" => "required|string",
        // ]);
        $assets = New Asset;
        $assets->nama = $request->nama;
        $assets->no_kakitangan = $request->no_kakitangan;
        $assets->jantina = $request->jantina;
        $assets->email = $request->email;
        $assets->jawatan = $request->jawatan;
        $assets->no_telefon = $request->no_telefon;
        $assets->no_telefon_pejabat = $request->no_telefon_pejabat;
        $assets->alamat_pejabat = $request->alamat_pejabat;
        if ($request->hasFile('gambar')) {
            // Store the uploaded file
            $assets->gambar = $request->file('gambar')->store('gambar', 'public');
        }
        // dd($assets);

        $assets->save();
        // alert()->success('Berjaya', 'Data telah disimpan');
        // Mail::to('haris@ofo.my')->send(new ExampleMail);

        return redirect()->route('pp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $asset = Asset::find($id);
        // dd($asset);
        return view('user.edit', compact('asset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssetRequest  $request
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asset $asset)
    {
        //
        $asset->nama = $request->nama;
        $asset->no_kakitangan = $request->no_kakitangan;
        $asset->jantina = $request->jantina;
        $asset->email = $request->email;
        $asset->jawatan = $request->jawatan;
        $asset->no_telefon = $request->no_telefon;
        $asset->no_telefon_pejabat = $request->no_telefon_pejabat;
        $asset->alamat_pejabat = $request->alamat_pejabat;

        $asset->save();
        alert()->success('Berjaya', 'Data telah disimpan');

        return redirect()->route('pp.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        // dd('test1');
        $asset = Asset::find($id);
        // dd($asset);
        alert()->success('Berjaya', 'Data Telah dihapuskan');
        $asset->delete();
        // dd('test2',$asset);
        return redirect()->route('pp.index');

    }
    // public function generate(Request $request) 
    // {
    //     $assets = Asset::all();

    //     $assets = FacecadePdf::loadView('user.index', compact('assets'));
    // }
}
