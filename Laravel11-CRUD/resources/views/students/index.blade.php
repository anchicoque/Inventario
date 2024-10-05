<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Students List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            
                <div>
                    <a href="{{ route('students.create')}}">Students Create:</a>
                </div>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>AGE</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody
                    @foreach ($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->age}}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

            </div>
        </div>
    </div>
</x-app-layout>