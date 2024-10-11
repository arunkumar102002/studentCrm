@extends('layout.app')

@section('content')
<div class="bg-body-tertiary min-vh-100 flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="" id="#error-message" id="#password"></div>
            <div class="col-lg-12 mt-5 pt-5">
                <div id="error-top-bar" style="display: none; background-color: red; color: white; padding: 10px; position: fixed; top: 0; width: 100%; z-index: 1000;">

                </div>
                <div class="card mb-4 mx-8 mt-5">
                    <div class="card-body p-4">
                        <h1>Add Student</h1>
                        <p class="text-body-secondary">Create or Edit Account</p>

                        <form id="formsubmit">
                            <input type="hidden" name="id" id="id">
                            <div class="d-flex">
                                <div class="mb-3 col-lg-4 p-2">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="Name" required id="name">
                                </div>
                                <span class="text-danger"></span>
                                <div class="mb-3 col-lg-4 p-2">
                                    <label for="father_name">Father's Name</label>
                                    <input class="form-control" type="text" name="father_name" placeholder="Father's Name" id="father_name" required>
                                </div>
                                <span class="text-danger"></span>
                                <div class="mb-3 col-lg-4 p-2">
                                    <label for="address">Address</label>
                                    <input class="form-control" type="text" name="address" placeholder="Address" id="address" required>
                                </div>
                                <span class="text-danger"></span>

                            </div>
                            <div class="d-flex">

                                <div class="mb-3 col-lg-4 p-2">
                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" name="email" placeholder="Email" id="email" required>
                                    <span class="text-danger"></span>
                                </div>



                                <div class="mb-3 col-lg-4 p-2 password">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" name="password" placeholder="Password" id="password" required>
                                    <span class="text-danger"></span>
                                </div>

                                <div class="mb-3 col-lg-4 p-2">
                                    <label for="phon_number">Phone Number</label>
                                    <input class="form-control" type="number" name="phon_number" placeholder="Phone Number" id="phon_number" required>
                                    <span class="text-danger"></span>
                                </div>

                            </div>

                            <div class="d-flex">
                                <div class="mb-3 col-lg-4 p-2" id="DOB">
                                    <label for="dob">Date of Birth</label>
                                    <input class="form-control" type="date" name="dob" id="dob" required>
                                </div>
                                <span class="text-danger"></span>
                                <div class="mb-3 col-lg-4 p-2">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" name="gender" id="gender">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <span class="text-danger"></span>
                                </div>
                                <span class="text-danger"></span>
                                <div class="mb-3 col-lg-4 p-2">
                                    <lable for="role">Role</lable>
                                    <select class="form-control" name="role" id="role" required>
                                        <option value="" disabled selected>Select Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="teacher">Teacher</option>
                                        <option value="student">Student</option>
                                    </select>
                                    <span class="text-danger"></span>
                                </div>
                                <span class="text-danger"></span>
                            </div>

                            <div class="mb-3 col-lg-4 p-2">
                                <select id="courseSelect" class="form-select" name="course_id" aria-label="Default select example"></select>
                                <span class="text-danger"></span>
                            </div>


                            <button class="btn btn-block btn-success" id="submitButton" type="submit">Create Account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">User Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- User information will be populated here -->
                        <h3>User Information</h3>
                        <p><strong>Name :</strong> <span id="userName"></span></p>
                        <p><strong>Father's Name :</strong> <span id="userFatherName"></span></p>
                        <p><strong>Address :</strong> <span id="userAddress"></span></p>
                        <p><strong>Phone Number :</strong> <span id="userPhoneNumber"></span></p>
                        <p><strong>Email :</strong> <span id="userEmail"></span></p>
                        <p><strong>Date of Birth :</strong> <span id="userDOB"></span></p>
                        <p><strong>Gender :</strong> <span id="userGender"></span></p>
                        <p><strong>Role :</strong> <span id="userRole"></span></p>
                        <div id=coursefield>
                            <p>
                                <strong> Course: </strong> <span id="userCourse"></span>
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="d-flex">
            <div class="col-6"> Records Per Page

                <select class="form-select" id="record_size" style="max-width: 80px">
                    <option value="5" selected>5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>



        </div>

        <div id="alldata"></div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Sr no</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="studentTableBody"></tbody>
        </table>
        <div class="row mr-2">
            <div class="col mt-2">
                <div id="page-details" style="width: 250px;"></div>
            </div>
            <div class="col">
                <nav class="d-flex justify-content-center">
                    <ul class="pagination" id="paginationLinks"></ul>
                </nav>
            </div>
        </div>


        <script>
            function userDataShow(pageUrl = null) {
                let fetchUrl = pageUrl || "{{ route('student.data.show') }}";
                $.ajax({
                    url: fetchUrl,
                    type: "GET",

                    success: function(response) {
                        let students = response.data;
                        courseSelector(response.courses);
                        console.log(students);

                        let output = '';

                        if (students.length > 0) {
                            $.each(students, function(index, studentdata) {
                                output += `

                                <tr>
                                <td>${index + 1}</td>
                                <td>${studentdata.name}</td>
                                <td>${studentdata.phon_number}</td> <!-- Corrected phone number field name -->
                                <td>${studentdata.email}</td>
                                <td>${studentdata.gender}</td>
                                <td>${studentdata.role}</td>
                                <td>
                                <a href="#" class="btn btn-primary view-usr-data" data-id="${studentdata.id}" data-bs-toggle="modal" data-bs-target="#staticBackdrop">View</a>
                                <a href="#" class="btn btn-success edit-btn" data-id="${studentdata.id}">Edit</a>
                                <a href="#" class="btn btn-danger delete-btn" data-id="${studentdata.id}">Delete</a>
                                </td>
                                
                                </tr>`;


                            });
                        } else {
                            output = `<tr><td colspan="7" class="text-center">No student data found</td></tr>`;
                        }

                        $('#studentTableBody').html(output);

                        const total_records_tr = $('#studentTableBody tr');
                        let records_per_page = parseInt($('#record_size').val());
                        let page_number = 1;
                        const total_records = total_records_tr.length;
                        let total_pages = Math.ceil(total_records / records_per_page);

                        generatePage();
                        displayRecords();

                        function displayRecords() {
                            let start_index = (page_number - 1) * records_per_page;
                            let end_index = start_index + records_per_page - 1;
                            if (end_index >= total_records) end_index = total_records - 1;

                            let statement = '';
                            for (let i = start_index; i <= end_index; i++) {
                                statement += `<tr>${total_records_tr[i].innerHTML}</tr>`;
                            }

                            $('#studentTableBody').html(statement);
                            updatePaginationButtons();
                            $('#page-details').html(`Showing ${start_index + 1} To ${end_index + 1} Of ${total_records} Entries`);
                        }

                        function generatePage() {
                            let prevBtn = `<li class="page-item"><a class="page-link" id="prevBtn" href="javascript:void(0);">Prev</a></li>`;
                            let nextBtn = `<li class="page-item"><a class="page-link" id="nextBtn" href="javascript:void(0);">Next</a></li>`;
                            let buttons = '';

                            for (let i = 1; i <= total_pages; i++) {
                                buttons += `<li class="page-item dynamic-item ${i === page_number ? 'active' : ''}" id="page${i}">
                                <a class="page-link pageNumber" href="javascript:void(0);">${i}</a>
                                </li>`;
                            }

                            $('#paginationLinks').html(prevBtn + buttons + nextBtn);
                            bindPaginationEvents();
                        }

                        function updatePaginationButtons() {
                            $('.dynamic-item').removeClass('active');
                            $('#page' + page_number).addClass('active');

                            $('#prevBtn').parent().toggleClass('disabled', page_number === 1);
                            $('#nextBtn').parent().toggleClass('disabled', page_number === total_pages);
                        }

                        function bindPaginationEvents() {
                            $('#nextBtn').off('click').on('click', function() {
                                if (page_number < total_pages) {
                                    page_number++;
                                    displayRecords();
                                }
                            });

                            $('#prevBtn').off('click').on('click', function() {
                                if (page_number > 1) {
                                    page_number--;
                                    displayRecords();
                                }
                            });

                            $('.pageNumber').off('click').on('click', function() {
                                page_number = parseInt($(this).text());
                                displayRecords();
                            });
                        }

                        $('#record_size').off('change').on('change', function() {
                            records_per_page = parseInt($(this).val());
                            total_pages = Math.ceil(total_records / records_per_page);
                            page_number = 1;
                            generatePage();
                            displayRecords();
                        });
                    },

                    error: function(xhr, status, error) {
                        console.error("Error fetching data");
                    }
                });
            }



            // Use jQuery to insert the options into the select element
            function courseSelector(courses) {
                let output = '<option value="">Select Course</option>';
                courses.forEach(course => {
                    output += `<option value="${course.id}">${course.name}</option>`;
                });
                $('#courseSelect').html(output);
            }



            // data stor for update
            $(document).ready(function() {
                $('#formsubmit').on('submit', function(e) {
                    e.preventDefault();

                    let id = $('#id').val(); // If updating, use the id
                    let data = $(this).serialize();

                    let ajaxUrl = "{{ route('student-data.store') }}"; // Adjust this to your create route
                    let ajaxType = "POST"; // Set it to POST for creation, or PUT/PATCH if updating based on 'id'

                    console.log(data);
                    $.ajax({
                        url: ajaxUrl,
                        type: ajaxType,
                        data: data,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Add CSRF token
                        },
                        success: function(response) {
                            if (response.status === 'success') {
                                Swal.fire({
                                    title: "Success!",
                                    text: `The Student data has been ${id ? 'updated' : 'created'} successfully!`,
                                    icon: "success"
                                });
                                userDataShow();

                                // Reset the form, but if it's an update, keep the button as 'Update'
                                $('#formsubmit')[0].reset(); // Reset form fields
                                if (!id) {
                                    $('#submitButton').text('Create Account'); // Only set back to Create Account if it's a new record
                                } else {
                                    $('#submitButton').text('Update Account'); // Keep the button text as 'Update' after an update
                                }


                            }
                        },
                        error: function(xhr) {
                            // Handle validation errors (422 status code)
                            if (xhr.status === 422) {
                                let errors = xhr.responseJSON.errors;
                                handleErrors(errors); // Call the error handling function
                            } else {
                                // General error handling
                                $('#error-message').text("Error: " + xhr.statusText);
                                $('#error-top-bar').show();
                                Swal.fire({
                                    title: "Error!",
                                    text: "An error occurred while saving the student data! " + xhr.statusText,
                                    icon: "error"
                                });
                            }
                        }
                    });
                });

                // Function to fetch and display student data on page load
                userDataShow();


                function handleErrors(errors) {

                    $('.text-danger').text('');

                    // Display new errors
                    if (errors.email) {
                        $('#email').next('.text-danger').text(errors.email[0]);
                    }
                    if (errors.password) {
                        $('#password').next('.text-danger').text(errors.password[0]);
                    }
                    if (errors.phon_number) {
                        $('#phon_number').next('.text-danger').text(errors.phon_number[0]);
                    }
                    if (errors.dob) {
                        $('#dob').next('.text-danger').text(errors.dob[0]);
                    }
                    if (errors.gender) {
                        $('#gender').next('.text-danger').text(errors.gender[0]);
                    }
                    if (errors.role) {
                        $('#role').next('.text-danger').text(errors.role[0]);
                    }
                    if (errors.course_id) {
                        $('#courseSelect').next('.text-danger').text(errors.course_id[0]);
                    }
                }
            });







            // Edit button click event
            $(document).on('click', '.edit-btn', function(e) {
                e.preventDefault();

                let id = $(this).data('id');

                $.ajax({
                    url: "{{ route('student-data.edit', '') }}/" + id,
                    type: "GET",
                    success: function(response) {
                        let data = response.data;
                        console.log(data);

                        $('#id').val(data.id);
                        $('#name').val(data.name);
                        $('#father_name').val(data.father_name);
                        $('#address').val(data.address);
                        $('#email').val(data.email);
                        $('#phon_number').val(data.phon_number);
                        $('#dob').val(data.dob);
                        $('#gender').val(data.gender);
                        $('#role').val(data.role);
                        $('#courseSelect option[value="' + data.course_id + '"]').prop('selected', true);

                        // Hide password field during update
                        $('.password').css('display', 'none');
                        $('#password').removeAttr('required');

                        $('#submitButton').text('Update Account');
                    }
                });
            });




            $(document).on('click', '.delete-btn', function(e) {
                e.preventDefault();

                let id = $(this).data('id');

                // SweetAlert confirmation message before deletion
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If user confirms, proceed with AJAX call
                        $.ajax({
                            url: "{{ route('student-data.destroy', '') }}/" + id,
                            type: "DELETE",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token for security
                            },
                            success: function(response) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your record has been deleted.',
                                    'success'
                                );
                                userDataShow(); // Refresh the table or data display
                            },
                            error: function(xhr, status, error) {
                                Swal.fire(
                                    'Error!',
                                    'An error occurred while deleting the record.',
                                    'error'
                                );
                                console.error("Error: " + error);
                            }
                        });
                    }
                });
            });




            $(document).on('click', '.view-usr-data', function() {
                let userId = $(this).data('id');

                $.ajax({
                    url: "{{ url('user') }}/" + userId, // Dynamically add userId to the URL
                    type: "GET",
                    success: function(response) {
                        const data = response.data;

                        // Populate modal with user data
                        $('#userName').text(data.name);
                        $('#userFatherName').text(data.father_name);
                        $('#userAddress').text(data.address);
                        $('#userPhoneNumber').text(data.phon_number);
                        $('#userEmail').text(data.email);
                        $('#userDOB').text(data.dob);
                        $('#userGender').text(data.gender);
                        $('#userRole').text(data.role);
                        if (data.courses && data.courses.name) {
                            $('#userCourse').text(data.courses.name); // Set the course name
                            $('#coursefield').show(); // Show the course field if the course name is available
                        } else {
                            $('#coursefield').hide(); // Hide the course field if not available
                        }





                        // Show the modal
                        $('#userModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching user data:', error);
                    }
                });
            });
        </script>

        @endsection