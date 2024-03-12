// alert('tab');
const table = document.querySelector("table");
table.addEventListener("mouseover", (e) => {
    if (e.target.classList.contains("category")) {
        console.dir(e.target);
        e.target.children[0].classList.toggle('d-none');
        e.target.children[1].classList.toggle('d-none');
    }


});

table.addEventListener("mouseout", (e) => {
    if (e.target.classList.contains == "category") {
        e.target.children[0].classList.toggle('d-none');
        e.target.children[1].classList.toggle('d-none');;
    }
});
