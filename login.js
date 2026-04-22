document.getElementById("loginForm").addEventListener("submit", function(e){
e.preventDefault();

fetch("php/login.php", {
method:"POST",
body:new FormData(this)
})
.then(res=>res.text())
.then(data=>{
if(data=="success") window.location="dashboard.php";
else alert("Invalid");
});
});