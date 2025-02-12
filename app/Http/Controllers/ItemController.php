<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\User;

class ItemController extends Controller
{
    public function index(Request $request){

        $search = $request->query('search');
        $id = $request->query('id');

        if ($search) {
            $tenis = Item::where('nome', 'like', '%' . $search . '%')->get();
        } else {
            $tenis = Item::all();
        }
        return view('welcome', ['tenis' => $tenis, 'search' => $search]);
    }

    public function create(){
        return view('tenis.create');
    }

    public function store(Request $request) {

        $item = new item;

        $item->nome = $request->nome;
        $item->tipo = $request->tipo;
        $item->marca = $request->marca;
        $item->cor = $request->cor;
        $item->descricao = $request->descricao;
        $item->tam = $request->tam;
        $item->preco = $request->preco;

        if($request->hasFile('img') && $request->file('img')->isValid()) {

            $requestImg = $request->img;

            $extension = $requestImg->extension();

            $imgName = md5($requestImg->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImg->move(public_path('img/tenis'), $imgName);

            $item->img = $imgName;
        }

        $user = auth()->user();
        $item->user_id = $user->id;

        $item->save();

        return redirect('/') -> with('msg', 'Tênis cadastrado com sucesso');
    }

    public function show($id){
        $item = Item::findOrFail($id);

        $itemOwner = User::where('id', $item->user_id)->first()->toArray();

        return view('tenis.show', ['item' => $item, 'itemOwner' => $itemOwner]);
    }

    public function dashboard(){

        $user = auth()->user();

        $tenis = $user->tenis;

        $tenisInteressados = $user->tenisInteressados;

        return view('tenis.dashboard', ['tenis' => $tenis, 'tenisInteressados' => $tenisInteressados]);
    }
    public function destroy($id) {

        Item::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Tênis excluído com sucesso.');

    }

    public function edit($id) {

        $user = auth()->user();
        
        $item = Item::findOrFail($id);

        if($user->id != $item->user_id) {
         
            return redirect('/dashboard');
        }

        return view('tenis.edit', ['item' => $item]);

    }

    public function update(Request $request) {

        $data = $request->all();

        if($request->hasFile('img') && $request->file('img')->isValid()) {

            $requestImg = $request->img;

            $extension = $requestImg->extension();

            $imgName = md5($requestImg->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImg->move(public_path('img/tenis'), $imgName);

            $data['img'] = $imgName;
        }

        Item::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Tênis alterado com sucesso');

    }
    
    public function joinItem($id) {

        $user = auth()->user();

        $user->tenisInteressados()->attach($id);

        $item = Item::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Item adicionado com sucesso' . $item->nome);

    }

    public function leaveItem($id) {

        $user = auth()->user();

        $user->tenisInteressados()->detach($id);

        $item = Item::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Tênis removido do carrinho' . $item->nome);

    }

}
