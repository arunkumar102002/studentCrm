@extends('layout.app')

@section('content')
<!-- Button trigger modal -->

<div class="container">
    <div class="row justify-content-center">
        <div class="card mb-4 mx-8" style="margin-top:140px;">
            <div class="card-body">

                @if (session('success'))
                <div class="alert alert-success message">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-danger message">
                    {{ session('error') }}
                </div>
                @endif

                @error('name')
                <div class="alert alert-danger message">
                    <span class="text-danger">{{ $message }}</span>
                </div>
                @enderror

                <button class="btn btn-primary view-usr-data" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Courses</button>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Sr no</th>
                            <th>Course Name</th>
                            <th>Subjects</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($courses->count() == 0)
                        <tr>
                            <td colspan="2">No Course Found</td>
                        </tr>
                        @endif
                        @foreach ($courses as $key => $coursedata)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $coursedata->name }}</td>
                            <td>
                                @if(count($coursedata->subjects) == 0)
                                <span>No Subject</span>
                               
                                @endif
                                
                                @foreach ($coursedata->subjects as $subject)
                                <span class="bg-primary text-white text-xs fw-medium me-2 px-2 py-1 rounded">{{ $subject->name}}</span>
                                @endforeach       

                            </td>

                            <td><a href="{{ route('course.edit', $coursedata->id) }}" class="btn btn-success edit-btn">Edit</a>
                                <form action="{{ route('course.destroy', $coursedata->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this courses?');">Delete</button>
                                </form>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<!-- Create Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Course</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formsubmit" action="{{ route('course.store') }}" method="POST">
                <div class="modal-body">

                    @csrf
                    <div class="form-group">
                        <label class="p-2">Course Name</label>
                        <input type="text" name="name" placeholder="Enter the Course Name" class="mt-2 form-control">
                        <br>
                    </div>
                    <div class="form-group z-1">
                        <label class="p-2">Select Subject</label><br>
                        <select name="subject[]" class="mt-2 form-control " multiple>
                            @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                            @endforeach
                        </select>
                        <br>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<script>
    setTimeout(function() {
        $('.message').css('display', 'none');
    }, 2000);
</script>
@endsection