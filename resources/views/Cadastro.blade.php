<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="/css/materialize.css"/>
    <link type="text/css" rel="stylesheet" href="/css/index.css"/>

    <title>Document</title>
</head>
<body>
    <main>
        <div class="conteiner">
            <div class="row">
                <form class="center col s12 m4 l4 offset-l4 offset-m4" action="/cadastro" method="POST">
                    <div class="row">
                    <label class="col s12 m12 l12" for="nome">nome</label>
                    <input class="col s12 m12 l12" type="text" id="nome" name="nome">

                    <label class="col s12 m12 l12" for="email">email</label>
                    <input class="col s12 m12 l12" type="email" id="email" name="email">

                    <label class="col s12 m12 l12" for="senha">senha</label>
                    <input class="col s12 m12 l12" type="text" id="senha" name="senha">

                    <label class="col s12 m12 l12" for="indicado_por">indicado por</label>
                    <div class="input-field col s12 m12 l12">
                        <select id="indicado_por" name="indicado_por">
                            @foreach ($perfil as $user)
                            <option value={{$user->id}}>{{$user->nome}}</option>
                            @endforeach


                        </select>
                    </div>
                    <input class="btn" type="submit">
                </div>
                </form>
            </div>
        </div>
    </main>
    <script src="{{asset('/js/jQuery341.js')}}"></script>
    <script src="{{asset('/js/materialize.js')}}"></script>
    <script src="{{asset('/js/index.js')}}"></script>
</body>
</html>
