@extends('layout.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card mb-4 mx-8" style="margin-top:140px;">
            <div class="card-body">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Update Course</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="window.history.back()"></button>
                        </div>
                        <div class="modal-body">
                            <form id="formsubmit" method="POST" action="{{ route('course.custom.update', $course->id) }}" class="mt-2 form-control">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="p-2">Course Name</label>
                                    <input type="hidden" name="id" value="{{ $course->id }}">
                                    <input type="text" name="name" id="name" placeholder="Enter the Course Name" value="{{ $course->name }}" class="mt-2 form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="subjects" class="p-2">Subjects</label>
                                    <select name="subject[]" id="subject" class="mt-2 form-control select2" multiple required>
                                    
                                        @foreach ($subjects as $subject)
                                        <option value="{{ $subject->id }}" @if(in_array($subject->id, $course->subjects->pluck('id')->toArray())) selected @endif>
                                            {{ $subject->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Update Course</button>
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