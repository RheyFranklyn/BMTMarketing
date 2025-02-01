{{-- resources\views\modal\bulletin_modal.blade.php --}}

{{-- Modal Add --}}
<div class="modal fade" id="bulletinModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <small class="text-muted">Add Item</small>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    style="font-size:0.6rem;"></button>
            </div>
            <div class="modal-body">
                <form id="bulletinForm">
                    @csrf
                    <div class="d-flex justify-content-end ">
                        <div class="form-floating">
                            <select class="form-select form-select-sm" id="selectBulletinorTemplate"
                                name="selectBulletinorTemplate" style="font-size: 0.85rem; width: 16rem;">
                                <option value="">Select Option</option>
                                <option value="Bulletin">Bulletin</option>
                                <option value="Template">Template</option>
                            </select>
                            <label for="selectBulletinorTemplate" style="font-size: 0.85rem;">Select Bulletin or
                                Template</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="itemName" class="form-label" style="font-size:0.7rem;">Item
                            Name</label>
                        <input type="text" class="form-control" id="itemName" name="itemName"
                            placeholder="Enter item name" style="height:30px;">
                    </div>
                    <div class="mb-3">
                        <label for="itemDescription" class="form-label" style="font-size:0.7rem;">Description</label>
                        <textarea class="form-control" id="itemDescription" name="itemDescription" rows="3"
                            placeholder="Enter description"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>