@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card mb-4 mx-8" style="margin-top:140px;">
            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success message">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('errors'))
                <div class="alert alert-danger message">
                    {{ session('errors') }}
                </div>
                @endif
                <div class="text-end">
                    <button class="btn btn-primary addFeesButton " data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Fees Payment</button>
                </div>

                <div>
                    <form class="form-group d-flex" id="feesForm">
                        @csrf
                        <div class="col-lg-3 p-3">
                            <label>Select Course</label>
                            <select class="form-control" name="course_id" id="selectCourseIndex"></select>
                        </div>
                        <div class="col-lg-3 p-3">
                            <label>Select Semester</label>
                            <select class="form-control" name="semester_id" id="selectSemesterIndex" disabled> </select>
                        </div>
                    </form>


                    <table class="table table-striped table-hover mt-4">
                        <thead>
                            <tr>
                                <th>Sr No</th>
                                <th>Student Name</th>
                                <th>Total Fees</th>
                                <th>Fees Status</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            <!-- Fees records will be dynamically inserted here -->
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Adding Fees Payment -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Fees Payment</h5>
                    <button type="button" id="modleclose" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form id="formsubmit" action="{{ route('User.fees.fee.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group mt-3">
                            <label for="courseSelect" class="p-2">Course</label>
                            <select class="form-select" id="courseSelect" name="course_id"></select>
                            <span class="text-danger"></span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="semesterSelect" class="p-2">Semester Name</label>
                            <select id="semesterSelect" class="form-select" name="semester_id" disabled>
                                <option selected disabled>Select Semester</option>
                            </select>
                            <span class="text-danger"></span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="student_id" class="p-2">Student Name</label>
                            <select id="studentSelect" class="form-select" name="student_id" disabled>
                                <option selected disabled>Select Student</option>
                            </select>
                            <span class="text-danger"></span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="total_fees" class="p-2">Total Fees</label>
                            <input type="number" id="fees" name="total_fees" class="form-control" readonly required>
                            <span class="text-danger"></span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="paid_fees" class="p-2">Paid Fees</label>
                            <input type="text" id="paid_fees" name="paid_fees" class="form-control">
                            <span class="text-danger" id="paid_fees_error"></span>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <button type="button" class="btn btn-secondary" id="closeModal" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>populatecoursedata
    </div>

    <script>
        $(document).ready(function() {
            fetchFeesData();

            function fetchFeesData() {
                $.ajax({
                    url: "{{ route('User.fees.index') }}",
                    type: 'GET',
                    success: function(response) {
                        if (response) {
                            populateCourseSelect(response);
                        }
                    }
                });
            }

            function populateCourseSelect(response) {
                let courseSelect = $('#courseSelect');
                courseSelect.empty().append('<option disabled selected>Select Course</option>');
                response.courses.forEach(function(course) {
                    courseSelect.append(`<option value="${course.id}">${course.name}</option>`);
                });

                courseSelect.on('change', function() {
                    populateSemesterAndStudentSelects(response, $(this).val());
                });
            }


            function populateSemesterAndStudentSelects(response, selectedCourseId) {
                let semesters = response.semesters.filter(s => response.fees.some(fee => fee.course_id == selectedCourseId && fee.semester_id == s.id));
                let students = response.students;

                let semesterSelect = $('#semesterSelect');
                semesterSelect.empty().append('<option disabled selected>Select Semester</option>');
                semesters.forEach(function(semester) {
                    semesterSelect.append(`<option value="${semester.id}">${semester.name}</option>`);
                });
                semesterSelect.prop('disabled', false);

                let studentSelect = $('#studentSelect');
                studentSelect.empty().append('<option disabled selected>Select Student</option>');
                students.forEach(function(student) {
                    studentSelect.append(`<option value="${student.id}">${student.name}</option>`);
                });
                studentSelect.prop('disabled', false);

                semesterSelect.on('change', function() {
                    let selectedSemesterId = $(this).val();
                    let selectedFee = response.fees.find(fee => fee.course_id == selectedCourseId && fee.semester_id == selectedSemesterId);
                    $('#fees').val(selectedFee ? selectedFee.Fees_Amount : '');
                });
            }


            $('#paid_fees').on('input', function() {
                let paidFees = parseFloat($(this).val());
                let totalFees = parseFloat($('#fees').val());

                if (paidFees > totalFees) {
                    $('#paid_fees_error').text('Paid fees cannot be greater than total fees.');
                } else {
                    $('#paid_fees_error').text('');
                    populatecoursedata
                }
            });


            $('#formsubmit').on('submit', function(e) {
                e.preventDefault();
                let formData = $(this).serialize();
                $.ajax({
                    url: "{{ route('User.fees.fee.store') }}",
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            $('#formsubmit')[0].reset();
                            $('#semesterSelect, #studentSelect').prop('disabled', true);
                            $('#fees').val('');
                            $('#staticBackdrop').modal('hide');
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: response.message,
                                showConfirmButton: false,
                                timer: 2000
                            });
                            fetchFeesData();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: response.message,
                                showConfirmButton: false,
                                timer: 2000
                            });
                        }
                    },
                    error: function(xhr) {

                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            $(`[name="${key}"]`).next('.text-danger').text(value[0]);
                        });
                    }
                });
            });


            $('#modleclose, #closeModal').click(function() {
                $('#semesterSelect, #studentSelect').prop('disabled', true);
                $('#formsubmit')[0].reset();
            });
        });





        $(document).ready(function() {
            fetchFeesStatus();

            function fetchFeesStatus() {
                $.ajax({
                    url: "{{ route('fees.data.show') }}",
                    type: "GET",
                    success: function(response) {

                        if (response.success) {
                            let courses = response.courses;
                            let semesters = response.semesters;
                            let feesdata = response.feesData;

                            let courseSelect = $('#selectCourseIndex');
                            let semesterSelect = $('#selectSemesterIndex');
                            let tableBody = $('#tableBody');

                            console.log(courses, semesters, feesdata, '*****');

                            // Populate courses dropdown
                            courseSelect.empty().append('<option disabled selected>Select Course</option>');
                            courses.forEach(function(course) {
                                courseSelect.append(`<option data-id="${course.id}" value="${course.id}">${course.name}</option>`);
                            });

                            //Handle course selection
                            courseSelect.on('change', function() {
                                semesterSelect.empty().append('<option disabled selected>Select Semester</option>').prop('disabled', false);
                                semesters.forEach(function(semester) {
                                    semesterSelect.append(`<option class="selectedSemseterID" data-id="${semester.id}" value="${semester.id}">${semester.name}</option>`);

                                });

                            });


                            let selectedSemesterId = null;
                            let selectedCourseId = null;

                            // Function to filter and display the data
                            function updateStudentData() {
                                tableBody.empty();

                                if (selectedSemesterId && selectedCourseId) {
                                    let filteredFeesData = feesdata.filter(function(fee) {
                                       
                                        return fee.semester_id == selectedSemesterId && fee.course_id == selectedCourseId;
                                    });

                                    // Check if we have data for the selected semester and course
                                    if (filteredFeesData.length > 0) {
                                        let output = '';

                                        filteredFeesData.forEach(function(fee, index) {
                                            output += `
                                            <tr>
                                                <td>${index + 1}</td>
                                                <td>${fee.student.name}</td>
                                                <td>${fee.total_fees ? fee.total_fees : 'N/A'}</td>
                                                <td>${fee.fees_pay ? fee.fees_pay : 'N/A'}</td>
                                            </tr>`;
                                        });

                                        // Append the generated rows to the table body
                                        tableBody.append(output);
                                    } else {
                                        tableBody.append('<tr><td colspan="4">No students found for the selected semester and course.</td></tr>');
                                    }
                                }
                            }


                            // Handle course selection
                            courseSelect.on('change', function() {
                                selectedCourseId = $(this).find(':selected').data('id'); // Get selected course ID
                                console.log(selectedCourseId, 'Selected Course ID');


                                // Assuming semesters data is available and is filtered by course
                                let courseSemesters = semesters.filter(function(semester) {
                                    return semester.course_id == selectedCourseId;
                                });

                                courseSemesters.forEach(function(semester) {
                                    semesterSelect.append(`<option data-id="${semester.id}" value="${semester.id}">${semester.name}</option>`);
                                });

                                // If a semester was already selected, keep it selected
                                if (selectedSemesterId) {
                                    semesterSelect.val(selectedSemesterId).trigger('change');
                                } else {
                                    tableBody.empty();
                                }
                                updateStudentData();
                            });

                            // Handle semester selection
                            semesterSelect.on('change', function() {
                                selectedSemesterId = $(this).find(':selected').data('id'); // Get selected semester ID
                                updateStudentData();
                            });

                        } else {
                            console.error("Failed to fetch course or semester data.");
                        }


                    },
                    error: function(status) {
                        console.error("AJAX request failed:", status);
                    }
                });
            }
        });
    </script>






    @endsection