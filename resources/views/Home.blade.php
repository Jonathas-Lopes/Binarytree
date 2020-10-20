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

        <div class="container-fluid">
            <div class="row center">
                <div class="col m4 l4 home ">
                    @if(count($guests)>0)
                        <h2 class="header">{{$guests[0]->nome}}</h2>
                            <div class="card horizontal yellow">
                                <h1>100 pontos</h1>
                            </div>
                    @endif
                </div>
                <div class="col m4 l4 home">
                    <h2 class="header">{{ Auth::user()->nome }}</h2>
                    <div class="card horizontal green">

                    </div>
                </div>
                <div class="col m4 l4 home">
                    @if(count($guests)>1)
                        <h2 class="header">{{$guests[1]->nome}}</h2>
                            <div class="card horizontal red">
                                <h1>100 pontos</h1>
                            </div>
                    @endif
                </div>
            </div>
        </div>
    </main>

    <script src="{{asset('/js/jQuery341.js')}}"></script>
    <script src="{{asset('/js/materialize.js')}}"></script>
    <script src="{{asset('/js/index.js')}}"></script>
</body>
</html>
