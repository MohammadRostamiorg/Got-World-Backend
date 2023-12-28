@extends('Panel.layout.master')


@section('content')
    <style>
        .container{
            width: 85lvw;
            min-height: 50lvh;
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
        <form enctype="multipart/form-data" method="post" action="{{route('house.store')}}">
            @csrf

            <div class="row">
                <label style="display: block">
                    اسم :
                </label>
                <br>
                <br>
                <Input name="name" type="text" placeholder="اسم خاندان را وارد کنید">
            </div>
            <div class="row">
                <label style="display: block">
                    لوگو :
                </label>
                <br>
                <br>
                <Input name="logo" type="file">
            </div>
            <div class="row">
                <label style="display: block">
                    موسس :
                </label>
                <br>
                <br>
                <Input name="founder" type="text" placeholder="اسم موسس خاندان را وارد کنید">
            </div>
            <div class="row">
                <label style="display: block">
                    قلعه :
                </label>
                <br>
                <br>
                <Input name="castle"  type="text" placeholder="اسم قلعه مربوط به خاندان را وارد کنید">
            </div>

            <div class="row">
                <label style="display: block">
                    شعار خاندان :
                </label>
                <br>
                <br>
                <Input name="CoatOfArms"  type="text" placeholder="شعار اصلی خاندان (استارک : winter is comming)">
            </div>



            <div class="row">
                <label style="display: block">
                    متن معرفی خاندان
                </label>
                <br>
                <br>
                <textarea name="content" style="min-height: 500px">

                </textarea>
            </div>


            <div class="row">
                <button style="background: #00ac4a;width: 100px;height: 50px;border-radius:30px;box-sizing: border-box;padding: 5px;text-align: center;color: #fff;border: none ">
                    ثبت کاراکتر
                </button>
            </div>

        </form>
    </div>

@endsection
