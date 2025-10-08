<x-layout judul="Daftar Guru">
    <div class="w-full max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-xl font-bold mb-4">Daftar Guru</h2>

    <table class="table-auto border-collapse border border-gray-400 w-full">
        <thead>
            <tr>
                <th class="border px-4 py-2 bg-gray-200">No</th>
                <th class="border px-4 py-2 bg-gray-200">Nama</th>
                <th class="border px-4 py-2 bg-gray-200">Mata Pelajaran</th>
                <th class="border px-4 py-2 bg-gray-200">Telepon</th>
                <th class="border px-4 py-2 bg-gray-200">Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $index => $teacher)
                <tr>
                    <td class="border px-4 py-2 text-center">{{ $index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $teacher->name }}</td>
                    <td class="border px-4 py-2">{{ $teacher->subject->name ?? '-' }}</td>
                    <td class="border px-4 py-2">{{ $teacher->phone }}</td>
                    <td class="border px-4 py-2">{{ $teacher->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</x-layout>