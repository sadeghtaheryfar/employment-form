@extends('admin.layouts.master')

@section('title')
    dashboard
@endsection

@section('content')
    <section class="w-full h-full align-top">
        <div class="flex justify-between items-center mb-[1rem] border-b-[1px] pb-[0.5rem]">
            <div class="font-bold">
                <h1>ساخت ورودی جدید</h1>
            </div>

            <div>

            </div>
        </div>

        <div dir="rtl" class="relative overflow-x-auto">
            <form class="form-style" method="post" action="{{ route('admin.input-forms.store') }}">
                @csrf
                <div>
                    <label for="type">نوع ورودی *</label>

                    <select id="type" name="type" id="type"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required autofocus>
                        <option value="text" @if (old('type') == 'text') selected @endif>text</option>

                        <option value="number" @if (old('type') == 'number') selected @endif>number</option>

                        <option value="textarea" @if (old('type') == 'textarea') selected @endif>textarea</option>

                        <option value="select" @if (old('type') == 'select') selected @endif>select</option>
                    </select>
                </div>

                <div>
                    <label for="title">عنوان *</label>

                    <input id="title" name="title" type="text" value="{{ old('title') }}"
                        placeholder="عنوان ورودی را وارد کنید"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <div>
                    <label for="placeholder">برچسب *</label>

                    <input id="placeholder" name="placeholder" type="text" value="{{ old('placeholder') }}"
                        placeholder="برچسب ورودی را وارد کنید"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <div>
                    <label for="name">key input *</label>

                    <input id="name" name="name" type="text" value="{{ old('name') }}"
                        placeholder="key input ورودی را وارد کنید"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <div>
                    <label for="select_values">select values</label>

                    <input id="select_values" name="select_values" disabled type="text" value="{{ old('select_values') }}"
                        placeholder="برچسب ورودی را وارد کنید"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    <p> * مقدار ها را با کاما (,) از هم جدا کنید ( برای اول و آخر نیاز به کاما نیست )</p>
                </div>

                <div class="flex">
                    <button
                        class="text-white mt-[2rem] pyx-[2rem] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="submit">ساخت ورودی </button>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('scripts')
    @parent
    <script>
        $('#type').change(function() {
            if ($('#type').find(':selected').val() == 'select') {
                $('#select_values').removeAttr('disabled');
            } else {
                $('#select_values').attr('disabled', 'disabled');
            }
        })
    </script>
@endsection
