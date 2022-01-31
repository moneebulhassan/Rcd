<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\Link;
use App\Models\Branch;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $register = Register::paginate();
        return view('pages.register.index', compact('register'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $arr['link']= Link::all();
        return view('pages.register.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RegisterRequest  $request)
    {

        Register::create($request->toArray());

//        $register->link_id = $request->link_id;
//        $register->first_name = $request->first_name;
//        $register->last_name = $request->last_name;
//        $register->sex = $request->sex;
//        $register->dob = $request->dob;
//        $register->phone = $request->phone;
//        $register->address = $request->address;
//        $register->email = $request->email;
//        $register->date_of_join = $request->date_of_join;
//        $register->blood_group = $request->blood_group;
//
//        $register->guardian_name = $request->guardian_name;
//        $register->guardian_address = $request->guardian_address;
//        $register->guardian_number = $request->guardian_number;
//        $register->education = $request->education;
//        $register->aos = $request->aos;
//        $register->id_num = $request->id_num;
//        $register->save();

        return redirect()->route('registerperson.index')
            ->withStatus('Volunteer Successfully Registered.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $register = Register::find($id);
        return view ('pages.register.show')->with('register', $register);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($register_id)
    {
        $register = Register::find($register_id);
        $arr['register'] = $register;
        $arr['link'] = Link::all();
        return view('pages.register.edit')->with($arr);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,$register_id)
    {
        $register = Register::find($register_id);

        $register->link_id = $request->link_id;
        $register->first_name = $request->first_name;
        $register->last_name = $request->last_name;
        $register->sex = $request->sex;
        $register->dob = $request->dob;
        $register->phone = $request->phone;
        $register->address = $request->address;
        $register->email = $request->email;
        $register->date_of_join = $request->date_of_join;
        $register->blood_group = $request->blood_group;

        $register->guardian_name = $request->guardian_name;
        $register->guardian_address = $request->guardian_address;
        $register->guardian_number = $request->guardian_number;
        $register->education = $request->education;
        $register->aos = $request->aos;
        $register->id_num = $request->id_num;
        $register->save();
        return redirect()->route('registerperson.index')
            ->withStatus('volunteer Successfully Modified.');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Register::destroy($id);
        return redirect()
            ->route('registerperson.index')
            ->withStatus('volunteer Successfully Deleted!!!.');
    }


}
