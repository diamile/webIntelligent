<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Validator;


class UpdateUserDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $title = "Données de l'utilisateur";
        $users = User::where('id', $id)->get();
        $statut = ['Aministrateur', 'Client'];
       
        return view('admin/user_data', compact('title','users','statut'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'address'=> 'required|string|max:255',
            
        );

       

        $validator = Validator::make(Input::all(), $rules);

    
            
            //recuperation des nouvelles données apres modification

            

            $user = User::find($id);

            $user->name       = Input::get('name');
            $user->email      = Input::get('email');
            $user->password       = Input::get('password');
            $user->postale       = Input::get('postale');
            $user->phone      = Input::get('tel');
            $user->ville       = Input::get('city');

           
            $user->save();

            Session::flash('flash_message', 'Vos données  ont été bien modifié');
         
            return redirect('/home');
    
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedUser= User::findOrFail($id);

        $deletedUser->delete();
 
        Session::flash('danger_message', 'Utilisateur supprimée avec succés!');
 
        return redirect('home');
    }
}
