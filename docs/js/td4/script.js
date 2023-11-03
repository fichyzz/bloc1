const keyPressFunction = function(e) {
    document.querySelector('#saisie').innerHTML=event.target.value;
};

document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('#nom').addEventListener('keyup', keyPressFunction);
});