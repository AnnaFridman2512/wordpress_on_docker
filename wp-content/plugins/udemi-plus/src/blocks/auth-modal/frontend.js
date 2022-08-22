document.addEventListener('DOMContentLoaded', ()=>{
    const openModalBtn = document.querySelectorAll('.open-modal')
    const modalEl = document.querySelector(
        '.wp-block-udemy-plus-auth-modal'
        )

        const modalCloseEl = document.querySelectorAll(
            '.modal-overlay, .modal-btn-close'
        )

    openModalBtn.forEach(el =>{
        el.addEventListener('click', event => {
            event.preventDefault()

            modalEl.classList.add('modal-show')
        })
    })

    modalCloseEl.forEach(el => {
        el.addEventListener('click', event => {
            event.preventDefault()

            modalEl.classList.remove('modal-show')
        })
    })

    const tabs = document.querySelectorAll('.tabs a')
    const signinForm = document.querySelector('#signin-tab')
    const signupForm = document.querySelector('#signup-tab')


    tabs.forEach(tab => {
        tab.addEventListener('click', event => {
            event.preventDefault()

        tab.forEach(currentTab => {
            currentTab.classList.remove('active-tab')
        })    

        event.currentTarget.classList.add('active')

        const activeTab   = event.currentTarget.getAttribute('href')
        

        if(activeTab === '#signin-tab'){

            signinForm.getElementsByClassName.display = 'block'
            signupForm.getElementsByClassName.display = 'none'
            signupForm.addEventListener('submit', event => {
                event.preventDefault()

                const sinupFieldset = signinForm.querySelector('fieldset')
                sinupFieldset.setAttribute('diszabled', true)

                const signupStatus = signinForm.querySelector('#signup-status')
                signupStatus.innerHTML = `
                    <div class = "modal-status modal-status-info>
                    please wait, we are creating your acount
                    </div>

                `

            })

        }

        })
    })
})