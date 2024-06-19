let popup = document.getElementById("popup");

function openPopup() {
    popup.classList.add("open-popup");
}

function closePopup() {
    popup.classList.remove("open-popup");
    document.getElementById("myForm").submit(); 
}

function submitForm(event) {
    event.preventDefault(); // Prevent default form submission behavior
    openPopup(); // Show popup
}
