<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
    <script src="https://cdn.jsdelivr.net/npm/htmx.org@1.9.12/dist/htmx.min.js"></script>
</head>
<body class="flex flex-col min-h-screen">


    <nav id="main-nav" class="bg-teal-700 text-white p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div>
                <a href="/" class="p-3 hover:bg-teal-600">Home</a>
                <a href="/about" class="p-3 hover:bg-teal-600">About</a>
                <a href="/product" class="p-3 hover:bg-teal-600">Products</a>
                <a href="/contact" class="p-3 hover:bg-teal-600">Contact Us</a>
            </div>

        </div>
    </nav>


    <div class="flex-1 p-5">
        <article id="content" class="min-h-[35rem]">
            @yield('content')
        </article>
    </div>

</body>
</html>
