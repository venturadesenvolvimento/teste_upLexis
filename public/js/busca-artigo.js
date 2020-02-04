function Artigo(data) {
    var self = this;
    self.title = ko.observable(data.title);
    self.link = ko.observable(data.link);
}

function ViewModel() {
    var self = this;

    self.descricaoArtigo = ko.observable('');
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