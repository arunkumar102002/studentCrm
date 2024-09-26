@extends('layout.app')

@section('content')
<!-- Button trigger modal -->

<div class="container">
    <div class="row justify-content-center">
        <div class="card mb-4 mx-8" style="margin-top:140px;">
            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success message">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger message">{{session('error')}}</div>
                @endif

                @error('name')
                <div class="alert alert-danger message">
                    <span class="text-danger">{{ $message }}</span>
                </div>
                @enderror

                <button class="btn btn-primary view-usr-data" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Subject</button>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Sr no</th>
                            <th>Subject Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($subjects->count() == 0)
                        <tr>
                            <td colspan="2">No Subject Found</td>
                        </tr>
                        @endif
                        @foreach ($subjects as $key => $subject)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $subject->name }}</td>
                            <td>
                                <a href="{{ route('subject.edit', $subject->id) }}" class="btn btn-success edit-btn">Edit</a>
                                <form action="{{ route('subject.destroy', $subject->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this subject?');">Delete</button>
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

<!-- Create Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Subject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- User information will be populated here -->
                <form id="formsubmit" method="POST" action="{{route('subject.store') }}">
                    @csrf
                    <div class="form-group">
                        <label class="p-2">Subject Name</label>

                        <input type="text" name="name" id="name" placeholder="Enter the Subject Name" class="mt-2 form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>







<script>
    setTimeout(function() {
        $('.message').css('display', 'none');
    }, 2000);
</script>
@endsection