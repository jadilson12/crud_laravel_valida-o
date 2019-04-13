<html>
    <head>
        <title> Cadastro de cliente</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">;
        <style type="text/css">
            body{
                padding: 20px;
            }
        </style>
    </head>
<body>
    <main role="main">
        <div class="arrow">
            <div class="container col-md-8 offset-md-2" >
                <div class="card border">
                    <div class="card-header badge-dark">
                        <div class="card-title">
                            Cadastro de Cliente
                        </div>
                    </div>
                    <div class="card-body">
                       <table class="table table-bordered table-haver" id="tabelacliente">
                           <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Idade</th>
                                <th>email</th>
                                <th>Telefone</th>
                            </tr>
                           </thead>
                           <tbody>
                                @foreach($cliente as $c)
                                    <tr>
                                       <td>{{ $c->id }}</td>
                                       <td>{{ $c->nome}}</td>
                                       <td>{{ $c->idade }}</td>
                                       <td>{{ $c->email }}</td>
                                       <td>{{ $c->telefone }}</td>
                                    </tr>
                                @endforeach
                           </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>