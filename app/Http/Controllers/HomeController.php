<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{

    public function index()
    {
        $data = [
            'title' => 'Телефонная книга',
            'pagetitle' => 'Телефонная книга на Laravel'
        ];
        return view('pages.notes.index', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Редактирование: Телефонная книга',
            'pagetitle' => 'Редактирование: Телефонная книга на Laravel'
        ];
        return view('pages.notes.edit', $data);
    }

}