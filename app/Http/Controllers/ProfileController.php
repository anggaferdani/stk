<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $profiles = Profile::where('status', 1)->get();
        return view('backend.pages.profiles.index', compact(
            'profiles',
        ));
    }

    public function create() {}

    public function store(Request $request) {}

    public function show($id) {}

    public function edit($id) {}

    public function update(Request $request, $id) {
        try {
            $profile = Profile::find($id);
    
            $request->validate([
                'title' => 'required',
                'subtitle' => 'required',
                'description' => 'required',
                'footer_description' => 'required',
                'visi' => 'required',
                'misi' => 'required',
                'address' => 'required',
                'email' => 'required',
                'phone_number' => 'required',
            ]);
    
            $array = [
                'title' => $request['title'],
                'subtitle' => $request['subtitle'],
                'description' => $request['description'],
                'footer_description' => $request['footer_description'],
                'visi' => $request['visi'],
                'misi' => $request['misi'],
                'address' => $request['address'],
                'email' => $request['email'],
                'phone_number' => $request['phone_number'],
                'optional_phone_number' => $request['optional_phone_number'],
                'x' => $request['x'],
                'instagram' => $request['instagram'],
                'facebook' => $request['facebook'],
                'youtube' => $request['youtube'],
            ];
    
            $profile->update($array);
    
            return redirect()->route('admin.profile.index')->with('success', 'Success');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id) {}
}
