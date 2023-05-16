let btn = document.querySelector("#btn");
let uri = "http://localhost/SpUkM01-086/PHP"
btn.addEventListener("click", async(e)=>{
    let res = await (await fetch(`${uri}/api.php`)).json();
    console.log(res);
})