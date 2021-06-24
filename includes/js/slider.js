var slider = document.getElementById("myRange");
var output = document.getElementById("songsNumber");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
    console.log(this.value);
    output.innerHTML = this.value;
}