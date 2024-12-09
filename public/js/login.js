document.addEventListener('DOMContentLoaded', function() {
document.getElementById('formlogin').addEventListener('submit', function(event){
    event.preventDefault();

    const correctUsername = 'stematel';
    const correctPassword = '1993';

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if(username === correctUsername && password === correctPassword){
        alert('login berhasil')

        sessionStorage.setItem('isLoggedIn', true);
        
        window.location.href = redirectUrl;
        }else{
            alert ('Login Gagal');
        }
    });
});