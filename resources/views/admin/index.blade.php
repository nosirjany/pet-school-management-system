<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админка школ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Админка школ</h1>
    <a href="{{ route('schools.create') }}" class="btn btn-primary mb-3">Добавить школу</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Город</th>
            <th>Директор</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($schools as $school)
            <tr>
                <td>{{ $school->id }}</td>
                <td>{{ $school->name }}</td>
                <td>{{ $school->city }}</td>
                <td>{{ $school->director }}</td>
                <td>
                    <a href="{{ route('schools.edit', $school->id) }}" class="btn btn-warning btn-sm">Редактировать</a>
                    <form action="{{ route('schools.destroy', $school->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
