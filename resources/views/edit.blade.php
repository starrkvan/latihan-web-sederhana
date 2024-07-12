<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Edit Data</title>
</head>

<body class="bg-gray-200 flex items-center justify-center h-screen">
    <!-- Existing Navbar and Header code -->

    <main>
        <div class="container mx-auto p-4">
            <div class="bg-gray-300 p-8 rounded-md shadow-md w-full max-w-md mx-auto">
                <h1 class="text-2xl font-bold mb-4 text-center">Edit Data</h1>
                <form action="{{ route('update', ['id' => $siswa->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-2">Nama</label>
                        <input type="text" name="nama" value="{{ $siswa->nama }}"
                            class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Nama">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-2">Tanggal Lahir</label>
                        <input type="date" name="ttl"
                            class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Input Tanggal Lahir">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-2">Sekolah</label>
                        <input type="text" name="sekolah" value="{{ $siswa->sekolah }}"
                            class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Sekolah">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-2">Keterangan</label>
                        <select name="keterangan"
                            class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="Lulus">Lulus</option>
                            <option value="Gagal">Gagal</option>
                        </select>
                    </div>
                    <div class="flex justify-between">
                        <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded-md">
                            <a href="/">Batal</a>
                        </button>
                        <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded-md">
                            Ubah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
