function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById("mySidenav").style.zIndex = "99999";
    document.getElementById("mySidenav").style.backgroundColor= "#161616";
    document.getElementById("header").style.setProperty('display', 'none','important');
}
function closeNav() {

document.getElementById("mySidenav").style.setProperty('width', '0px','important');
document.getElementById("header").style.setProperty('display', 'flex','important');


}