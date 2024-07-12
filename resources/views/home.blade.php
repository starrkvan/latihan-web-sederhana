<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Latihan</title>
</head>

<body>

    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                        </div>
                        <h1 class="text-2xl font-bold tracking-tight text-white">Data Siswa</h1>
                    </div>

                    <div class="flex ml-auto">
                        <form action="{{ route('home') }}" method="get" class="flex items-center space-x-2">
                            <input type="text" class="text-black px-4 py-2 rounded-md" name="search" value=""
                                placeholder="Cari data disini">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-md" type="submit">Cari</button>
                        </form>
                    </div>

                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <header class="bg-white shadow">
            <div class="text-right max-w-1g px-1 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900 text-center">Data Siswa Sekolah Di Jogja
                </h1>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md mb-4">
                    <a href="/tambah">Tambah Data</a>
                </button>
            </div>
        </header>

        <main>
            <div class="container mx-auto p-4">
                <div class="grid grid-cols-2 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($data as $item)
                        <div class="bg-gray-200 p-4 rounded-md shadow-md">
                            <div>
                                <p>Nama: {{ $item->nama }}</p>
                                <p>TTL: {{ $item->ttl }}</p>
                                <p>Sekolah: {{ $item->sekolah }}</p>
                                <p>Keterangan: {{ $item->keterangan }}</p>
                            </div>
                            <div class="mt-4 flex justify-between">
                                <button class="bg-gray-300 text-black px-3 py-1 rounded-md">
                                    <a href="{{ route('edit', $item->id) }}">Edit</a>
                                </button>
                                <form action="{{ route('delete', ['id' => $item->id]) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus data?')">
                                    @csrf
                                    @method('delete')
                                    <button class="bg-gray-300 text-black px-3 py-1 rounded-md">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>
    </div>

</body>

</html>
