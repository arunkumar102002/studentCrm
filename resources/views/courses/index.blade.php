@extends('layout.app')

@section('content')
<!-- Button trigger modal -->
<div class="container">
    <div class="row justify-content-center">
        <div class="card mb-4 mx-8" style="margin-top:140px;">
            <div class="card-body">

                <!-- Success and error messages -->
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

                <!-- Validation error for name -->
                @error('name')
                <div class="alert alert-danger message">
                    <span class="text-danger">{{ $message }}</span>
                </div>
                @enderror

                @error('subject')
                <div class="alert alert-danger message">
                    <span class="text-danger">{{ $message }}</span>
                </div>
                @enderror

                @error('course')
                <div class="alert alert-danger message">
                    <span class="text-danger">{{ $message }}</span>
                </div>
                @enderror

                <!-- Add Course Button -->
                <button class="btn btn-primary view-usr-data" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Courses</button>

                <!-- Course List Table -->
                <table class="table table-striped table-hover mt-4">
                    <thead>
                        <tr>
                            <th>Sr no</th>
                            <th>Course Name</th>
                            <th>Subjects</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- No Courses Found Message -->
                        @if ($courses->count() == 0)
                        <tr>
                            <td colspan="4">No Course Found</td>
                        </tr>
                        @endif

                        <!-- Displaying Courses -->
                        @foreach ($courses as $key => $coursedata)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $coursedata->name }}</td>
                            <td>
                                @if(count($coursedata->subjects) == 0)
                                <span>No Subject</span>
                                @else
                                @foreach ($coursedata->subjects as $subject)
                                <span class="bg-primary text-white text-xs fw-medium me-2 px-2 py-1 rounded">{{ $subject->name }}</span>
                                @endforeach
                                @endif
                            </td>
                            <td>
                                <!-- Action Buttons -->

                                <a href="{{ route('course.edit', $coursedata->id) }}" class="btn btn-success edit-btn">Edit</a>

                                <!-- Delete Form -->
                                <form action="{{ route('course.destroy', $coursedata->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirmDelete();">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<!-- Add Course Modal -->
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
                        <label for="courseName" class="p-2">Course Name</label>
                        <input type="text" id="courseName" name="name" placeholder="Enter the Course Name" class="mt-2 form-control" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="subjects" class="p-2">Select Subjects</label>

                        <div class="dropdown">
                            <!-- Dropdown Trigger -->
                            <p class="form-control dropdown-toggle" id="subjectDropdownMenu" data-bs-toggle="dropdown" required>
                                Select Subjects
                            </p>

                            <!-- Dropdown Menu with Checkboxes -->
                            <ul class="dropdown-menu" aria-labelledby="subjectDropdownMenu">
                                @foreach ($subjects as $subject)
                                <li>
                                    <div class="form-check ms-3">
                                        <input class="form-check-input" type="checkbox" name="subjects[]" id="subject{{ $subject->id }}" value="{{ $subject->id }}">
                                        <label class="form-check-label" for="subject{{ $subject->id }}">
                                            {{ $subject->name }}
                                        </label>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Scripts -->
<script>
    setTimeout(function() {
        $('.message').fadeOut('slow');
    }, 2000);

    function confirmDelete() {
        return confirm('Are you sure you want to delete this course?');
    }
</script>

@endsection