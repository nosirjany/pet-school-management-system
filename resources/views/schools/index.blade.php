<h2>Список школ</h2>

<a href="{{ route('schools.create') }}">Добавить школу</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Город</th>
        <th>Директор</th>
        <th>Действия</th>
    </tr>

    @foreach($schools as $school)
        <tr>
            <td>{{ $school->id }}</td>
            <td>{{ $school->name }}</td>
            <td>{{ $school->city }}</td>
            <td>{{ $school->director_name }}</td>
            <td>
                <a href="{{ route('schools.edit', $school) }}">Редактировать</a>

                <form action="{{ route('schools.destroy', $school) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
