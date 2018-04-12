<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\RegistroUsuarios;
use App\Roles;
class RegistroUsuariosController extends Controller
{
    public function indexRegistro()
    {
    	

    	$role = Roles::all();
    	//$Usuario = RegistroUsuarios::all();
       //$Usuario = DB::table('users')
                    //->select('name','email','image','rol_id')
                    //->join('roles','role.descripcion', '=', 'users.id')
                    //->get();
    	$Usuario = DB::table('users')
            ->join('roles', 'users.rol_id', '=', 'roles.id')
            ->select('users.id', 'users.name','users.email','users.image','roles.descripcion')
            ->get();
        //return view('tuvista.index')->with('detalleUsuario',$detalleusuario);
    	return view('Admin.Registro', compact('Usuario','role'));
    }
    public function create(Request $request)
    {
    	$file = $request->file('photo');
    	$path = public_path(). '/images';
    	$fileName = uniqid(). $file->getClientOriginalName();
    	$file->move($path, $fileName);

    	$password = $request->input('password');
    	$encry = bcrypt($password);

    	$registro = new RegistroUsuarios;
    	$registro->name = $request->input('name'); 
    	$registro->email = $request->input('email');
    	$registro->password = $encry;
    	$registro->image = $fileName;
    	$registro->rol_id = $request->input('tipo');
    	$registro->save();
    	return back();
    }

    public function edit($id)
    {
    	$role = Roles::all();
        $Usuario = RegistroUsuarios::find($id);
        return view('Admin.edit.edit')->with(compact('Usuario','role'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        
    	$file = $request->file('photo');
    	$path = public_path(). '/images';
    	$fileName = uniqid(). $file->getClientOriginalName();
    	$file->move($path, $fileName);

    	$password = $request->input('password');
    	$encry = bcrypt($password);

    	$registro = new RegistroUsuarios;
    	$registro->name = $request->input('name'); 
    	$registro->email = $request->input('email');
    	$registro->password = $encry;
    	$registro->image = $fileName;
    	$registro->rol_id = $request->input('tipo');
    	$registro->save();

        return redirect('/admin/Registro/Usuarios');

    }


    public function destroy($id)
    {
    	 $users = RegistroUsuarios::find($id);
         $users->delete();

        return back();
    }
    
}
