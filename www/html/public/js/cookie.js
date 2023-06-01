function closeCookies()
{
   let el = document.querySelector('#cookies');
   el.classList.add('d-none');
   localStorage.setItem("cookiesAccepted", true);
}
 
if (localStorage.getItem("cookiesAccepted") === null) 
{
    setTimeout(function(){
       let cookies = document.querySelector('#cookies');
       cookies.classList.remove('d-none');
    }, 2000);
}