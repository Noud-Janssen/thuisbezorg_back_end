/* burger menu */

const btn = document.querySelector(".burger_menu_btn");
const menu = document.querySelector(".burger_menu_container");
let menu_hidden = true;
let menu_peak = false;

function burger_mouse_on() 
{
    menu_peak = true;
    burger_update();
}

function burger_mouse_off() 
{
    menu_peak = false;
    burger_update();
}

function burger_pressed() {
    if (menu_hidden) {
        menu_hidden = false;
    } else {
        menu_hidden = true;
    }
    burger_update();
}

function burger_update() {
    if (menu_hidden) {
        if (menu_peak) {
            menu.style.left = "calc(100% - 10px)"
        } else {
            menu.style.left = "100%"
        }

    } else {
        menu.style.left = "calc(100% - 200px)"
    }
}

btn.addEventListener('mouseover', burger_mouse_on);
btn.addEventListener('mouseout', burger_mouse_off);
btn.addEventListener('click', burger_pressed);