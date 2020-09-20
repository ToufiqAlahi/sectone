

function goto(url){
    window.location = 'http://127.0.0.1:8000/' + url;
}


function logout(id) {
    document.getElementById(id).submit();
}

function form_submit(form){
    document.getElementById(form).submit();
}
