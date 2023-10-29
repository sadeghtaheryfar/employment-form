@extends('admin.layouts.master')

@section('title')
    dashboard
@endsection

@section('content')
    <section class="w-full h-full align-top">
        <div class="flex justify-between items-center mb-[1rem] border-b-[1px]">
            <div class="font-bold">
                <h1>ورودی ها</h1>
            </div>

            <div>
                <a href="{{ route('admin.input-forms.create') }}"><button type="button"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">ساخت
                        ورودی جدید</button></a>
            </div>
        </div>

        <div dir="rtl" class="relative overflow-x-auto">
            <table class="w-full text-sm text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase">
                    <tr>
                        <th scope="col" class="px-6 py-3">#</th>

                        <th scope="col" class="px-6 py-3">عنوان</th>

                        <th scope="col" class="px-6 py-3">نوع ورودی</th>

                        <th scope="col" class="px-6 py-3">تنظیمات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($InputsFrom as $input)
                        <tr>
                            <th class="px-6 py-4">{{ $input->id }}</th>

                            <td class="px-6 py-4">{{ $input->title }}</td>

                            <td class="px-6 py-4">{{ $input->type }}</td>

                            <td class="px-6 py-4 flex">
                                <a href="{{ route('admin.input-forms.edit', $input) }}"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 cursor-pointer">ویرایش</a>
                                <form method="post" action="{{ route('admin.input-forms.destroy',$input) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 cursor-pointer">حذف</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
