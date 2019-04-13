<html>
<head>
    <title> Cadastro de cliente</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    @csrf
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
                    <form action="/cliente" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome do Cliente</label>
                            <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome do Cliente">
                        </div>
                        <div class="form-group">
                            <label for="idade">Idade do Cliente</label>
                            <input type="text" id="idade" name="idade" class="form-control" placeholder="Idade do Cliente">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail do Cliente</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="E-mail do Cliente">
                        </div>
                        <div class="form-group">
                            <label for="fone">Telefone do Cliente</label>
                            <input type="text" id="fone" name="fone" class="form-control" placeholder="fone do Cliente">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm" role="button">Enviar</button>
                    <button type="cancel" class="btn btn-danger btn-sm" role="button">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

</main>
</body>
</html>