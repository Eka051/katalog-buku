
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Karyawan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-md mx-auto bg-white p-6 rounded-2xl shadow-lg">
        <h1 class="text-xl font-bold mb-4">Tambah Karyawan</h1>
        <form action="{{ route('karyawan.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-700 mb-1">Nama Karyawan</label>
                <input type="text" name="nama" value="{{ old('nama') }}" class="w-full border rounded-xl p-2.5" required>
            </div>
            <div class="flex justify-end space-x-2">
                <a href="{{ route('karyawan.index') }}" class="bg-gray-300 px-4 py-2 rounded-xl">Batal</a>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-xl">Simpan</button>
            </div>
        </form>
    </div>
</body>
