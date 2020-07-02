<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\User;

class ProfilesController extends Controller
{
    public function show(User $user){
		return view('profiles.show', compact('user'));
	}

	public function edit(User $user){

		return view('profiles.edit', compact('user'));
	}

	public function update(User $user){
		
		$attributes = request()->validate([
			'username' => ['string', 'required', 'alpha_dash' ,'max:255', Rule::unique('users')->ignore($user)],
			'name' => ['string', 'required', 'max:255'],
			'avatar' => ['required', 'file'],
			'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
			'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed']
		// with confirmed it will look for an attribute password_confirmation
		
		]);
		
		$attributes['avatar'] = request('avatar')->store('avatars');
		//it will store the image and return a path , and the path 
		   // will be saved to the database 
		
		$user->update($attributes);
		
		return redirect($user->path());
		
	
	}

}


