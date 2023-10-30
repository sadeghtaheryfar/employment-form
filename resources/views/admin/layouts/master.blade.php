<!DOCTYPE html>
<html lang="rtl">

<head>
    <title>@yield('title')</title>
    <link href="{{ asset('/dist/css/sweetalert.css') }}" rel="stylesheet">
    <!-- Sweet Alert -->
    <script src="{{ asset('/dist/js/sweetalert.min.js') }}"></script>
    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
    @include('admin.layouts.hed-tag')
</head>

<body dir="rtl">
    @include('admin.layouts.parshials.header')

    @include('sweetalert::alert')

    @include('admin.layouts.parshials.sidbar')

    <main>
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:text-red-400"
                        role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>

                        <div>
                            <span class="font-medium">{{ $error }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        @yield('content')
    </main>
</body>
@include('admin.layouts.scripts')
<script>
    $(document).on('click', '.button', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        swal({
                title: "Are you sure!",
                type: "error",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes!",
                showCancelButton: true,
            },
            function() {
                $.ajax({
                    type: "POST",
                    url: "{{ url('/destroy') }}",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        //
                    }
                });
            });
    });
</script>

</html>
