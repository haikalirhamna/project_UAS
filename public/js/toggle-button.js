var btnShow = document.querySelector('#burger-button');
    var sidebar = document.querySelector('.side-bar');
    btnShow.addEventListener('click', function () {
        sidebar
            .classList
            .toggle("show");
    })