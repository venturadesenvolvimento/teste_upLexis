<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Article Finder</title>

        <!-- Styles -->
        <style>
            
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type='text/javascript' src='/js/knockout-3.5.1.js'></script>
    </head>
    <body>
        <div class="">
            <div class="content">
                <input type="text" data-bind="value: descricaoArtigo" placeholder="Busque artigos por aqui"/>
                <input type="button" data-bind="click: buscarArtigo" value="Buscar"/>
            </div>
        </div>
    </body>
    <script src="/js/busca-artigo.js"></script>
    <script>
        var csrf_token = "{{ csrf_token() }}";
    </script>
</html>
