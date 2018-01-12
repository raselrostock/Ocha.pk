// Get the modal
var modal = document.getElementById('myModal_press');

// Get the button that opens the modal
var productNowjs = document.getElementById("productNowjs");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
//var recipient = productNowjs.data('product');
//console.log(recipient);

//alert(recipient);
// When the user clicks the button, open the modal 

function setProduct(product,matchaPRODUCT) {
    modal.style.display = "block";
    document.getElementById(matchaPRODUCT).value = product;

}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}