<script>

    /** SİLME İŞLEMİ */
    $(".isDelete").click(function () {

        var data_url = $(this).data("url");
        var token = "{{csrf_token()}}";

        Swal.fire({
            title: 'Dikkat!',
            text: "Kayıt Silinecektir. Onaylıyor Musunuz ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet, Sil',
            cancelButtonText: 'Vazgeç'
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    url: data_url,
                    method: "DELETE",
                    data: {
                        _token: token
                    },
                    success: function () {
                        window.location.reload();
                    }
                });

            }
        })
    });


</script>
