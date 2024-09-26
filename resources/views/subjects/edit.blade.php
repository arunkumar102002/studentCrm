@extends('layout.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card mb-4 mx-8" style="margin-top:140px;">
            <div class="card-body">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Update Subject</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="window.history.back()"></button>
                        </div>
                        <div class="modal-body">
                            <form id="formsubmit" method="POST" action="{{ route('subject.custom.update', $subject->id) }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="p-2">Subject Name</label>
                                    <input type="hidden" name="id" value="{{ $subject->id }}">
                                    <input type="text" name="name" id="name" placeholder="Enter the Subject Name" value="{{ $subject->name }}" class="mt-2 form-control" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Update Subject</button>
                                    <button type="button" class="btn btn-secondary" onclick="window.history.back()" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection