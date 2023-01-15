const emailForm = document.querySelector('.contact-form');

emailForm.onsubmit = e =>{
    //Prevent Page Refresh
    e.preventDefault();
    let nameInput = emailForm.querySelector('input[name="name"]');
    let emailInput = emailForm.querySelector('input[name="email"]');
    let telInput = emailForm.querySelector('input[name="tel"]');
    let messageInput = emailForm.querySelector('textarea[name="message"]');

    //Make POST request
    fetch('system/mail.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        mode: 'same-origin',
        credentials: 'same-origin',
        body: JSON.stringify({
            name: nameInput.value,
            email: emailInput.value,
            tel: telInput.value,
            message: messageInput.value
        })
    }).then(json => json.json()).then(res => {
        console.log(res);
        if(res['name_err']){
            nameInput.insertAdjacentHTML('beforebegin', `<p>${res['name_err']}</p>`);
        }
        if(res['email_err']){
            emailInput.insertAdjacentHTML('beforebegin', `<p>${res['email_err']}</p>`);
        }
        if(res['tel_err']){
            telInput.insertAdjacentHTML('beforebegin', `<p>${res['tel_err']}</p>`);
        }
        if(res['message_err']){
            messageInput.insertAdjacentHTML('beforebegin', `<p>${res['message_err']}</p>`);
        }
        if(res['top_err']){
            toInput.insertAdjacentHTML('afterbegin', `<p>${res['top_err']}</p>`);
        }
        if(res['top_err'] || res['name_err'] || res['email_err'] || res['tel_err'] || res['message_err']) return;
        if(res['top_success']){
            emailForm.insertAdjacentHTML('afterbegin', `<p>${res['top_success']}</p>`);
            emailForm.reset();
        }
        
    });
}