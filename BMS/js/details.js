const removeReadOnlyAttr = (event) => {
    let readOnlyElements = document.querySelectorAll("input[readonly]:not([id='floating_eID'])");
    readOnlyElements.forEach(element => {
        element.removeAttribute("readonly");
        element.classList.remove("fw-bold");
    });

    let editBtn = event.target;
    editBtn.classList.add("d-none");

    let deleteBtn = document.getElementById("deleteAccount");
    deleteBtn.classList.add("d-none");
    
    let applyBtn = document.getElementById("applyChanges");
    applyBtn.classList.remove("d-none");
    
    let fileInput = document.getElementById("editImage");
    fileInput.classList.remove("d-none");
}

const showAlert = () => {
    let alert = document.getElementById("deleteConfirmation");
    alert.classList.remove("d-none");
}

const onLoad = () => {
    let editBtn = document.getElementById("editDetails");
    editBtn.addEventListener('click', removeReadOnlyAttr);
    
    let deleteBtn = document.getElementById("deleteAccount");
    deleteBtn.addEventListener('click', showAlert);
};

window.addEventListener('load', onLoad);