document.getElementById("addnew").addEventListener("click", function () {
  document.querySelector(".popup").style.display = "flex";
});

document.getElementById("close").addEventListener("click", function () {
  document.querySelector(".popup").style.display = "none";
});

// function myFunction(){
//   document.getElementById("edit").addEventListener("click", function(){
//     document.querySelector(".popup-edit").style.display = "flex";
//   });

//   document.getElementById("close").addEventListener("click",function(){
//     document.querySelector(".popup-edit").style.display = "none";
//   });
// }

// window.onload = function() {
//   var reloading = sessionStorage.getItem("reloading");
//   if (reloading) {
//       sessionStorage.removeItem("reloading");
//       myFunction();
//   }
// }

// function reloadP() {
//   sessionStorage.setItem("reloading", "true");
//   document.location.reload();
// }


const currentEditLocation = location.href;

const editMenu = document.querySelector("#edit");

if (editMenu.href == currentEditLocation) {
  document.getElementById("edit").addEventListener("click", function () {
    document.querySelector(".popup-edit").style.display = "flex";
  });

  document.getElementById("close").addEventListener("click", function () {
    document.querySelector(".popup-edit").style.display = "none";
  });
}


