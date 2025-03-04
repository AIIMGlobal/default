<!-- Danger Alert Modal -->
<div id="close-item" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content modal-filled bg-danger">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-wrong h1 text-white"></i>
                    <h4 class="mt-2 text-white">Oh আপনি কি নিশ্চিত?</h4>
                    <p class="mt-3 text-white">If you click the continue button then chat will be closed and you are not able to reply for this mail.</p>
                        <form action="" method="POST" id="closeForm">
                            @csrf
                            <button class="btn btn-light my-2" type="submit">Continue</button>
                       </form>


                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
