const submitBtn = document.querySelector("input");


const deleteAlert = () => {
    confirm("Are you sure you want to delete the book?");
}

submitBtn.addEventListener('click', deleteAlert);