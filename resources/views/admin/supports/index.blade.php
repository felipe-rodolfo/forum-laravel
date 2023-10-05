<h1>Listagem dos suportes</h1>

<a href="{{route('supports.create')}}">Criar Dúvida</a>

<table>
    <thead>
        <th>Assunto</th>
        <th>status</th>
        <th>Descrição</th>
        <th></th>
    </thead>
    @foreach ($supports as $support)
        <tbody>
            <td>{{ $support->subject }}</td>
            <td>{{ $support->status }}</td>
            <td>{{ $support->body }}</td>
            <td></td>
        </tbody>
    @endforeach
</table>
