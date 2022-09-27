<div id="success-msg">
    <div class="msg-body">
        <p class="title">Message Sent Successfully!</p>
        <p class="subtitle">Thanks for sending your inquiry, our team will contact you soon.</p>
    </div>
    <div class="msg-bottom">
        <button id="done"><p>Done</p></button>
    </div>
</div>

<script>
    function showSuccessMsg() {
        document.getElementById('success-msg').classList.add('success-msg-show')
    }

    // document.querySelectorAll('form').forEach(form => {
    //     form.addEventListener('submit', e => {
    //         e.preventDefault()
    //     })
    // })

    document.getElementById('done').addEventListener('click', e => {
        document.querySelector('.inquiry-show').classList.add('inquiry-hide')
        setTimeout(() => {
            document.querySelector('.inquiry-show').classList.remove('inquiry-show')
            document.querySelector('.inquiry-hide').classList.remove('inquiry-hide')
        }, 500);
        
        document.querySelector('#success-msg').classList.add('success-msg-hide')
    })
</script>