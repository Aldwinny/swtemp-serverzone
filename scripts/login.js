const pass_field = document.querySelector('.password');
const show_btn = document.querySelector('.show');

show_btn.addEventListener('click', function(){
    if(pass_field.type == "password"){
        pass_field.type = "text";
        show_btn.style.color = "#0492c2";
        show_btn.textContent = "Hide";
    }
    else{
        pass_field.type = "password";
        show_btn.style.color = "#222";
        show_btn.textContent = "Show";
    }
})