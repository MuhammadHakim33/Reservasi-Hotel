// Background dan Navbar User Dinamis
// if(document.title != "Beranda") {
//     document.body.classList.remove("bg-dark");
//     document.body.classList.add("bg-light");
//     document.querySelector(".navbar").classList.remove("bg-transparent");
//     document.querySelector(".navbar").classList.add("bg-dark");
// }

function printPage(){
    window.print()
    window.location.replace('http://localhost/reservasi-hotel/');
}

// Active State Navbar in User Page
function navActive() {
    let navLink = document.querySelectorAll('.navbar-nav .nav-item .nav-link');
    for(i = 0; i < navLink.length; i++) {
        if(document.title == navLink[i].textContent) {
            navLink[i].classList.add('active');
        }
    }
}

window.onload = navActive;


// Modal Bootstrap Show
if(document.getElementById('modalFormReservasi')){
    var ModalFormReservasi = new bootstrap.Modal(document.getElementById('modalFormReservasi'))
    ModalFormReservasi.show()
}

