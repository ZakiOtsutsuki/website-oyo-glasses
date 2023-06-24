// 
filterSelection("kategori-1");
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("produk");
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
  }
}

// Show filtered elements
function AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}
// 

// 
let img = document.getElementById("gambar-default").src;
showImage(img);
function showImage(imagesource) {
  var expandImg = document.getElementById("expandedImg"); // Get the expanded image
  expandImg.src = imagesource; // Get the image text
  expandImg.parentElement.style.display = "block"; // Show the container element (hidden with CSS)
}
// 

// 
let counterElement = document.getElementById('counter');
let count = 1; // Set the initial count
counterElement.textContent = count;
function updateCounter() { // Function to update the counter
  counterElement.textContent = count;
}
function incrementCount() { // Function to increment the count
  if(count < 10){
    count++;
  updateCounter();
  }
}
function decrementCount() { // Function to decrement the count
  if(count > 1){
    count--;
    updateCounter();
  }
}
function submitbeli() {
  // Set the value of a hidden input field in the form
  document.getElementById("jsVariableInput").value = count;
  // Submit the form
  document.getElementById("myForm").submit();
}
// function submitkeranjang() {
//   // Set the value of a hidden input field in the form
//   document.getElementById("jsVariableInput").value = count;
//   // Submit the form
//   document.getElementById("myForm").submit();
// }
//

//
function logindulu() {
  alert("Kamu belum login");
  window.location = '../login.php';
}
//