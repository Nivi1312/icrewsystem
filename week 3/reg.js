const pass = document.querySelector('#pass')
        const confirm_pass = document.querySelector('#confirm-pass')
        const msg = document.querySelector('p')
        const btn = document.querySelector('button')
        btn.addEventListener('click', (e) => {
            if (pass.value != confirm_pass.value) {
                e.preventDefault();
                msg.style.display = "block"
            }else{
                alert('user registered sucessfully')
            }

        })