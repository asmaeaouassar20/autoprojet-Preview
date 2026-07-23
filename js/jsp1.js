function afficherLangues(e) {
  const list = document.getElementById('languesList');
  //e.stopPropagation(); // empêche le document de capter le clic
  if (list.style.display === "block") {
    list.style.display = "none";
  } else {
    list.style.display = "block";
    const imgLangues = document.querySelectorAll('#languesList li');
    imgLangues.forEach(li => {
      li.addEventListener('click', () => {
        const img = li.querySelector('img');
        let langue = img.alt;
        currentImg.src = img.src;
        list.style.setProperty('display', 'none', 'important');
        localStorage.setItem('langue', langue);
        window.location.href = window.location.pathname + "?langue=" + langue;
      })
    })
  }
}