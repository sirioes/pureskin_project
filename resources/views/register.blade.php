<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-cover bg-center bg-no-repeat text-white flex items-center justify-center min-h-screen" style="background-image: url('/images/users/natural-background.jpg');">

    <div class="bg-[#FFDCDC] p-8 rounded-xl w-full max-w-md border border-black shadow-[3px_3px_16px_0px_rgba(0,0,0,1)]">

        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Buat Akun Baru</h2>

        <form action="{{ route('register.post') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm mb-1 text-gray-600">Nama Lengkap</label>
                <input type="text" name="name" class="w-full bg-white text-black rounded p-2.5 outline-none focus:ring-2 focus:ring-green-500 transition" required>
            </div>
            <div>
                <label class="block text-sm mb-1 text-gray-600">Email</label>
                <input type="email" name="email" class="w-full bg-white text-black rounded p-2.5 outline-none focus:ring-2 focus:ring-green-500 transition" required>
                @error('email') <span class="text-red-400 text-xs mt-1">{{ $message }}</span> @enderror
            </div>
            <div>
                <label class="block text-sm mb-1 text-gray-600">Password</label>
                <input type="password" name="password" class="w-full bg-white text-black rounded p-2.5 outline-none focus:ring-2 focus:ring-green-500 transition" required>
                @error('password') <span class="text-red-400 text-xs mt-1">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="w-full bg-[#FFAAAA] hover:bg-[#FF9292] text-gray-800 py-2.5 rounded font-bold transition duration-300">
                Daftar Akun
            </button>
        </form>

        <p class="text-center mt-6 text-sm text-gray-600">
            Sudah punya akun? <a href="{{ route('login') }}" class="text-black hover:underline">Login di sini</a>
        </p>
    </div>

</body>

</html>