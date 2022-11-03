const toggle = document.querySelector(".toggle");
const menu = document.querySelector(".menu");
const items = document.querySelectorAll(".item");

/* toggle mobile menu */
function toggleMenu(){
    if(menu.classList.contains("active")){
     menu.classList.remove("active");

     //adds the menu hamburg icon
     toggle.querySelector("a").innerHTML = "<i class='fas fa-bars'></i>";
    }else{
        menu.classList.add("active");

    //adds the close x icon
        toggle.querySelector("a").innerHTML = "<i class='fas fa-times'></i>";
    }
}


//event listner

toggle.addEventListener("click",toggleMenu, false);

function toggleItem(){
    if(this.classList.contains("submenu-active")){
        this.classList.remove("submenu-active");
    }else if(menu.querySelector(".submenu-active")){
        menu.querySelector(".submenu-active").classList.remove("submenu-active");
        this.classList.add("submenu-active");
    }else {
        this.classList.add("submenu-active");
    }
}


//event listners

for (let item of items){
    if(item.querySelector(".submenu")){
        item.addEventListener("click", toggleItem, false);
        item.addEventListener("keypress", toggleItem, false);

    }
}


//close submenu from anywhere

function closeSubmenu(e){
    if (menu.querySelector(".submenu-active")){
        let isClickInside = menu
        .querySelector(".submenu-active")
        .contains(e.target);

        if(!isClickInside && menu.querySelector(".submenu-active")){
            menu.querySelector(".submenu-active").classList.remove("submenu-active");

        }
    }
}

//event listner

document.addEventListener("click", closeSubmenu, false);



