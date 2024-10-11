<!DOCKTYPE html>
    <html>

    <head>
        <title></title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <style>
            #test {
                border: solid 1px;
            }

            .red {
                color: red;
            }

            .blue {
                color: blue;
            }

            #box {
                border: solid 1px;
                background-color: pink;
                color: white;
                padding: 10px;
            }
        </style>


    </head>

    <body>
        <div class="container">
            <div class="row">
                <div id="test">
                    <p class="red">jQuery Core

                        jQuery 3.x
                        jQuery Core 3.7.1: uncompressed, minified,
                        jQuery 2.x
                        jQuery Core 2.2.4: uncompressed, minified
                        jQuery 1.x
                        jQuery Core 1.12.4: uncompressed, minified
                        jQuery Migrate
                        jQuery Migrate 3.5.2: uncompressed, minified
                    </p>
                    <div>
                        Method Description
                        add() Adds elements to the set of matched elements
                        addBack() Adds the previous set of elements to the current set
                        andSelf() Deprecated in version 1.8. An alias for addBack()
                        children() Returns all direct children of the selected element
                        closest() Returns the first ancestor of the selected element
                        contents() Returns all direct children of the selected element (including text and comment nodes)
                        each() Executes a function for each matched element
                        end() Ends the most recent filtering operation in the current chain, and return the set of matched elements to its previous state
                        eq() Returns an element with a specific index number of the selected elements
                        filter() Reduce the set of matched elements to those that match the selector or pass the function's test
                        find() Returns descendant elements of the selected element
                        first() Returns the first element of the selected elements
                        has() Returns all elements that have one or more elements inside of them
                        is() Checks the set of matched elements against a selector/element/jQuery object, and return true if at least one of these elements matches the given arguments
                        last() Returns the last element of the selected elements
                        map() Passes each element in the matched set through a function, producing a new jQuery object containing the return values
                        next() Returns the next sibling element of the selected element
                        nextAll() Returns all next sibling elements of the selected element
                        nextUntil() Returns all next sibling elements between two given arguments
                        not() Returns elements that do not match a certain criteria
                        offsetParent() Returns the first positioned parent element
                        parent() Returns the direct parent element of the selected element
                        parents() Returns all ancestor elements of the selected element
                        parentsUntil() Returns all ancestor elements between two given arguments
                        prev() Returns the previous sibling element of the selected element
                        prevAll() Returns all previous sibling elements of the selected element
                        prevUntil() Returns all previous sibling elements between two given arguments
                        siblings() Returns all sibling elements of the selected element
                        slice() Reduces the set of matched elements to a subset specified by a range of indices

                    </div>

                </div>

                <form id="form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" id="semail">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="state" class="form-control">
                            <option selected>Choose...</option>
                            <option>punjab</option>
                            <option>uttar pradesh</option>
                            <option>himachal pradesh</option>
                            <option>hriyana</option>
                        </select>
                    </div>

                    <div class=" border" id="fillvalue"></div>
                    <button type="submit" id="addclass" class="btn btn-primary">save</button>
                    <!-- <button type="submit" id="removeclass" class="btn btn-primary">Remove Class</button>
                    <button type="submit" id="toggle" class="btn btn-primary">Toggle Class</button>
 -->


                </form>

                <div id="box">
                    <h2>text Box</h2>
                    <p>
                        jQuery 3.x
                        jQuery Core 3.7.1: uncompressed, minified,
                        jQuery 2.x
                        jQuery Core 2.2.4: uncompressed, minified
                        jQuery 1.x
                        jQuery Core 1.12.4: uncompressed, minified
                        jQuery Migrate
                        jQuery Migrate 3.5.2: uncompressed, minified</p>
                    <p> jQuery Core 1.12.4: uncompressed, minified
                        jQuery Migrate
                        jQuery Migrate 3.5.2: uncompressed, minified</p>

                </div>
                <div class="border p-3 m-2" id="text">
                    <p> jQuery Core 1.12.4: uncompressed, minified
                        jQuery Migrate
                        jQuery Migrate 3.5.2: uncompressed, minified</p>
                </div>

                <!-- <button type="submit" id="apend" class="btn btn-primary">Apend</button>
                <button type="submit" id="prepend" class="btn btn-primary">prepend</button>

                <button type="submit" id="after" class="btn btn-primary">After</button>
                <button type="submit" id="before" class="btn btn-primary">Before</button> -->

                <!-- <button type="submit" id="empty" class="btn btn-primary">Empty</button>
                <button type="submit" id="remove" class="btn btn-primary">Remove</button> -->
                <!-- <button type="submit" id="apendto" class="btn btn-primary">apendto</button>
                <button type="submit" id="prependo" class="btn btn-primary">prependto</button> -->

                <!-- <button type="submit" id="clone" class="btn btn-primary">clone</button> -->
                <button type="submit" id="replace" class="btn btn-primary">replace</button>




            </div>
        </div>

        <script>
            // SELECT MAX(column_name) FROM Employee < SELECT MAX(column_name) FROM Employee

            // SELECT DISTINCT(Salary) FROM table ORDER BY Salary DESC LIMIT n, 1



            // $(document).ready(function(){
            //    alert("hi") 
            // })

            // $(document).ready(function(){
            //     // console.log("hi");
            // $(document).ready(function(){
            //   let a = $('#test').text();
            //   console.log(a);  
            // })


            // });

            // $(document).ready(function(){
            //  $('test')   
            // $('#test').css("color","red");

            // });


            // $(document).ready(function() {
            //     $('#test').click(function() {
            //         $('#test').css('background-color', 'red');
            //         let a = $('#test').text();
            //         console.log(a);

            //     });
            //     $('#test').dblclick(function() {
            //         $('#test').css('background-color', 'green');
            //     });

            //     $('#test').contextmenu(function() {
            //         $('#test').css('background-color', 'blue');
            //     });
            //     $('#test').mouseenter(function() {
            //         $('#test').css('background-color', 'yellow');
            //  all methods list   });
            //     $('#test').mouseleave(function(){
            //     $('#test').css('background-color','black');
            //     });



            // });


            // $(document).ready(function() {
            //     $('body').keypress(function() {
            //         $(this).css('background-color', 'orange');
            //     });
            //     $('body').keyup(function() {
            //         $(this).css('background-color', 'green');
            //     });
            // $('#test').keydown(function() {   
            //     $(this).css('background-color', 'red');


            // })  //         $(this).css('background-color', 'lime');

            //     });

            //     $('#email,#password,#state').blur(function() {
            //         $(this).css('background-color', '');
            //     });

            //     $('#state').change(function() {
            //         var a = $(this).val();
            //         $('#fillvalue').html(a);
            //         console.log(a);

            //     });

            //     $('#email,#state').select(function() {
            //         $(this).css('background-color', 'black');
            //     });

            //     $('#form').submit(function() {
            //         var email = $('#email').val();
            //         var password = $('#password').val();
            //         var state = $('#state').val();

            //         alert(email + " " + password + " " + state);
            //         console.log(email + " " + password + " " + state);
            //     });


            // });





            // $(document).ready(function() {
            // let a = $('#test').text();
            // let b = $('#test').html();
            // let c = $('#email').attr('class');
            // console.log(a + "" + b + "" + c);


            // $('#form').submit(function() {
            //     let email = $('#email').val();
            //     let password = $('#password').val();
            //     let state = $('#state').val();
            //     alert('email :' + email + 'password : ' + password + 'state :' + state);

            // });


            // $('#clickbutton').click(function() {
            // $('#semail').text('eamil amd password');
            //  });

            // });

            // $('#addclass').click(function() {
            //     $('#test').addClass('red');

            // });

            // $('#removeclass').click(function() {
            //     $('#test').removeClass('red');

            // });

            // $('#toggle').click(function() {
            //     $('#test').toggleClass('blue');

            // });


            // $(document).ready(function() {

            //     // $('#addclass').click(function() {
            //     //   let a = $('#test').css('background','blue');
            //     // console.log(a);

            //     // });

            //     $('#addclass').on({
            //         "click": function() {
            //             $('#test').css('background-color', 'blue');
            //         },
            //         "mouseover": function() {
            //             $('#test').css('background-color', 'pink');
            //         }


            //     });

            //     $('button').click(function() </button>
            //         $('#test').off("mouseover")
            //     });

            // });





            // $(document).ready(function() {
            //     $('#apend').click(function() {
            //         $('#box').append('<h4>hello</h4>')

            //     });
            //     $('#prepend').click(function() {
            //         $('#box').prepend('<h4>hello prepend</h4>')

            //     });

            //     $('#after').click(function(){
            //// <button type="submit" id="remove" class="btn btn-primary">Remove</button>
            //     $('#before').click(function(){
            //       $('#box').before('<h3>hello Before</h3> <br>')
            //     });


            // });


            //$(document).ready(function() {
            // $('#empty').click(function() {
            //     $('#box').empty();
            // });
            // $('#remove').click(function() {
            //     $('#box').remove();
            // });

            // $('#apendto').click(function() {
            //     $('<h1> new tag append to</h1>').appendTo('#box');
            // })

            // $('#prependo').click(function() {
            //     $('<h4>ne tag prepend</h4>').prependTo('#box');
            // })


            // $('#clone').click(function(){
            //  $('#box').clone().appendTo('#text');
            // });

            // $('#replace').click(function() {

            //         $('p:nth-child(2)').replaceWith('<h1>hello replace</h1>');
            //         $('<h1>hello replace all</h1>').replaceAll('#text');

            //     });





            // });





            let selectedSemesterId = null;
            let selectedCourseId = null;

            // Function to filter and display the data
            function updateStudentData() {
                tableBody.empty();

                if (selectedSemesterId && selectedCourseId) {
                    let filteredFeesData = feesdata.filter(function(fee) {
                        console.log(fee, '0000000000000000000000')
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
        </script>






    </body>

    </html>