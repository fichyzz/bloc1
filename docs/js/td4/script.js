const $ = (selector)=>document.querySelector(selector);

const keyPressFunction = function(e) {
    $('#saisie').innerHTML=event.target.value;
};

document.addEventListener('DOMContentLoaded', function() {
    $('#nom').addEventListener('keyup', keyPressFunction);
});