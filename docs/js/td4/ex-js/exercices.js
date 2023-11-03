document.getElementById('changeColorButton').addEventListener('click', function() {
    var colorPicker = document.getElementById('colorPicker');
    var selectedColor = colorPicker.value;
  
    document.body.style.backgroundColor = selectedColor;
});