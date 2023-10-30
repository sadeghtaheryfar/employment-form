@extends('admin.layouts.master')

@section('title')
    dashboard
@endsection

@section('content')
    <section class="w-full h-full align-top">
        <div class="flex justify-between items-center mb-[1rem] border-b-[1px] pb-[0.5rem]">
            <div class="font-bold">
                <h1>درخواست شماره #{{ $recruitment->id }}</h1>
            </div>

            <div>

            </div>
        </div>

        <div dir="rtl">
            <ul>
                @foreach ($recruitments as $item => $key)
                    <li class="my-[1rem]">
                        <label for="title">{{ $item }}</label>

                        <input id="title" value="{{ $key }}" name="title" type="text" placeholder="عنوان ورودی را وارد کنید" disabled
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
