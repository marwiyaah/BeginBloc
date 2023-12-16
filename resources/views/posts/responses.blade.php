<!-- responses.blade.php -->

@extends('layouts.app')

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap">

@section('content')
<style>
    /* public/css/styles.css */
    body {
        margin: 0 0 0 150px;
        font-family: 'Raleway', sans-serif; /* Apply the desired font */
    }

    /* Added styling for the table */
    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #b84dce;
        color: #fff;
        border-radius: 5px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }
</style>

<div style="width: 70%; max-width: 900px; margin: 200px 100px 0 100px; padding: 20px; box-shadow: 0px 0px 0px 2px rgba(0, 0, 0, 0.05); border-radius: 15px; background-color: rgba(240, 217, 155, 0.62);">
    <div style="display: flex; flex-direction: column; align-items: center; gap: 20px;">
        
        <div style="color: #4E4F51; font-size: 24px; font-family: Raleway; font-weight: 700; letter-spacing: 0.50px;">
            Responses for <span style="color: #549715;">"{{ $post->title }}"</span>
        </div>
        

        @if(session('message'))
            <div style="width: 100%; padding: 10px; background-color: {{ session('status') === 'success' ? '#2A6877' : '#C64F36' }}; color: #F0F1F3; font-size: 18px; text-align: center; border-radius: 8px;">
                {{ session('message') }}
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>Contributor ID</th>
                    <th>Contributor Name</th>
                    <th>Amount Contributed</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post->contributions as $contribution)
                    <tr>
                        <td>{{ $contribution->user_id }}</td>
                        <td>{{ $contribution->user->name }}</td>
                        <td>${{ $contribution->amount }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
