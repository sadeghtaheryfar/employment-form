<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://www.farsgamer.com/admin/media/logos/favicon.ico">
    <link rel="icon" href="https://www.farsgamer.com/site/images/logo-icon.png">
    <link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.css') }}">
    <title>استخدام در فارس گیمر</title>
</head>

<body dir="rtl">
    <main class="flex flex-col p-[2rem] justify-center items-center border-[1px] border-[#0000ff] m-[1rem] rounded-lg">
        <div class="mb-[1rem]">
            <img class="w-[12rem]"
                src="https://ci6.googleusercontent.com/proxy/iazuZx2B58MeRJgS2PDDGcBAmFFdW3OHjta0Oi_D-NwAE9kvpaDGoA28asPqYE-mcBTmF_XTnce8CDYxz-Igfj0=s0-d-e1-ft#https://www.farsgamer.com/site/images/logo.png"
                alt="">
        </div>

        <form class="form-style w-full" method="post" action="{{ route('send-recruitments') }}">
            @csrf
            @foreach ($InputsFrom as $item)
                @if ($item->type == 'text')
                    <div>
                        <label for="{{ $item->name }}">{{ $item->title }} *</label>

                        <input id="title" name="{{ $item->name }}" type="text" value="{{ old('title') }}"
                            placeholder="{{ $item->placeholder }}" class="bg-gray-50  block w-full">
                    </div>
                @endif

                @if ($item->type == 'number')
                    <div>
                        <label for="{{ $item->name }}">{{ $item->title }} *</label>

                        <input id="title2" name="{{ $item->name }}" type="number" value="{{ old('title') }}"
                            placeholder="{{ $item->placeholder }}" class="bg-gray-50  block w-full">
                    </div>
                @endif

                @if ($item->type == 'textarea')
                    <div>
                        <label for="{{ $item->name }}">{{ $item->title }} *</label>

                        <textarea id="title3" name="{{ $item->name }}" type="number" placeholder="{{ $item->placeholder }}"
                            class="bg-gray-50  block w-full h-[10rem]">{{ old('title') }}</textarea>
                    </div>
                @endif

                @if ($item->type == 'select')
                    <div>
                        <label for="{{ $item->name }}">{{ $item->title }} *</label>

                        <select id="{{ $item->name }}"
                            name="{{ $item->name }}"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required autofocus>
                            @foreach (json_decode($item->select_values) as $item)
                                <option value="{{ $item }}" @if (old('{{ $item }}') == '{{ $item }}') selected @endif>
                                    {{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
            @endforeach
            <div class="flex justify-end">
                <button
                    class="text-white mt-[1rem] pyx-[2rem] bg-[#0000ff] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                    type="submit">ارسال درخواست</button>
            </div>
        </form>
    </main>
</body>
<script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
@include('alerts.success')
@include('alerts.error')

</html>
