function showCookie(){
    let name = document.cookie.split("=")[1].split(";")[0];
    alert(`Welcome again ${name}`);
}

function welcomeNewUser(){
    if (document.cookie == ""){
        makeCookie();
    }
    let name = document.cookie.split("=")[1].split(";")[0];
    alert(`Welcome ${name}`);
}

function makeCookie(){
    let name = "";
    do{
        name = prompt("Please enter your name ");
    } while (name.trim() == "");

    setCookie(name);
}

function setCookie(username){
    let date = new Date();
    date.setTime(date.getTime() + (60*60*4));
    const expires = "expires=" + date.toUTCString();
    console.log("username" + "=" + username + ";" +  expires +  "; path=/");
    document.cookie = "username=" + username + ";" +  expires +  "; path=/";
}

if (document.cookie == ""){
    makeCookie();
    welcomeNewUser();
}
else{
    showCookie();
}