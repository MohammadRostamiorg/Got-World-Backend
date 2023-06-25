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
        .container input , .container select , .container textarea{
            width: 80%;
            margin: 30px;
            height: 50px;
            color: #fff;
            background: rgba(0,0,0,.5);
            border: none;

        }
        .container label{
            display: block;
            direction: rtl;
            text-align: right;

        }
        .container textarea{
            height: 100px;
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
            <div class="row">
                <label style="display: block">
                    پدر :
                </label>
                <br>
                <br>
                <Input type="text" placeholder="اسم پدر کارکتر را وارد کنید">
            </div>
            <div class="row">
                <label style="display: block">
                    مادر :
                </label>
                <br>
                <br>
                <Input type="text" placeholder="اسم مادر کارکتر را وارد کنید">
            </div>
            <div class="row">
                <label style="display: block">
                    خاندان :
                </label>
                <br>
                <br>
                <select>
{{--                    this secition will be dynamic later --}}
                    <option>خاندان را انتخاب کنید</option>
                    <option>لنیستر</option>
                    <option>استارک</option>
                    <option>تارگرین</option>
                    <option>باراتیون</option>
                    <option>گریجوی</option>
                    <option>تالی</option>
                </select>
            </div>

            <div class="row">
                <label style="display: block">
                    لقب ها(لقب هارا با کاما , از هم جدا کنید) :
                </label>
                <br>
                <br>
                <textarea>

                </textarea>
            </div>
        </form>
    </div>

@endsection
