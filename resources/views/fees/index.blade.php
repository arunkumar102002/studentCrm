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

                <h3>Add fees Amount</h3>
                <table class="table table-striped table-hover table-bordered table-responsive w-100">
                    <thead>
                        <tr>
                            <th>Sr no</th>  
                            <th>Courses Name</th>
                            @foreach($semester as $sem)
                            <th data-id="{{$sem->id}}">{{$sem->name}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $index => $course)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="course_id" data-id="{{$course->id}}">{{ $course->name }}</td>

                            @foreach($semester as $sem)
                            @php

                            // Check if a fee exists for this course and semester

                            $feeKey = $course->id . '_' . $sem->id;
                            $feeAmount = $courseFees->has($feeKey) ? $courseFees[$feeKey]->first()->Fees_Amount : '';
                            @endphp
                            <td><input type="number" name="fees{{ $sem->id }}" class="form-control amount" placeholder="Amount" value="{{ $feeAmount }}"></td>
                            @endforeach

                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>





<script>
    setTimeout(function() {
        $('.message').css('display', 'none');
    }, 2000);



    $(document).ready(function() {

        $('.amount').on('blur', function(event) {

            let courseId = $(this).closest('tr').find('td:eq(1)').attr('data-id');
            let semIndex = $(this).closest('td').index();
            let semId = $('th').eq(semIndex).attr('data-id');
            let amount = $(this).val();

            console.log(amount, courseId, semId);

            amount = amount || 0;


            let dataToSend = {
                Fees_Amount: amount,
                course_id: courseId,
                semester_id: semId,
                _token: '{{ csrf_token() }}'
            };

            console.log(dataToSend);

            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to save the amount?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, save it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: "{{ route('save.fees.amount') }}",
                        method: 'POST',
                        data: dataToSend,
                        success: function(response) {
                            console.log('Amount saved successfully:', response);
                            Swal.fire('Success', 'The amount was saved successfully.', 'success');
                        },
                        error: function(xhr) {
                            console.error('Error saving amount:', xhr.responseText);
                            Swal.fire('Error', 'An error occurred while saving the amount.', 'error');
                        }
                    });



                }
            });



        });
    });
</script>
@endsection







