<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pureskin</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-cover bg-center bg-no-repeat text-white flex items-center justify-center min-h-screen" style="background-image: url('/images/users/natural-background.jpg');">

    <div class="bg-[#FFDCDC] p-8 rounded-xl w-full max-w-md border-1 border-black shadow-[3px_3px_16px_0px_rgba(0,0,0,1)]">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Selamat Datang Kembali</h2>

        @if ($errors->any())
            <div class="bg-red-500/20 border border-red-500 text-red-500 p-3 rounded mb-4 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm mb-1 text-gray-600">Email</label>
                <input type="email" name="email" class="w-full bg-white text-black rounded p-2.5 outline-none focus:ring-2 focus:ring-blue-500 transition" required>
            </div>
            <div>
                <label class="block text-sm mb-1 text-gray-600">Password</label>
                <input type="password" name="password" class="w-full bg-white text-black rounded p-2.5 outline-none focus:ring-2 focus:ring-blue-500 transition" required>
            </div>
            <button type="submit" class="w-full bg-[#FFAAAA] hover:bg-[#FF9292] text-gray-800 py-2.5 rounded font-bold transition duration-300">
                Masuk
            </button>
        </form>

        <p class="text-center mt-6 text-sm text-gray-600">
            Belum punya akun? <a href="{{ route('register') }}" class="text-black hover:underline">Daftar sekarang</a>
        </p>
    </div>

</body>
</html>