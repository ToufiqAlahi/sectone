



function showAttendanceSheet() {
    document.querySelector('.attendacnceSheetWrapper').classList.remove('hide');
}

function next(id) {
    hideAll();

    document.getElementById(id).classList.remove('hide');
}

function hideAll() {
    const div = document.querySelector('.attendacnceSheetWrapper');
    for (let i = 0; i < div.children.length; i++) {
        div.children[i].classList.add('hide');
    }
}



function todaysAttendance() {
    today = {
        date: '12/05/20',
        subject_code: 'CSE602'
    }

    fetch('http://127.0.0.1:8000/api/attendance/today', {
        method: "POST",
        body: JSON.stringify(today),
        headers: {
            "Content-Type" : "application/json;charset = UTF-8"
        }
    }).then(res => res.json()).then(json => {
        document.getElementById('todaysDate').innerHTML = json.date;
        document.getElementById('subjectCode').innerHTML = json.subject_code;
        document.getElementById('totalStudent').innerHTML = json.total_student;
        document.getElementById('totalAbsent').innerHTML = json.absent;
        document.getElementById('percentage').innerHTML = json.present;
    });
}
