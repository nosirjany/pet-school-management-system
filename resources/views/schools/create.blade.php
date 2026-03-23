<form method="POST" action="{{ isset($school) ? route('schools.update', $school) : route('schools.store') }}">
    @csrf
    @if(isset($school))
        @method('PUT')
    @endif

    <input type="text" name="name" placeholder="Название" value="{{ $school->name ?? '' }}"><br>
    <input type="text" name="region" placeholder="Регион" value="{{ $school->region ?? '' }}"><br>
    <input type="text" name="city" placeholder="Город" value="{{ $school->city ?? '' }}"><br>
    <input type="text" name="address" placeholder="Адрес" value="{{ $school->address ?? '' }}"><br>
    <input type="text" name="director_name" placeholder="Директор" value="{{ $school->director_name ?? '' }}"><br>
    <input type="text" name="phone" placeholder="Телефон" value="{{ $school->phone ?? '' }}"><br>

    <button type="submit">Сохранить</button>
</form>
