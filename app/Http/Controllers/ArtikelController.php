<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function create() {
        return view('sbadmin2.layouts.form');
    }

    public function store(Request $request) {
        $new_artikel = ArtikelModel::save($request->all()); 
        return redirect('/artikel');
    }

    public function index(){
        $artikel = ArtikelModel::get_all();
        return view('sbadmin2.layouts.index', compact('artikel')); // compact('artikel')
    }

    public function show() {
    $artikel = ArtikelModel::find_by_id($id);

    return view('sbadmin2.layouts.show', compact($artikel));
    }

    public function edit() {
    $artikeledit = ArtikelModel::find_by_id($id) {
        return view('sbadmin2.layouts.edit', compact('artikeledit'));
    }

    public function update($id, Request $request) {
    $artikelupdate = ArtikelModel::update($id, $request->all());
    return redirect('/artikel');
    }

    public function destroy($id) {
        $deleted = ArtikelModel::destroy($id);
        return redirect('/artikel');

    }
}

