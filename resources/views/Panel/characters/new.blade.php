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


            <div class="row">
                <label style="display: block">
                    تولد :
                </label>
                <br>
                <br>
                <Input type="text" placeholder="سال تولد بر اساس فتح اگان">
            </div>


            <div class="row">
                <label style="display: block">
                    مرگ :
                </label>
                <br>
                <br>
                <Input type="text" placeholder="سال مردن بر اساس فتح اگان">
            </div>
            <div class="row">
                <label style="display: block">
                    جنسیت  :
                </label>
                <br>
                <br>
                <select>
                    <option>
                        مذکر
                    </option>
                    <option>
                        مونث
                    </option>
                </select>
            </div>

            <div class="row">
                <label style="display: block">
                    فرزند ها(فرزند هارا با کاما , از هم جدا کنید) :
                </label>
                <br>
                <br>
                <textarea>

                </textarea>
            </div>

            <div class="row">
                <label style="display: block">
                    بازیگر :
                </label>
                <br>
                <br>
                <Input type="text" placeholder="چه کسی نقش اورا ایفا کرده">
            </div>
            <div class="row">
                <label style="display: block">
                    متن معرفی کاراکتر
                </label>
                <br>
                <br>
                <textarea style="min-height: 500px">

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
