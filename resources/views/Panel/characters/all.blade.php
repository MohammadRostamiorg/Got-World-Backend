@extends('Panel.layout.master')


@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;

        }

        .container {
            width: 100vw;
            min-height: 50lvh;
            background: #191C24;
            margin: 100px auto;
            direction: rtl;
            box-sizing: border-box;
            padding: 50px;

        }

        .container-fluid {
            padding: 0;
        }

        .container .row {
            width: 90%;
            background: #000000;
            margin: 30px auto;
            padding: 50px;
            border-radius: 25px;
            color: #fff;
            text-align: center;
        }

        .container .row p {
            text-align: center;
            font-size: 2em;
        }
    </style>
    <div class="container">
        @foreach($Characters as $Character)
            <div class="row">
                <p>
                    {{ $Character->name }}
                </p>
                <div class="btns">

                    <form method="post" action="{{ url('/characters/delete/'.$Character->id) }}">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger">
                Delete
            </button>
                    </form>

                    </a>
                    <a class="block btn-link" href="{{ url('/characters/edit/'.$Character->id) }}">
                    <span class="btn btn-warning">

                            Edit
                    </span>
                    </a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
