<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class FlashMessageController extends Controller
{
    public function index()
    {
        return view('input');
    }
 
    public function pesan()
    {
        return redirect('/input')->with(['success' => 'Pesan Berhasil']);
    }
}