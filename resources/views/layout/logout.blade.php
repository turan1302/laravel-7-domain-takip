<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dikkat! Çıkış Yapmaktasınız</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Çıkış Yapmak İstediğinizden Emin Misiniz ?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Vazgeç</button>
{{--                <a class="btn btn-primary" href="login.html">Logout</a>--}}
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Çıkış Yap</button>
                </form>
            </div>
        </div>
    </div>
</div>
