let usernameValidity = (username) => {

    for (var a = 0; a < username.length; a++) {
        if (!/^[A-Za-z_]+$/.test(username[a])) {
            return "Invalid Username";
        }
    }

    if (username.length < 6 || username.length > 12) {
        return 'Invalid Username'
    } else if (/^[A-Z]+$/.test(username[0])) {
        return "Invalid Username";
    }
    else {
        return "Valid Username"
    }
}

let passwordValidity = (password) => {

    let symbol = new RegExp("^(?=.*[0-9])(?=.[!@#\$%\^&])(?=.*[A-Z])(?=.{5,})");
    if (password.length != 7 ) {
        return 'Invalid Password'
    } else if (!symbol.test(password.value)) {
        return "Invalid Password"
    } else {
        return "Valid Password"
    }

}
console.log(passwordValidity("asdasd"))
console.log(usernameValidity("asdasd"))