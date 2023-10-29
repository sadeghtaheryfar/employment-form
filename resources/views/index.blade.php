<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body dir="rtl" style="padding: 10rem">
    <form class="form-style" method="post" action="{{ route('send-recruitments') }}">
        @csrf
        @foreach ($InputsFrom as $item)
            @if ($item->type == 'text')
                <div>
                    <label for="title">{{ $item->title }} *</label>

                    <input id="title" name="title" type="text" value="{{ old('title') }}"
                        placeholder={{ $item->placeholder }}
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            @endif

            @if ($item->type == 'number')
                <div>
                    <label for="title2">{{ $item->title }} *</label>

                    <input id="title2" name="title2" type="number" value="{{ old('title') }}"
                        placeholder={{ $item->placeholder }}
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            @endif

            @if ($item->type == 'textarea')
                <div>
                    <label for="title3">{{ $item->title }} *</label>

                    <textarea id="title3" name="title3" type="number" placeholder={{ $item->placeholder }}
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('title') }}</textarea>
                </div>
            @endif
        @endforeach
        <div class="flex">
            <button
                class="text-white mt-[2rem] pyx-[2rem] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="submit">ارسال درخواست</button>
        </div>
    </form>
</body>

</html>
