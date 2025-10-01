<x-layout judul="Daftar Classroom">
    <h2 class="text-xl font-bold mb-4">Daftar Classroom</h2>

    <table class="table-auto border-collapse border border-gray-400 w-full">
        <thead>
            <tr>
                <th class="border px-4 py-2 bg-gray-200">ID</th>
                <th class="border px-4 py-2 bg-gray-200">Nama Classroom</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classrooms as $classroom)
            <tr>
                <td class="border px-4 py-2 text-center bg-gray-200">{{ $classroom->id }}</td>
                <td class="border px-4 py-2 bg-gray-200">{{ $classroom->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
