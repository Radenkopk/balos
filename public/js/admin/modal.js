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