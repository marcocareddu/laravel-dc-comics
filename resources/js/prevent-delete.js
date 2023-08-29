const deleteForms = document.querySelectorAll('.form-delete');

deleteForms.forEach(form => {
    form.addEventListener('submit', e => {
        e.preventDefault();
        const confirmation = confirm('Are you sure you want to delete this comic?');
        if (confirmation) form.submit();
    });
});