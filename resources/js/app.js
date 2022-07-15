require('./bootstrap');

$(document).ready(function(){
    Livewire.on('create_product',() => $("#modal_create_product").modal('show'));
});

