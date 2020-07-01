<?php

namespace App\Http\Controllers;

//use DB;
use DataTables;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    public function __construc()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    public function search(Request $request)
{
        if($request->ajax())
        {
        $salida="";
        $search = $request->get('search');

        $data= Project::where('title', 'LIKE', '%' .$search. '%')->get();
            if($data)
            {
                foreach ($data as $datos) 
                {
                $salida.='<tr>'.
                '<td>'.$datos->id.'</td>'.
                '<td>'.$datos->title.'</td>'.
                '<td>'.$datos->description.'</td>'.
                '<td>'. 
                        '<a class="text-secondary d-flex justify-content-between align-items-center"
                               >
                                <button class="btn btn-outline-success my-2 my-sm-0">Ver</button>
                        </a>'.
                
                
                '</td>'.
                '</tr>';
                 }
            return Response($salida);
             }
             else
             {
                 return response()->json(['false'=>'no hay registros']);
             }
        }
        
}
    public function index(Request $request)
    {
       
        if($request){
            
            $title=$request->get('title');
            $description=$request->get('description');
            $projects=Project::title($title)->description($description)->paginate(4);        
         return view('projects.index', ['projects'=>$projects,compact('projects')]);
         }
    }
    public function ajaxtable()
    {
        return Datatables::eloquent(Project::query())->make(true);         
    }
    public function show($id)
    {
     

        return view('projects.show', [
            'project' => Project::findOrFail($id) 
            //si ingresamos a un Url que no existe nos mostrara error o extraviado
        ]);
   
    }

    public function create()
    {
         return view('projects.create',[
             'project' => new Project
         ]);
    }
   
    public function store(SaveProjectRequest $request)
    {
        
       //Project :: create(request()->all());
    

        Project::create($request->validated() );

        return redirect()->route('projects.index')->with('status', '¡El taller fue creado exitosamente!');
    }
    public function edit($id)
    {
        return view('projects.edit', [
            'project' => Project::findOrFail($id) 
            //si ingresamos a un Url que no existe nos mostrara error o extraviado
        ]);
    }
    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('status', '¡El taller fue actualizado exitosamente!');
    }
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('status', '¡El taller fue eliminado exitosamente!');
    }
}
