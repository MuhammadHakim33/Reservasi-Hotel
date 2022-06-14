
window.onload = navActive;
// Active State Navbar in User Page
function navActive() {
    let navLink = document.querySelectorAll('.navbar-nav .nav-item .nav-link');
    for(i = 0; i < navLink.length; i++) {
        if(document.title == navLink[i].textContent) {
            navLink[i].classList.add('active');
        }
    }
}



// Modal Bootstrap Show
if(document.getElementById('modalFormReservasi')){
    var ModalFormReservasi = new bootstrap.Modal(document.getElementById('modalFormReservasi'))
    ModalFormReservasi.show()
}
