function ViewModel() {
    this.descricaoArtigo = ko.observable('');
    this.artigos = ko.observableArray([]);
    this.buscarArtigo = function(){
        let data = {
            _token: csrf_token,
            articleName: this.descricaoArtigo()
        };

        $.post('/get-article',data).done(function(result){
            $(result).find("div.post").each(function(index,element){
                let artigo = {
                    title: element.getElementsByClassName("title")[0].innerText.trim(),
                    link: element.getElementsByClassName("btn-uplexis")[0].getAttribute("href")
                };

                this.artigos.push(artigo);
            });
        });
    };
};

ko.applyBindings(new ViewModel());
