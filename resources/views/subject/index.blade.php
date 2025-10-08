<x-layout judul="Daftar Mata Pelajaran">
    <div class="w-full max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-xl font-bold mb-4">Daftar Mata Pelajaran</h2>

    <table class="w-full border border-gray-300 text-sm text-left">
        <thead>
            <tr>
                <th class="border px-4 py-2 bg-gray-200">No</th>
                <th class="border px-4 py-2 bg-gray-200">Nama</th>
                <th class="border px-4 py-2 bg-gray-200">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subjects as $index => $subject)
                <tr>
                    <td class="border px-4 py-2 text-center">{{ $index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $subject->name }}</td>
                    <td class="border px-4 py-2">{{ $subject->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</x-layout>
