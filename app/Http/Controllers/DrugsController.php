<?php

namespace App\Http\Controllers;

use App\Models\Drugs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class DrugsController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index(): Response
    {
        return response()->make(view('drugs.index', ['drugs' => Drugs::where('quantity','>' ,0)->get()]));
    }

    /**
     * Show the form for creating a new resource.
    */
    public function create(): Response
    {
        return response()->make(view('drugs.add'));
    }

    /**
     * Store a newly created resource in storage.
    */
    public function store(Request $request): RedirectResponse
    {
        // $path = $request->file('image')->store('public/images');
        // $path = 'storage/'.substr($path, 7);

        // $newProduct = Drugs::create([
        //     'name' => $request->name,
        //     'description' => $request->desc,
        //     'unit_price' => $request->price,
        //     'quantity' => $request->qnt,
        //     'image' => $path
        // ]);
        // return redirect('drugs/'. $newProduct->id);

        $requestData = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/'.$path;
        Member::create($requestData);

        return redirect('drugs/'. $newProduct->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Drugs $id): Response
    {
        return response()->make(view('drugs.show', [
            'drugs' => $id
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Drugs $id): View
    {   
        return view('drugs.edit', [
            'drugs' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Drugs $id)
    {
        $id->update([
            'name' => $request->name,
            'description' => $request->description,
            'unit_price' => $request->unit_price,
            'quantity' => $request->quantity,
            'image' => $request->image
        ]);

        return redirect('drugs/'. $id->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drugs $id): RedirectResponse
    {
        $id->delete();
        return redirect('/drugs');
    }
}
