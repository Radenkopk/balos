$('.btnDelete').click(function(e){
    e.preventDefault() // Don't post the form, unless confirmed
    if (confirm('DALI STE SIGURNI DA ŽELITE DA OBRIŠTE?')) {
        // Post the form
        $(e.target).closest('form').submit() // Post the surrounding form
    }
});


$('.btnDestination').click(function(e){
    e.preventDefault() // Don't post the form, unless confirmed
    if (confirm('U KOLIKO IZBRISETE BLOG IZBRISAĆETE SVE DESTINACIJE ' +
        'DALI STE SIGURNI DA ŽELITE DA OBRIŠTE?')) {
        // Post the form
        $(e.target).closest('form').submit() // Post the surrounding form
    }
});

$('.btn-delete-aparman').click(function(e){
    e.preventDefault() // Don't post the form, unless confirmed
    if (confirm('U KOLIKO IZBRIŠETE APARTMAN IZBRISAĆETE I SVE SLIKE KOJE PRIPADAJU TOM APARTMANU ' +

        ' DALI STE SIGURNI DA ŽELITE DA OBRIŠTE ???')) {
        // Post the form
        $(e.target).closest('form').submit() // Post the surrounding form
    }
});

$('.btn-delete-hotel').click(function(e){
    e.preventDefault() // Don't post the form, unless confirmed
    if (confirm('U KOLIKO IZBRIŠETE HOTEL IZBRISAĆETE I SVE SLIKE KOJE PRIPADAJU TOM HOTELU ' +

        ' DALI STE SIGURNI DA ŽELITE DA OBRIŠTE ???')) {
        // Post the form
        $(e.target).closest('form').submit() // Post the surrounding form
    }
});

var x = document.querySelectorAll('.counter').length;
document.querySelector('.nesto').textContent = x;
