<?php 

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Laptop;

class LaptopController extends Controller
{
    public function index()
    {
        return response()->json(Laptop::all());
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'nama_laptop' => 'required|string|max:255',
        'harga' => 'required|numeric',
        'spesifikasi' => 'required|string',
        'gambar' => 'nullable',
    ]);

    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $namaFile = time() . '_' . $gambar->getClientOriginalName();
        $path = $gambar->storeAs('public/gambar', $namaFile); // tersimpan di storage/app/public/gambar
        $validated['gambar'] = 'storage/gambar/' . $namaFile; // untuk diakses dari URL
    } elseif (filter_var($request->gambar, FILTER_VALIDATE_URL)) {
        $validated['gambar'] = $request->gambar;
    }

    $laptop = Laptop::create($validated);
    return response()->json($laptop, 201);
}


    public function show($id)
    {
        $laptop = Laptop::findOrFail($id);
        return response()->json($laptop);
    }

    public function update(Request $request, $id)
{
    $laptop = Laptop::findOrFail($id);

    $validated = $request->validate([
        'nama_laptop' => 'sometimes|string|max:255',
        'harga' => 'sometimes|numeric',
        'spesifikasi' => 'sometimes|string',
        'gambar' => 'nullable',
    ]);

    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $namaFile = time() . '_' . $gambar->getClientOriginalName();
        $path = $gambar->storeAs('public/gambar', $namaFile);
        $validated['gambar'] = 'storage/gambar/' . $namaFile;
    } elseif (filter_var($request->gambar, FILTER_VALIDATE_URL)) {
        $validated['gambar'] = $request->gambar;
    }

    $laptop->update($validated);
    return response()->json($laptop);
}


    public function destroy($id)
    {
        $laptop = Laptop::findOrFail($id);
        $laptop->delete();
        return response()->json(['message' => 'Laptop deleted']);
    }
}

?>