<?php

namespace App\Http\Controllers;

use App\Models\WhyTradersChooseUs;
use Illuminate\Http\Request;

class WhyTradersChooseUsController extends Controller
{
    public function index() {
        $whyTradersChooseUs = WhyTradersChooseUs::where('status', 1)->get();
        return view('backend.pages.why-traders-choose-us.index', compact(
            'whyTradersChooseUs',
        ));
    }

    public function create() {}

    public function store(Request $request) {}

    public function show($id) {}

    public function edit($id) {}

    public function update(Request $request, $id) {
        try {
            $whyTradersChooseUs = WhyTradersChooseUs::find($id);
    
            $request->validate([
                'icon' => 'required',
                'title' => 'required',
                'description' => 'required',
            ]);
    
            $array = [
                'icon' => $request['icon'],
                'title' => $request['title'],
                'description' => $request['description'],
            ];
    
            $whyTradersChooseUs->update($array);
    
            return redirect()->route('admin.why-traders-choose-us.index')->with('success', 'Success');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id) {}
}
