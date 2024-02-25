<!DOCTYPE html>
<html >
<head>
    <title>L10_task_list_app</title>
    @yield('styles')
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- blade-formattet-disbale --}}
        <style type="text/Tailwindcss">
            .btn{
                @apply rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/30 hover:bg-slate-300
            }
            
            .link{
                @apply font-medium text-gray-700 underline decoration-pink-500
            }

            label {
                @apply block uppercase text-slate-700 mb-2
            }

            input,textarea {
                @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
            }
            
            .error-message{
                @apply text-red-500 text-sm
            }

        </style>
    {{-- blade-formattet-enbale --}}
</head>
<body class="container mx-auto mt-10 mb-10 max-w-lg">
    @if (session()->has('success'))
        <div>{{ session('success') }}</div>
    @endif
    <h1 class="mb-4 text-2xl	">@yield('title')</h1>
    <div class="">
        
        @if (session()->has('success'))

       
        <div class="mb-10 rounded border border-green-400 bg-green-100 px-4 py-3 text-lg text-green-700">
        <strong>Success !</strong>   
        <div>
            {{ session('success') }} 
        </div>
        </div>

        @endif

    </div>
    @yield('content')
</body>
</html>