@extends('layouts.app')

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap">

@section('content')
    <style>
        body {
            margin: 150px 200px 0;
            font-family: 'Raleway', sans-serif; /* Apply the desired font */
        }

        .faq-container {
            max-width: 600px; /* Set a maximum width for the FAQ container */
            margin: 20px auto; /* Center the FAQ container */
        }

        .faq-question {
            background-color: rgb(230, 240, 226);
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 10px;
            padding: 15px;
            cursor: pointer;
        }

        .faq-answer {
            display: none;
            padding: 15px;
        }

        .faq-list {
            list-style-type: disc; /* Use disc bullets for the list */
            padding-left: 20px; /* Add some left padding for the list */
        }
    </style>

    <div class="faq-container">
        <h1>{{$title}}</h1>

        @if (count($faqs) > 0)
            <ul class="faq-list">
                @foreach ($faqs as $faq)
                    <li class="faq-question" onclick="toggleAnswer(this)" >
                        {{$faq['question']}}
                        <div class="faq-answer">
                            {{$faq['answer']}}
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    <script>
        function toggleAnswer(element) {
            var answer = element.querySelector('.faq-answer');
            answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
        }
    </script>
@endsection
