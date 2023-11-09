<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        $title = 'Welcome to the Home Page';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){

        $title = 'About Us';
        return view('pages.about') -> with('title', $title);
    }

    public function services(){

        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services') -> with($data);
    }

    public function dashboard(){
        return view('pages.dashboard');
    }

    public function login(){
        return view('pages.login');
    }

    public function register(){
        return view('pages.register');
    }

    public function review(){
        return view('pages.review');
    }

    public function responses(){
        return view('pages.responses');
    }

    public function history(){
        return view('pages.history');
    }

    public function deleteAcc(){
        return view('pages.deleteAcc');
    }
}
