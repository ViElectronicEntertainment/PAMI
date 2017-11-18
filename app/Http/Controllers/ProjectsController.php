<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
	//Crear Proyecto
    public function create(Request $request){
    	//Creando Proyecto
    	$proyecto = new bproyecto();
    	//Definiendo Proyecto
    	$proyecto -> nombre = $request -> nombre;
    	$proyecto -> descripcion = $request -> descripcion;
    	$proyecto -> area = $request -> area;
    	//Guardando Proyecto
    	$proyecto -> save();
    	//Retorno
    	return redirect('/proyectos');
    }
    //Leer Proyecto
    public function read(){
    	//Leer
    	$proyectos = bproyecto::all();
    	//Imprimir
    	return view('proyectos.index',['proyectos' => $proyectos]);
    }
    //Editar Proyecto
    public function edit($id){
    	$proyectos = bproyecto::all();
    	$proyecto = bproyecto::findOrFail($id);
    	return view('proyectos.index',['proyectos' => $proyectos, 'project' => $project]);
    }
    //Actualizar Proyecto
    public function update(Request $request, $id){
    	$proyecto = bproyecto::findOrFail($id);
    	//Definiendo Proyecto
    	$proyecto -> nombre = $request -> nombre;
    	$proyecto -> descripcion = $request -> descripcion;
    	$proyecto -> area = $request -> area;
    	//Guardando Proyecto
    	$proyecto -> save();
    	//Retorno
    	return redirect('/proyectos');
    }
    //Preguntar
    public function preguntar($id){
    	$proyectos = broyecto::all();
    	$proyectoDelete = bproyecto::findOrFail($id);
    	return view('proyectos.index',['proyectos' => $proyectos, 'proyectoDelete' => $proyectoDelete]);
    }
    public function delete($id){
    	$proyecto = bproyecto::findOrFail($id);
    	$proyecto -> delete();
    	return redirect('/proyectos');
    }
}