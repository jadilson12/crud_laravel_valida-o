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
                    <form action="/cliente" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome do Cliente</label>
                            <input type="text" id="nome" name="nome" class="form-control {{ $errors->has('nome')  ? 'is-invalid': ''}}" placeholder="Nome do Cliente">
                            @if($errors->has('nome'))
                                <div class="invalid-feedback">
                             {{ $errors->first('nome') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="idade">Idade do Cliente</label>
                            <input type="text" id="idade" name="idade" class="form-control {{ $errors->has('idade')  ? 'is-invalid': ''}}" placeholder="Idade do Cliente">
                            @if($errors->has('idade'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('idade') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail do Cliente</label>
                            <input type="text" id="email" name="email" class="form-control {{ $errors->has('email')  ? 'is-invalid': ''}}" placeholder="E-mail do Cliente">
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="fone">Telefone do Cliente</label>
                            <input type="text" id="fone" name="fone" class="form-control {{ $errors->has('fone')  ? 'is-invalid': ''}}" placeholder="fone do Cliente">
                            @if($errors->has('fone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('fone') }}
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm" role="button">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>