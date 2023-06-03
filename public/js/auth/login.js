if(localStorage.getItem("token") != null){
    window.location.href = 'admin/place';
}


document.getElementById("login")
    .addEventListener("click", async function (e) {
    e.preventDefault();
    
    let name = await document.getElementById("name").value.trim(),
        password = await document.getElementById("password").value.trim();
    if(await name == ""){
        alert("Введите login!")
        return;
    }
    if(await password == ""){
        alert("Введите пароль!")
        return;
    }
    let user = {
        name: name,
        password: password,
    };
    console.log(user);

    let response = await fetch("/api/login", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(user),
    });

    let result = await response.json();
    if(response.ok){
        localStorage.setItem("token", await result.data.user_token);
        window.location.href = 'admin/place';
    } else {
        alert("Такой пользователь не обнаружен!")
    }
});

