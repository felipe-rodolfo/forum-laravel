<h1>Listagem dos suportes</h1>

<a href="{{route('supports.store')}}">Criar Dúvida</a>

<table>
    <thead>
        <th>Assunto</th>
        <th>status</th>
        <th>Descrição</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($supports as $support)
            <td>{{ $support->subject }}</td>
            <td>{{ $support->status }}</td>
            <td>{{ $support->body }}</td>
            <td></td>
        @endforeach
    </tbody>
</table>
