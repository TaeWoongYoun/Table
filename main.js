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