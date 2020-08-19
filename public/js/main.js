
function goto(url){
    window.location = 'http://127.0.0.1:8000/' + url;
} 

function dropDownMenu(){
    const menu = document.getElementById('drop_down_menu');

    if (menu.className == 'hide') {
        menu.classList.remove('hide');
    }
    else {
        menu.classList.add('hide');
    }
    
}


function login_form(){
    const menu = document.getElementById('drop_down_menu');
    menu.classList.add('hide');
    const form = document.getElementById('login_form');
    if (form.className == 'hide') {
        form.classList.remove('hide');
    }
    else {
        form.classList.add('hide');
    }
    
}

function logout(id) {
    document.getElementById(id).submit();
}

