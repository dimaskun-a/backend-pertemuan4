<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index() 
    {
        echo "menampilkan data pasien covid";
    }

    public function store(Request $Request) {
        echo "menambahkan pasien covid - $Request->nama";
    }

    public function update(Request $request, $id) {
        echo "mengedit data pasien covid - id $id - $request->nama";
    }

    public function destroy($id) {
        echo "menghapus data hewan - id $id";
    }
}
