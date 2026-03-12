function openMenu(){
  document.getElementById("sideMenu").style.right = "0";
  document.getElementById("overlay").style.display = "block";
}

function closeMenu(){
  document.getElementById("sideMenu").style.right = "-320px";
  document.getElementById("overlay").style.display = "none";
}

function showTab(tab){
  document.querySelectorAll('.side-content').forEach(el => el.classList.remove('active'));
  document.querySelectorAll('.tab').forEach(el => el.classList.remove('active'));

  document.getElementById(tab).classList.add('active');
  event.target.classList.add('active');
}
