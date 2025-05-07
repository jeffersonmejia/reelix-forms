const d = document,
    $profileSrc = d.getElementById('profile-pic-img')

function loadProfilePic(input) {
    const file = input.files[0]
    if (file) {
        const reader = new FileReader()
        reader.onload = (e) => { $profileSrc.src = e.target.result }
        reader.readAsDataURL(file);
        $profileSrc.classList.add('img-loaded')
    }
}


function resetProfilePic() {
    $profileSrc.classList.remove('img-loaded')

}

d.addEventListener('change', e => {
    if (e.target.matches('#profile-pic-input')) {
        loadProfilePic(e.target)
    }
})

d.addEventListener('click', e => {
    if (e.target.matches('#reset-signup')) {
        resetProfilePic()
    }
})