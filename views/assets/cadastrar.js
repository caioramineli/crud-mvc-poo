const btnFecharModalInserir = document.getElementById('fechar-modal-inserir')
btnFecharModalInserir.addEventListener('click', () => {
    const modalInserir = document.getElementsByClassName('modal-inserir')
    modalInserir[0].style.display = 'none'
})

const btnCancelarInserir = document.getElementById('btn-cancelar-inserir')

btnCancelarInserir.addEventListener('click', () => {
    const modalInserir = document.getElementsByClassName('modal-inserir')
    modalInserir[0].style.display = 'none'
})