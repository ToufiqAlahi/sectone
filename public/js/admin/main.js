
function showBoard(heading, class_name){
    hideAll();
    document.getElementById('dash-title').innerHTML = heading;
    document.querySelector(class_name).classList.remove('hide');
}

function hideAll(){
    let divs = document.getElementById('body').children;
    for(let i=0; i<divs.length; i++){
        divs[i].classList.add('hide');
    }
}

function displaySingle(e){
    const sub = document.querySelector('.submenus');
    for(let i = 0; i<divs.length; i++){
       sub.appendChild(divs[i]);
    }
}

function goto(url){
    window.location = 'http://127.0.0.1:8000/' + url;
}

function editMember(id){
    window.location = "edit_member/"+id;
}


function logout(id) {
    document.getElementById(id).submit();
}

function form_submit(form){
    document.getElementById(form).submit();
}