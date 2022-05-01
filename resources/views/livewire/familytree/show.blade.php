<div>
    <div wire:ignore.self="" class="modal fade p-0" id="showDetailMemberModal" tabindex="-1" aria-labelledby="showDetailMemberModalLabel" aria-modal="true" role="dialog" >
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Member Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
