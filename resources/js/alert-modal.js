document.addEventListener('DOMContentLoaded', (event) => {
  const deleteModal = document.getElementById('deleteModal');
  const deleteForm = document.getElementById('deleteForm');
  deleteModal.addEventListener('show.bs.modal', (event) => {
    const button = event.relatedTarget;
    const route = button.getAttribute('data-route');
    const videogameId = button.getAttribute('data-id');
  console.log(videogameId, route)
    deleteForm.action = `/admin/${route}/${videogameId}`;
  });
});
