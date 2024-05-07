let tabela = document.getElementById('tabela');

let btnUpdate = document.getElementsByClassName('btn-update')
const modalUpdate = document.getElementsByClassName('modal-update')
const btnFecharModalUpdate = document.getElementById('fechar-modal-update')
const formUpdate = document.getElementById('form-update')
const btnApagarUpdate = document.getElementById('btn-apagar-update')

let btnDelete = document.getElementsByClassName('btn-delete')
const btnFecharModalDelete = document.getElementById('fechar-modal-delete')
const btnCancelarDelete = document.getElementById('btn-cancelar-delete')
const modalDelete = document.getElementsByClassName('modal-delete')

window.addEventListener('DOMContentLoaded', () => {

    for (let i = 0; i < btnUpdate.length; i++) {
        btnUpdate[i].addEventListener('click', () => {
            let inputsUpdate = document.getElementsByClassName('inputs-update')

            const modalUpdate = document.getElementsByClassName('modal-update')
            modalUpdate[0].style.display = 'flex'

            btnApagarUpdate.addEventListener('click', () => {
                formUpdate.reset()
                inputsUpdate[0].value = obterID(i)
            })

            for (let j = 0; j < inputsUpdate.length; j++) {
                inputsUpdate[j].value = obterValor(i, j);
            }
        })

        btnDelete[i].addEventListener('click', () => {
            const modalDelete = document.getElementsByClassName('modal-delete')
            modalDelete[0].style.display = 'flex'
            let inputIdDelete = document.getElementById('for_cod_delete')
            inputIdDelete.value = obterID(i);
        })
    }

    btnFecharModalUpdate.addEventListener('click', () => {
        modalUpdate[0].style.display = 'none'

    })

    btnFecharModalDelete.addEventListener('click', () => {
        modalDelete[0].style.display = 'none'
    })

    btnCancelarDelete.addEventListener('click', () => {
        modalDelete[0].style.display = 'none'
    })
})

function obterID(i) {
    var celula = tabela.rows[i + 1].cells[0];
    var id = celula.innerHTML;
    return id;
}

function obterValor(i, j) {
    var celula = tabela.rows[i + 1].cells[j];
    var valor = celula.innerHTML;
    return valor;
}