@extends('Panel.layout.master')

@section('content')
    <style>
        .container {
            width: 85lvw;
            min-height: 50lvh;
            background: #191C24;
            margin: 100px auto;
            direction: rtl;
            box-sizing: border-box;
            padding: 50px;
        }

        .container .row {
            display: flex;
            flex-direction: column;
        }

        .container input, .container select, .container textarea {
            width: 80%;
            margin: 30px;
            height: 50px;
            color: #fff;
            background: rgba(0, 0, 0, .5);
            border: none;

        }

        .container label {
            display: block;
            direction: rtl;
            text-align: right;

        }

        .container textarea {
            height: 100px;
        }
    </style>
    <div class="container">
        <form method="post" action="{{route('character.editStore')}}">

            @csrf
            <input name="id" type="hidden" value="{{ $Character->id }}">
            <div class="row">
                <label style="display: block">
                    اسم :
                </label>
                <br>
                <br>
                <Input value="{{$Character->name}}" name="name" type="text" placeholder="اسم کارکتر را وارد کنید">
            </div>
            <div class="row">
                <label style="display: block">
                    پدر :
                </label>
                <br>
                <br>
                <Input value="{{$Character->father}}" name="father" type="text"
                       placeholder="اسم پدر کارکتر را وارد کنید">
            </div>
            <div class="row">
                <label style="display: block">
                    مادر :
                </label>
                <br>
                <br>
                <Input value="{{$Character->mother}}" name="mother" type="text"
                       placeholder="اسم مادر کارکتر را وارد کنید">
            </div>
            <div class="row">
                <label style="display: block">
                    خاندان :
                </label>
                <br>
                <br>
                <select name="house">
                    {{--                    this secition will be dynamic later --}}

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
                <textarea name="aliases">
                    {{implode( "," , json_decode($Character->aliases)) }}


                </textarea>


            </div>


            <div class="row">
                <label style="display: block">
                    تولد :
                </label>
                <br>
                <br>
                <Input value="{{$Character->born}}" name="born" type="text" placeholder="سال تولد بر اساس فتح اگان">
            </div>


            <div class="row">
                <label style="display: block">
                    مرگ :
                </label>
                <br>
                <br>
                <Input value="{{$Character->died}}" name="died" type="text" placeholder="سال مردن بر اساس فتح اگان">
            </div>
            <div class="row">
                <label style="display: block">
                    جنسیت :
                </label>
                <br>
                <br>
                <select name="gender">
                    @if($Character->isFemale )
                        <option value="male">
                            مذکر
                        </option>
                        <option selected value="female">
                            مونث
                        </option>
                    @else

                        <option selected value="male">
                            مذکر
                        </option>
                        <option value="female">
                            مونث
                        </option>
                    @endif

                </select>
            </div>

            <div class="row">
                <label style="display: block">
                    فرزند ها(فرزند هارا با کاما , از هم جدا کنید) :
                </label>
                <br>
                <br>
                <textarea name="children">

                </textarea>
            </div>

            <div class="row">
                <label style="display: block">
                    بازیگر :
                </label>
                <br>
                <br>
                <Input name="playedBy" type="text" placeholder="چه کسی نقش اورا ایفا کرده">
            </div>
            <div class="row">
                <label style="display: block">
                    متن معرفی کاراکتر
                </label>
                <br>
                <br>
                <textarea name="content" style="min-height: 500px">

                </textarea>
            </div>


            <div class="row">
                <button
                    style="background: #00ac4a;width: 100px;height: 50px;border-radius:30px;box-sizing: border-box;padding: 5px;text-align: center;color: #fff;border: none ">
                    ثبت کاراکتر
                </button>
            </div>

        </form>
    </div>

@endsection
