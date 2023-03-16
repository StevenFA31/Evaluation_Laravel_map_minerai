@extends('layout')

@section('content_map')

<table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Type</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($minerais as $minerai)
                    <tr class="">
                        <td scope="row">{{ $minerai->id }}</td>
                        <td>{{ $minerai->type }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

<a name="" id="" class="btn btn-warning" href="/minerai/create" role="button">Ajouter un minerai</a>
<a name="" id="" class="btn btn-primary" href="/" role="button">Retour</a>


@endsection

@section('content_overlay')

<h1>Je suis un titre</h1>

<p>Salut mon sang, je suis une description.
    <br>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse aspernatur repellendus, corrupti non, neque quibusdam magnam quam adipisci, necessitatibus dolore quis architecto! Aut iusto at voluptatem qui odio ipsam aspernatur! Molestiae non doloribus sint quia blanditiis, laudantium distinctio labore quod? Doloremque inventore quasi, cupiditate et repellendus, odit corporis fugit, quis officiis at facilis ipsam dicta eum. Quaerat, recusandae? Eaque saepe illum incidunt unde. Eveniet eos natus quam quisquam praesentium tenetur voluptates ducimus sapiente blanditiis laborum est totam temporibus, quae voluptatibus vel velit debitis obcaecati veniam suscipit facere officiis numquam. Eveniet non laborum enim laboriosam soluta aspernatur modi debitis sunt ipsum?
</p>


@endsection