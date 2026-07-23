const list = document.getElementById('languesList');
const lg=document.querySelector('.lg');
function afficherLangues(e) {
  list.style.display  =  list.style.display === "none" ? "block" : "none"; 
}
document.addEventListener('click' ,(e)=>{
  if(!lg.contains(e.target)){
   list.style.display="none" ;
  }
})



function retourDiff() {	
  const retourDiffCheckbox = document.getElementById('retourDiffCheckbox');
  const lieuRetour = document.getElementById('lieuRetour');
  const lieuDepartInput = document.getElementById('lieu');
  const lieuArriveeInput = document.getElementById('lieu2');	
	if(lieuArriveeInput.value==''){
		lieuArriveeInput.value=lieuDepartInput.value;
	}
  if (retourDiffCheckbox.checked) {
    lieuRetour.style.display = "block"
  } else {
    lieuRetour.style.display = "none"
  }

}
