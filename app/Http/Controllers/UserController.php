<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.new.user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role
        ]);
        $user->save();
        return redirect()->route('user.index')->with('success', 'User sucessfully edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function profile(Request $request, $id){
        if ($request->hasFile('photo')) {
            // dd('gambar ada');
            $photo = $request->file('photo');

            // dd($gambar_produk->getClientOriginalName());
            $input['photo'] = Storage::disk('public')->put('photo_profile', $photo);

            if ($request->password == null && $request->confirm_password == null){
                $user = User::find($id);
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'photo'=>$input['photo'],
                ]);
                $user->save();
                return redirect()->route('home')->with('success','Your profile sucessfully edited!');
            }else{
                if ($request->password == $request->confirm_password){
                    $user = User::find($id);
                    $user->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password'=>bcrypt($request->password),
                        'photo'=>$input['photo'],
                    ]);
                    $user->save();
                    return redirect()->route('home')->with('success','Your profile sucessfully edited!');
                }else{
                    return redirect()->route('home')->with("error","Your password & confirmation didn't match!");
                }
            }

        } else {
            // dd('gambar tidak ada');
            if ($request->password == null && $request->confirm_password == null){
                $user = User::find($id);
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email
                ]);
                $user->save();
                return redirect()->route('home')->with('success','Your profile sucessfully edited!');
            }else{
                if ($request->password == $request->confirm_password){
                    $user = User::find($id);
                    $user->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password'=>bcrypt($request->password)
                    ]);
                    $user->save();
                    return redirect()->route('home')->with('success','Your profile sucessfully edited!');
                }else{
                    return redirect()->route('home')->with("error","Your password & confirmation didn't match!");
                }
            }

        }

    }
}
