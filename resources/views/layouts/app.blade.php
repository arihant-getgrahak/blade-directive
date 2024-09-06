<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="csrf-token" content="{{ csrf_token()}}">
</head>

<body>
    <header class="h-10 p-2 border-b-2 border-black mb-2">
        <nav class="flex justify-between items-center">
            <div class="title">
                <h1 class="text-xl">
                    Blade Directive
                </h1>
            </div>

            <div class="content mr-5 text-lg">
                <p>Create by Arihant Jain</p>
            </div>

        </nav>
    </header>

    <div class="h-screen">
        <div class="student-details">
            @yield("st-details")
        </div>

        <div class="divisible-by-2">
            @yield("divisible-by-2")
        </div>
    </div>



    <footer class="border-t-2 border-black h-8 flex items-end justify-center">
        <p>
            Task 06/09/2024 © Arihant Jain
        </p>
    </footer>
</body>

</html>