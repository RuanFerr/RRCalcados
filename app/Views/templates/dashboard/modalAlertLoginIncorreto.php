<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="labelLoginIncorreto" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="labelLoginIncorreto">
                    Login Incorreto
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                email e/ou senha não correspondem.

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#modalLogin').modal('show');
    });
</script>
