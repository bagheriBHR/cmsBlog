<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::with('roles')->paginate(3);
        return view('admin.user.index',compact(['users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::all();
        return view('admin.user.create',compact(['roles']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User();
        if($file = $request->file('avatar')){
            $name=time() . $file->getClientOriginalName();
            $file->move('images',$name);

            $photo = new Photo();
            $photo->name=$file->getClientOriginalName();
            $photo->path=$name;
            $photo->user_id=Auth::id();
            $photo->save();

            $user->photo_id = $photo->id;
        }
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=bcrypt($request->input('password'));
        $user->status=$request->input('status');
        $user->save();

        $user->roles()->attach($request->input('roles'));
        Session::flash('user_add', 'کاربر با موفقیت اضافه شد.');
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        $roles=Role::all();
        return view('admin.user.edit',compact(['user','roles']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user=User::find($id);
        if($file=$request->file('avatar')){
            $name=time() . $file->getClientOriginalName();
            $file->move('images',$name);

            $photo=new Photo();
            $photo->name=$file->getClientOriginalName();
            $photo->path=$name;
            $photo->user_id=Auth::id();
            $photo->save();
            $user->photo_id=$photo->id;
        }
        $user->name=$request->name;
        $user->email=$request->email;
        $user->status=$request->status;
        if(trim($request->password != "")) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        $user->roles()->sync($request->roles);
        Session::flash('user_update', 'کاربر با موفقیت ویرایش شد.');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        if($user->photo_id != ""){
            $photo=Photo::find($user->photo_id);
            unlink(public_path() . $user->photo->path);
            $photo->delete();
        }
        $user->delete();
        Session::flash('user_delete', 'کاربر با موفقیت حذف شد.');
        return redirect()->route('user.index');
    }
}
