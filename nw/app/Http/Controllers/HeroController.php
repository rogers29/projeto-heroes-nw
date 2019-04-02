<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Hero;

class HeroController extends Controller
{

    public function index()
    {
		$heroes = Hero::paginate(10);
	   	return view('hero.index', compact('heroes'));
    }
    public function add()
    {
    	return view('hero.add');
    }
    public function save(Request $request)
    {
    	$result = Hero::create([
    		'name' => $request->input('name'), 
            'class' => $request->input('class'), 
            'expertise' => $request->input('expertise'), 
            'life' => $request->input('life'), 
            'defense' => $request->input('defense'), 
            'damage' => $request->input('damage'), 
            'attack_speed' => $request->input('attack_speed'), 
            'move_speed' => $request->input('move_speed'), 
		]);
    	return redirect()->route('hero.index');	
    }
    public function edit($id)
    {
        $hero = Hero::find($id);
        if(!$hero){
            return redirect()->route('hero.index');
        }
        return view('hero.edit', compact('hero'));
    }
    public function update(Request $request, $id)
    {
        $result = Hero::find($id)->update([
            'name' => $request->input('name'), 
            'class' => $request->input('class'), 
            'expertise' => $request->input('expertise'), 
            'life' => $request->input('life'), 
            'defense' => $request->input('defense'), 
            'damage' => $request->input('damage'), 
            'attack_speed' => $request->input('attack_speed'), 
            'move_speed' => $request->input('move_speed'), 
        ]);
        
        return redirect()->route('hero.index');
    }
    public function delete($id)
    {
        $hero=  Hero::find($id);
        if($hero){
            $result = $hero->delete();
        }
        return redirect()->route('hero.index');
    }
    public function search(Request $request)
    {
        $name = $request->input('name');
        $search = TRUE;
        if($name){
            $heroes = Hero::where('name', 'like', '%' . $name . '%')->get();
        }
        return view('hero.index', compact('heroes', 'search'));
    }
}