@extends('Panel.layout.master')


@section('content')
    <style>
        .container{
            width: 85lvw;
            height: 90lvh;
            background: #191C24;
            margin: 100px auto;
            direction: rtl;
            box-sizing: border-box;
            padding: 50px;
        }
        .container .row{
            display: flex;
            flex-direction:column ;
        }
        .container input {
            width: 80%;
            margin: 30px;
            height: 5px;
            color: #fff;
            background: rgba(0,0,0,.5);
            border: none;

        }
        .container label{
            display: block;
            direction: rtl;
            text-align: right;

        }
    </style>
    <div class="container">
        <form action="">
            <div class="row">
                <label style="display: block">
                    اسم :
                </label>
                <br>
                <br>
                <Input type="text" placeholder="اسم کارکتر را وارد کنید">
            </div>
        </form>
    </div>

@endsection
