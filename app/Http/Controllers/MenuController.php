<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
  public function index()
  {
    return view('menu.index', [
      'menu' => Menu::all()
    ]);
  }

  public function create()
  {
    return view('menu.create');
  }

  public function store(Request $request)
  {
    $data_menu = $request->validate([
      'nameMenu'  => ['required'],
      'descMenu'  => ['required'],
      'photoMenu' => ['file', 'max:1024', 'mimes:jpg,png'],
      'price'     => ['required'],
    ]);

    if ($request->photoMenu) {
      $data_menu['photoMenu'] = $request->photoMenu->store('photo');
    } else {
      $data_menu['photoMenu'] = 0;
    }

    Menu::create($data_menu);

    return redirect('/menu/index')->with('success', 'Menu has been created!');
  }

  public function edit($id)
  {
    return view('menu.edit', [
      'menu' => Menu::where('id', $id)->first()
    ]);
  }

  public function update(Request $request, $id)
  {
    $data_menu = $request->validate([
      'nameMenu'  => ['required'],
      'descMenu'  => ['required'],
      'photoMenu' => ['file', 'max:1024', 'mimes:jpg,png'],
      'price'     => ['required'],
    ]);

    if ($request->photoMenu) {
      if ($request->oldPhoto) {
        Storage::delete("/$request->oldPhoto");
      }

      $data_menu['photoMenu'] = $request->photoMenu->store('photo');
    } else if ($request->oldPhoto) {
      $data_menu['photoMenu'] = $request->oldPhoto;
    } else {
      $data_menu['photoMenu'] = 0;
    }

    Menu::where('id', $id)->update($data_menu);

    return redirect('/menu/index')->with('success', 'Menu has been updated!');
  }

  public function destroy($id)
  {
    $menu = Menu::where('id', $id)->first();
    
    if ($menu->photoMenu) {
      Storage::delete("/$menu->photoMenu");
    }
    
    $menu->delete();

    return back()->with('success', 'Menu has been deleted!');
  }
}
