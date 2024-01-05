const currentLocation = location.href;
//console.log(currentLocation);
const menu = document.querySelectorAll("#sidebar .side-menu.top li a");
const menuItem = document.querySelectorAll("#sidebar .side-menu.top li");
const menuLength = menuItem.length;
//console.log(menuLength);

for(let i=0;i<menuLength;i++){
  //console.log(menuItem[i]);
  if(menu[i].href == currentLocation){
    //console.log(menu[i].href);
    menuItem[i].className = 'active';
  }
}