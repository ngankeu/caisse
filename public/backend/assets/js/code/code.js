$(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");


        Swal.fire({
            title: 'Confirmer la suppression?',
            text: "Effacer cette image?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui effacer!'
        }).then((result) => {
            if (result.isConfirmed) {
            window.location.href = link
            Swal.fire(
                'Effacer!',
                'Votre fichier a été supprimé avec succès.',
                'success'
            )
        }
    })


    });

});