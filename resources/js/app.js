import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



$(function(){

var zmain = $('#zemamain');  // Main Zema Icon
var accountt = $('#accountt');
var hiddenc = $('#hiddenclass');

zmain.on("click",function(e){
    window.location = "/";
}); 
accountt.on("click",function(e){
    hiddenc.toggleClass("hidden");
    
});
});

