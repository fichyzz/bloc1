document.getElementById('changeColorButton').addEventListener('click', function() {
    let colorPicker = document.getElementById('colorPicker');
    let selectedColor = colorPicker.value;
  
    document.body.style.backgroundColor = selectedColor;
});