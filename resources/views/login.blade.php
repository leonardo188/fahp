<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body>
    <div class="bg-[#1AA7EC] w-full h-screen flex flex-grow items-center justify-center">
        <div class="w-[500px] h-[250px] bg-white rounded-lg p-4 items-center justify-center flex flex-col">
            <h2 class="font-bold text-3xl">Welcome</h2>
            <div class="text-xs">Login first for use SPK with metode Fuzzy AHP</div>
            <input type="text" placeholder="Email Address" class="w-full h-10 mt-4 border rounded-lg p-2" required/>
            <input type="password" placeholder="Password" class="w-full h-10 mt-4 border rounded-lg p-2" required />
            <button type="submit" class="w-full h-10 mt-4 border rounded-lg bg-[#223BC9]">
                <div class="text-white">Login</div>
            </button>
        </div>
    </div>
</body>

</html>
