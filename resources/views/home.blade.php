<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="px-4 py-6 bg-slate-600 text-white mb-4">
        <div class="container my-0 mx-auto">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold text-emerald-400 uppercase">Logo</h1>
                <ul class="flex gap-6 items-center text-lg">
                    <li>
                        <a class="border-b-[3px] rounded hover:border-emerald-600 transition-all duration-300 border-emerald-500" href="/">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/support">
                            Support
                        </a>
                    </li>
                    <li>
                        <a href="/login">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <p class="ml-4"><span class="font-bold">{{ $message }}</span></p>
</body>

</html>