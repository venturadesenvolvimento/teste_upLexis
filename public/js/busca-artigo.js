function ViewModel() {
    this.nomeArtigo = ko.observable('');
    this.buscarArtigo = function(){
        data = {
            _token: csrf_token,
            articleName: this.nomeArtigo()
        };

        $.post('/get-article',data).done(function(result){
            console.log(result);
        });
    };
};

ko.applyBindings(new ViewModel());
