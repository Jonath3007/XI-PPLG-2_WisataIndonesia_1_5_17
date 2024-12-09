document.getElementById('loginbtn').addEventListener('click', function() {
    window.location.href = "formlogin.html";
})

const loginBtn = document.getElementById('loginbtn');
loginBtn.addEventListener('mouseover', function() {
    loginBtn.classList.add('grow');
});

loginBtn.addEventListener('mouseout', function() {
    loginBtn.classList.remove('grow');
});

const isLoggedIn = sessionStorage.getItem('isLoggedIn');

if(isLoggedIn) {
    document.getElementById('loginbtn').style.display = 'none';
    const profilePic = document.getElementById('profile-pic');
    const profileCov = document.getElementById('coverpro');
    profilePic.src = '/TUGAS/aset/TS.png';
    profilePic.style.display = 'block';
    profileCov.style.display = 'block';
} else {
    document.getElementById('loginbtn').style.display = 'block';
    document.getElementById('profile-pic').style.display = 'none';
    document.getElementById('coverpro').style.display = 'none';
}

function showIntro() {
    const intro = document.getElementById('intro');
    intro.style.opacity = 1;
}

setTimeout(showIntro, 2000)