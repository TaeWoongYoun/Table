let loginBtn = document.getElementById('loginBtn');
let joinBtn = document.getElementById('joinBtn');
let closeBtn2 = document.getElementById('closeBtn');
let login = document.querySelector('.loginModal');
let closeBtn = document.querySelector('.closeBtn');
let join = document.getElementById('joinModal');


loginBtn.addEventListener('click', function(){
    login.style.display = 'block';
})

joinBtn.addEventListener('click', function(){
    join.style.display = 'block';
})

closeBtn.addEventListener('click', function(){
    login.style.display = 'none';
})

closeBtn2.addEventListener('click', function(){
    join.style.display = 'none';
})

document.querySelector('.join').addEventListener('click', function(event){
    let userid = document.getElementById('joinid');
    let userpw = document.getElementById('joinpw');
    let usercheck = document.getElementById('joinpw-check');

    if (userid.value == ''){
        alert('아이디를 입력해주세요');
        userid.focus();
        event.preventDefault();
        return false;
    }

    if (userid.value.length < 4 || userid.value.length > 12){
        alert('아이디를 4자 이상 12 이하로 입력해주세요.')
        userid.focus();
        event.preventDefault();
        return false;
    }

    if (userpw.value == ''){
        alert('비밀번호를 입력해주세요');
        userid.focus();
        event.preventDefault();
        return false;
    }

    if (userpw.value == usercheck.value){
        alert('비밀번호가 다릅니다. 다시 입력해주세요');
        userid.focus();
        event.preventDefault();
        return false;
    }
})