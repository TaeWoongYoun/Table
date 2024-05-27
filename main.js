let loginBtn = document.getElementById('loginBtn')
let login = document.querySelector('.loginModal')
let closeBtn = document.getElementById('closeBtn')

loginBtn.addEventListener('click', function(){
    login.style.display = 'block';
})

closeBtn.addEventListener('click', function(){
    login.style.display = 'none';
})