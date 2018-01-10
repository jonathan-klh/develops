$('body').on('click', '#advert_cancel', function (e) {
    e.preventDefault();
    var url = $(this).data('href');
    var id = $(this).data('id');
    var title = $(this).data('title');
    swal({
        title: title,
        text: 'Vous êtes sur le point de supprimer l\'annonce ' + title + '. Confirmer ?',
        type: "warning",
        showCancelButton: true,

        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Oui, supprimer',
        cancelButtonText: 'Annuler'
    }).then(function (dismiss) {
        if (dismiss.value) {
            $.ajax({
                url: url,
                type: 'DELETE',
                success: function (s) {
                    console.log(s);
                    if (s.response == 'yes') {
                        $("#advert-" + s.id).remove()
                    }
                }
            });
        } else {
            swal(
                'Opération annulée',
                ':X',
                'error'
            )
        }

    })
});