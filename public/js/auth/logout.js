document.getElementById("logout")
    .addEventListener("click", logout);
async function logout() {
    let token = localStorage.getItem("token");
    let rez = await fetch("http://wildlife/api/logout", {
        headers: {
            'Authorization': 'Bearer ' + token,
            "Content-Type": "application/json",
        },
    });
    console.log(await rez.json())
    localStorage.removeItem('token')
    window.location.href = '/';
}