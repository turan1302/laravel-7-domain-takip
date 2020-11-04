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

    /** HIZLI MÜŞTERİ EKLEME */
    $(".FastAddCustomer").change(function (){
        var data = $(this).val();
        if (data=="musteri_ekle"){
            var data_url = "{{route('panel.customers.create')}}";

            Swal.fire({
                title: 'Dikkat!',
                text: "Kullanıcı Ekleme Sayfasına Yönlendiriliyorsunuz. Gitmek İstiyor Musunuz?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '# ',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Evet! Yönlendir',
                cancelButtonText: 'Vazgeç'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href=data_url;
                }
            })

        }
    });
</script>
