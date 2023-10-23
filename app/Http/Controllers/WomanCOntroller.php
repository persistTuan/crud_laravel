<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class WomanCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $women = DB::table('women')->orderBy('id', 'desc')->get();
        $count = $women->count();
        return view("women.index", compact("women"))->with('count', $count);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("women.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date = Carbon::parse($request->get("woman_birthDay"))->format('Y-m-d');
        // echo $date;
        $result =  DB::insert("INSERT into women(women.name, biography, field_of_work, women.image, birth_date, updated_at) values(?,?,?,?,?,?)",[
            $request->get("woman_name"), $request->get("woman_biography"), $request->get("woman_fieldOfWork"),$request->get("woman_image"), $date, Carbon::now("Asia/Ho_Chi_Minh")
        ]);
        if($result > 0){
            $message = "success";
            $type = "success";
        }
        else{
            $message = "error";
            $type = "danger";
        }
        return redirect()->route("women.index")->with('message', $message)->with('type', $type);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $woman = DB::table('women')->find($id);
        return view("women.edit", compact("woman"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $result =  DB::update("UPDATE women SET women.name = ? , biography = ? , field_of_work = ?, women.image = ?, birth_date=?, updated_at = ? WHERE id = ?",[
            $request->get("woman_name"), $request->get("woman_biography"), $request->get("woman_fieldOfWork"),$request->get("woman_image"), $request->get("woman_birthDay"), Carbon::now(), $id
        ]);
        if($result > 0){
            $message = "success";
            $type = "success";
        }
        else{
            $message = "error";
            $type = "danger";
        }
        return redirect()->route("women.index")->with('message', $message)->with('type', $type);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $result = db::delete("DELETE FROM women WHERE id = ?", [$id]);
        if($result > 0){
            $message = "success, deleted $result records";
            $type = "success";
        }
        else{
            $message = "error";
            $type = "danger";
        }
        return redirect()->route("women.index")->with('message', $message)->with('type', $type);
    }
}
