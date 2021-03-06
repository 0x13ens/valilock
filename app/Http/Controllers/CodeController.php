<?php

namespace App\Http\Controllers;

use App\Code;
use Carbon\Carbon;
use App\Dynamic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class CodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codes = Code::orderBy('id', 'desc')->paginate(10);
        return view('code.index', compact('codes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       return view('code.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            // validate the data
            $this->validate($request, array(
                'password'         => 'required|max:255',
            ));

            // store in the database
            $code = new Code;

            // if the password contains the Tag then replace the password
            // then save to database else dump the code to the screen

            // the tag has to change depending on what the user inputs so in practice
            // the {{ Date:Hour }} would tell us what the user has selected though the
            // input
            if (Str::contains($code->password = $request->password, '{{Date:Hour}}'))
            {
                //explode the password when tag hits
                $password = explode('{{Date:Hour}}',$code->password, 3);

                // hash the first and second password
                $passwordstart = Hash::make($password[0]);
                $passwordend = Hash::make($password[1]);

                // Save the password to the Database

                // we encrypt the tag then dedecrypt on validation so concatenation would be passwordstart.dynamic.passwordend
                $code->dynamic = encrypt("{{Date:Hour}}");
                $code->passwordstart = $passwordstart;
                $code->passwordend = $passwordend;



                // for validation we need use concatenation however to include the dynamic center
                // piece which gets checked against the tag and put though.
                // dd($password[0].$password[1]);
                // dd($password[0], $password[1], $password, $passwordfirst, $passwordlast);
                $code->save();
                return redirect()->route('code.index');
            }

            // if password doesn't cotain proceed to save to database // could display error?

            $code->password = $request->password;

            $code->save();
            return redirect()->route('code.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $code = Code::find($id);
        return view('code.show', compact('code'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function edit(Code $code)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Code $code)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function destroy(Code $code)
    {
        //
    }
}
