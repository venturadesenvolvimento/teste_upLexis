<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Article Finder</title>

        <link rel="stylesheet" href="/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type='text/javascript' src='/js/knockout-3.5.1.js'></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
            <a class="navbar-brand" href="/home">UpLexis</a>
            <a class="navbar-brand" href="/">Sair</a>
        </nav>
        <div class="container mt-5">
            <div class="input-group mb-3">
                <input type="text" data-bind="value: descricaoArtigo" class="form-control" placeholder="Pesquise artigos por aqui" aria-label="Pesquise artigos por aqui" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-secondary" data-bind="click: buscarArtigo" type="button" id="button-addon2">Buscar</button>
                </div>
            </div>
            <table class="table table-bordered mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" width="50%">Título</th>
                        <th scope="col">Link</th>
                    </tr>
                </thead>
                <tbody data-bind="foreach: artigos">
                    <tr>
                        <td data-bind="text: title"></td>
                        <td>
                            <a target="_blank" data-bind="attr: {href: link}">
                                <span data-bind="text: link"></span>
                            </a>
                        </td>
                    </tr>
                </tbody>
                <tbody data-bind="if: artigos().length === 0">
                    <tr>
                        <td colspan="2" class="text-center">Sem Artigos</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
    <script>
        var csrf_token = "{{ csrf_token() }}";
    </script>
    <!-- <script src="/js/busca-artigo.js"></script> -->
    <script >

        function Artigo(data) {
            var self = this;
            self.title = ko.observable(data.title);
            self.link = ko.observable(data.link);
        }

        function ViewModel() {
            var self = this;

            self.descricaoArtigo = ko.observable('machine learning');
            self.artigos = ko.observableArray([]);
            
            self.buscarArtigo = function(){
                
                let data = {
                    _token: csrf_token,
                    articleName: self.descricaoArtigo()
                };

                $.post('/get-article',data).done(function(result){
                    $(result).find("div.post").each(function(index,element){
                        let artigo = new Artigo({
                            title: element.getElementsByClassName("title")[0].innerText.trim(),
                            link: element.getElementsByClassName("btn-uplexis")[0].getAttribute("href")
                        });
                        
                        self.artigos.push(artigo);
                    });
                });
            };


        };
        ko.applyBindings(new ViewModel());
    </script>
</html>
