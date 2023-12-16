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
            'services' => ['Start-up introduction', 'Deployment Fund Arrangements', 'Networking', 'Marketing', 'Business Planning']
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

    public function faq(){
        // return view('pages.faq');

        $title = 'Frequently Asked Questions';

        $faqs = [
            [
                'question' => 'Can I use it without opening an account?',
                'answer' => 'To have the facilities of BeginBloc, you must have an account. Nevertheless, you can see the posts even being a guest.'
            ],
            [
                'question' => 'How can I write a post?',
                'answer' => 'First, you have to open an account. Then from the dashboard or the blog page, you can select "Create Post" and have your own post.'
            ],
            [
                'question' => 'Is there any format to write a post?',
                'answer' => 'BeginBloc imitates the simplicity of a blog post. Therefore to catch the contributors, we suggest you to add a catchy title with a photo, and give a clear overview of your project thus the investors know about the process. You are suggested to include your transaction and contact details for further inquiry. '
            ],
            [
                'question' => 'How much should I enter for amount? What is it?',
                'answer' => 'Amount stands for the budget you need for your project deployment. It will also be taken as the budget.'
            ],
            // Add more FAQs as needed
        ];

        return view('pages.faq', compact('title', 'faqs'));
    }
}
