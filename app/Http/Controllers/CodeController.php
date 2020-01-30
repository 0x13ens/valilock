<?php

namespace App\Http\Controllers;

use App\Code;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

            // if the password contains the Tag then replace the password with Jeepers it worked ben
            // then save to database else dump the code to the screen
            if (Str::contains($code->password = $request->password, '{{Date:Hour}}'))
            {
                // $code->password = "Jeepers it worked Ben!";
                $code->save();
                return redirect()->route('code.index');
            }
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
