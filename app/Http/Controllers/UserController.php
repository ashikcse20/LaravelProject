<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        # code...
        // return "Assalamualaikum Warohmatullah";
        //return view('User/index');
        //   DB::insert('insert into users (id, name, email, password) values (?, ?, ?,?)', [3, 'Dayle', 'ashikcse2h01@gmail.com', 'abhc']);
        // $affected = DB::update('update users set password = 100 where id = ?', ['1']);
        //    $deleted = DB::delete('delete from users where id =2');
        // $users = DB::table('users')->get();
        $user = new User();
        // var_dump($user);
        //dd($user);
        // $user->name = "Sarthak";
        // $user->email= "Me@Email.com";
        // $user->password= bcrypt("password");
        // $user->save();

        // User::where('id',3)->delete();

        // User::where('id',5)->update(['name'=>'Abdullah']);

        $data = [
            'name' => 'mahdi',
            'email' => 'Mahdi2@hamdoonsoft.com',
            'password' => bcrypt('Mahdi'),
            'remember_token' => 'remember_token',

        ];
        // User::Create($data);

        $users = User::all();
        return $users;
        return view('User/index');

    }

    public function uploadAvatar(Request $request)
    {

        // if(Auth::user()->avatar)
        // {
        //     dd(Auth::user()->avatar);
        // }
        // if (auth()->user()->avatar) {
        //     // dd(auth()->user()->avatar);
        //     //    Storage::delete('storage/app/public/images/'.auth()->user()->avatar);
        //     Storage::delete('/public/images/' . auth()->user()->avatar);
        // }
        if ($request->hasFile('imagefield')) {
            $user = new User();
            User::uploadAvatar($request->imagefield);
            //$request->session()->flash('message', 'Image Uploaded');
            //  session()->put('message', 'Image Uploaded');
            //  session()->forget('message');
            // // dd($request->imagefield->getClientOriginalName());
            // $this->deleteOldImage();
            // $filename = $request->imagefield->getClientOriginalName();
            // //$request->imagefield->store('images', 'public');
            // $request->imagefield->storeAs('images', $filename, 'public');
            // //auth()->user()->update(['avatar'=>$filename]);
            // //Auth::user()->update(['avatar'=>$filename]);//Not Working
            // //User::find(1)->update(['avatar'=>$filename]);//Not Working

            // $id = Auth::user()->id;
            // User::where('id', $id)->update(['avatar' => $filename]);
            return redirect()->back() -> with('message', 'Image Uploaded');
        }

        //
        // User::where('id',1)->update(['name'=>'Abdullah']);
        // return 'uploaded';
        //$user = Auth::user();
        // return $user;
        
        // $request->session()->flash('error', 'Image Not Uploaded');
        return redirect()->back()->with('error', 'Image Not Uploaded');

    }

    // protected function deleteOldImage()
    // {
    //     Storage::delete('/public/images/'.auth()->user()->avatar);
    // }
}
