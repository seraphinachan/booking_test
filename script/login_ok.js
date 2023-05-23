document.addEventListener('DOMContentLoaded', () => {
  const id = document.querySelector('#userid')
  const pass = document.querySelector('#userpass')
  const btn = document.querySelector('#login_btn')
  btn.addEventListener('click', (e) => {
    e.preventDefault()

    document.login.submit()

  })
})
