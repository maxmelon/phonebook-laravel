@if($contact->phoneNumbers->isEmpty())
    <div class="row mt-3">
        <div class="col text-right">
            <a href="#" class="card-link" data-toggle="modal" data-target="#deleteModal" style="color: #ce8483">Delete</a>
        </div>
    </div>
@else
    <div class="row mt-3">
        <div class="col text-right">
            <a href="/contact/{{ $contact->id }}/new-number" class="card-link">Add Number</a>
            <a href="/contact/{{ $contact->id }}/edit" class="card-link ">Edit</a>
            <a href="#" class="card-link" data-toggle="modal" data-target="#deleteModal" style="color: #ce8483">Delete</a>
        </div>
    </div>
@endif

<!-- Modal DELETE CONTACT-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Delete {{ $contact->name }}</h5>
                <button type="button" class="close" data-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete contact - {{ $contact->name }}?
            </div>
            <div class="modal-footer">
                <form method="post" action="/contact/{{ $contact->id }}/delete">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" role="button">Delete</button>
                    <button type="submit" class="btn btn-primary" role="button" data-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>