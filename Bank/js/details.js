const removeReadOnlyAttr = (event) => {
    let readOnlyElements = document.querySelectorAll("input[readonly]");
    readOnlyElements.forEach(element => {
        element.removeAttribute("readonly");
        element.classList.remove("fw-bold");
    });

    let editBtn = event.target;
    editBtn.classList.add("d-none");
    
    let applyBtn = document.getElementById("applyChanges");
    applyBtn.classList.remove("d-none");
}

const onLoad = () => {
    let editBtn = document.getElementById("editDetails");
    editBtn.addEventListener('click', removeReadOnlyAttr);
};

window.addEventListener('load', onLoad);