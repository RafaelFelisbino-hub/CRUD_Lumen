<?php

namespace App\Http\Controllers;

use App\Models\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    private $objUser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        
        $this->objUser = new ModelUser();
    }

    public function index(){

        $user = $this->objUser->all();
        return view("listar", compact('user'));

    }

    public function create(){

        $user = $this->objUser->all();
        return view("create", compact('user'));
    }

    public function store(Request $request)
    {
        $register = $this->objUser->create([
            'user'=>$request->user,
            'password'=>$request->password,
            'id'=>$request->id
        ]);

        if($register){
            return redirect("/");
        }
    }

    public function edit($id){

        $user = $this->objUser->find($id);
        return view("edit", compact('user'));
    }

    public function update(Request $request, $id){

        $update = $this->objUser->where(['id'=>$id])->update([
            'user'=>$request->user,
            'password'=>$request->password
        ]);

        if($update){
            return redirect("/");
        }
    }

    public function destroy($id){

        $user = $this->objUser->find($id);

        $user->delete();

        return redirect('/');
    }

    public function searchUser(){

        $user = $this->objUser->all();
        return view("search", compact('user'));
    }
    //
}
