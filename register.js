document.getElementById("form").addEventListener("submit", function(e){
e.preventDefault();

fetch("php/register.php", {
method:"POST",
body:new FormData(this)
})
.then(res=>res.text())
.then(data=>alert(data));
});