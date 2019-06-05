<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = DB::select('call getDepartamentos()');
        return View('departamentos.list', ["departamentos" => $departamentos, "active" => "departamentos"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre = $request->nombre;
        $presupuesto = $request->presupuesto;
        $msg = ""; 
        $res = DB::select("CALL insertDepartamento(?,?, @msg)", [$nombre, $presupuesto]);
        foreach ($res as $data) {
           if($data->msg){
               $msg = $data->msg;
           }
        }
        return redirect("departamentos")->with('status', $msg );    
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
        $res = DB::select("CALL getDepartamento(?, @msg)", [$id]);
        $msg = "";
        $depa = ['nombre' => '', 'id' => 0, 'presupuesto' => 0];
        foreach ($res as $data) {
            if(isset($data->msg)){
                $msg = $data->msg;
            }
            if(isset($data->nombre)){
            $depa['nombre'] = $data->nombre; 
            }
            if(isset($data->id_depto)){
            $depa['id'] = $data->id_depto; 
            }
            if(isset($data->presupuesto)){
            $depa['presupuesto'] = $data->presupuesto; 
            }
            
        }

        //dd($departamento);
        if($msg != ""){
           return redirect("departamentos")->with('status', $msg );
        }else{
            //dd($depa);
            return View('departamentos.edit', ["departamento" => $depa, "active" => "departamentos"]);
        }
        
        
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
        $presupuesto = $request->presupuesto;
        $res = DB::select('CALL updateDepartamento(?, ?, @msg)', [$id, $presupuesto]);
        $msg = "";
        foreach ($res as $data) {
            if ($data->msg) {
                $msg = $data->msg;
            }
        }
        return redirect("departamentos")->with('status', $msg);    
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
}
