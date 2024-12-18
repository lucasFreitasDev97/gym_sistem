@extends('partials.default')
@section('content')
<main>
    <div class="main-title">
        <h1>Members</h1>
    </div>
    <section>
        <table border="1px">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $member)
                    <tr>
                        <td>{{$member->name}}</td>
                        <td>{{$member->cpf}}</td>
                        <td>{{$member->phone}}</td>
                        <td>{{$member->email}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</main>

@endsection
