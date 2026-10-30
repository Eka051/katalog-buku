<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Karyawan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-2xl shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Daftar Karyawan</h1>
            <a href="{{ route('karyawan.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-xl hover:bg-indigo-700">+ Tambah</a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="p-3 rounded-l-xl">No</th>
                    <th class="p-3">Nama Karyawan</th>
                    <th class="p-3 rounded-r-xl text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($karyawans as $index => $row)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3">{{ $index + 1 }}</td>
                    <td class="p-3 font-medium">{{ $row->nama }}</td>
                    <td class="p-3 text-center space-x-2">
                        <a href="{{ route('karyawan.edit', $row->id) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('karyawan.destroy', $row->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Yakin mau di-delete?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="3" class="text-center p-6 text-gray-400">Belum ada data karyawan</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>