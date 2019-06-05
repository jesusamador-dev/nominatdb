<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use TheSeer\Tokenizer\Exception;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = DB::select('call getEmpleados()');
        //dd($empleados);
        $departamentos = DB::select('CALL getDepartamentos()');
        return View('empleados.list', ["empleados" => $empleados, "active" => "empleados", 'departamentos' =>$departamentos]);
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
        $nombre = $request->nombre;
        $apellido = $request->apellido;
        $rfc = $request->rfc;
        $salario = $request->salario;
        $id_depto = $request->depto;
        //dd($request);

        $res = DB::select('CALL insertEmpleado(?, ?, ?, ?, ?, @msg)', [ $nombre, $apellido, $rfc, $salario, $id_depto]);
        $msg = "";
        foreach ($res as $data) {
         if(isset($data->msg)) {
                $msg = $data->msg;
            }
        }
        return redirect("empleados")->with('status', $msg); 
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
        try{
            $res = DB::select("CALL getEmpleado(?, @msg)", [$id]);
            $msg = "";
            $empleado = ['nombre' => '', 'rfc' => "", 'salario' => 0, 'apellido' => '', 'id_depto' => 0];
            foreach ($res as $data) {
                if (isset($data->msg)) {
                    $msg = $data->msg;
                }
                if (isset($data->nombre)) {
                    $empleado['nombre'] = $data->nombre;
                }
                if (isset($data->rfc)) {
                    $empleado['rfc'] = $data->rfc;
                }
                if (isset($data->apellido)) {
                    $empleado['apellido'] = $data->apellido;
                }
                if (isset($data->salario)) {
                    $empleado['salario'] = $data->salario;
                }
                if (isset($data->id_depto)) {
                    $empleado['nombre_depto'] = $data->nombre_depto;
                }
            }

            //dd($departamento);
            if ($msg != "") {
                return redirect("empleados")->with('status', $msg);
            } else {
                //dd($depa);
                return View('empleados.edit', ["empleado" => $empleado, "active" => "empleados"]);
            }
        }catch(Exception $e)
        {
            return redirect("empleados")->with('status', $e);
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
        $res = DB::select('CALL deleteEmpleado(?, @msg)', [$id]);
        return $res;
    }
}
