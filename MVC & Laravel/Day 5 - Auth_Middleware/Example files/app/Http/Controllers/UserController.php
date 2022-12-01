<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Http\Requests\StoreUserRequest;
use App\Models\CustomUser;

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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        // Validations
        // $validated = $request->validate([
        //     'username' => 'required|min:5|max:20',
        //     'email' => 'required|email',
        //     'password' => ['required', Password::min(8)->mixedCase()],
        // ]);
        $request->validated();

        // Insert
        $user = new CustomUser;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;

        if ($user->save())
            return redirect('/flowers')->with('message', 'You registered successfully.');
        else
            return redirect('/flowers')->with('error', 'Problem during register. Try again');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function login_form()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Check if the user exists
        $user = CustomUser::where('email', $request->email);

        // Save the email in the session
        if ($user)
            session(['email' => $request->email]);
        else
            return 'wrong email';

        // Redirect to account page
        return redirect('flowers')->with('message', 'login successfull');
    }
}
