
const deleteModal = document.getElementById('deleteModal')
if (deleteModal) {
    deleteModal.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget
        const recipient = button.getAttribute('data-bs-whatever')
        //const modalTitle = deleteModal.querySelector('.modal-title')
        const modalBodyInput = deleteModal.querySelector('.modal-body input')

        modalTitle.textContent = `New message to ${recipient}`
        modalBodyInput.value = recipient
    })
}
