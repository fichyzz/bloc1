const $ = (selector) => document.querySelector(selector);


const addEvt = (selector, type, callback) => {
    $(selector).addEventListener(type, callback);
};


const keyPressFunction = function(event) {
    $('#saisie').innerHTML=event.target.value;
};


document.addEventListener('DOMContentLoaded', function() {
    addEvt('#nom', 'keyup', keyPressFunction);

    addEvt('#bt-creer', 'click', () => {
        const li = document.createElement();

        li.innerText = elm.value;
        li.style.color = color.value;
        $('#ul-elements').appendChild(li);
    });
});