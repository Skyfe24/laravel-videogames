document.addEventListener('DOMContentLoaded', (event) => {
  const deleteModal = document.getElementById('deleteModal');
  const deleteForm = document.getElementById('deleteForm');

  deleteModal.addEventListener('show.bs.modal', (event) => {
    const button = event.relatedTarget;
    const videogameId = button.getAttribute('data-id');

    deleteForm.action = `/admin/videogames/${videogameId}`;
  });
});
