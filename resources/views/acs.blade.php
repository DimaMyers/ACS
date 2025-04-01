<x-layout>
    <head>
        <title>ACS</title>

        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid #000;
                padding: 8px;
                text-align: left;
            }
            .table {
                padding: 80px;
            }
        </style>
    </head>

    <div class="table">
        <table border="1" class="fixed inset-x-0 bg-gray-900 border-b">
            <thead>
            <tr>
                <th>Дата</th>
                <th>Номер</th>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Отчество</th>
            </tr>
            </thead>
            <tbody>
            @foreach($people as $person)
                <tr>
                    <td>{{ $person->date->format('d.m.Y') }}</td>
                    <td>{{ $person->id }}</td>
                    <td>{{ $person->last_name }}</td>
                    <td>{{ $person->first_name }}</td>
                    <td>{{ $person->middle_name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</x-layout>
