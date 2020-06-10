function click_navbar(color, name) {
    console.log(color);

    var c_add = '';
    var c_remove = '';

    if (color === 0){
        c_add = 'white';
        c_remove = 'text-dark';
    }
    else{
         c_add = 'text-dark';
         c_remove = 'white';
    }
    var elem = document.getElementById("nav_vid");

    elem.classList.remove(c_add);
    elem.classList.add(c_remove);

    elem = document.getElementById("nav_prod");

    elem.classList.remove(c_add);
    elem.classList.add(c_remove);

    elem = document.getElementById("nav_par");

    elem.classList.remove(c_add);
    elem.classList.add(c_remove);

    elem = document.getElementById("nav_foot");

    elem.classList.remove(c_add);
    elem.classList.add(c_remove);

    elem = document.getElementById("vl");

    if (color === 0){
        elem.classList.remove("vl_white");
        elem.classList.add("vl_dark");
    }
    else{
        elem.classList.remove("vl_dark");
        elem.classList.add("vl_white");
    }


}