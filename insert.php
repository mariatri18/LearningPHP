<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // lessonID => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "diplwmatiki");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $comments = $_POST['comments'];
        $lessonID = $_REQUEST['lessonID'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO insert_lesson  VALUES ('$first_name','$last_name')";

        if (mysqli_query($conn, $sql)) {

            //echo nl2br("$first_name\n $last_name");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection

        ?>
    </center>

    <section class="text-center text-lg-start">
        <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }
        </style>

        <!-- Jumbotron -->
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
                        <div class="card-body p-5 shadow-5 text-center">
                            <div class="form-outline mb-4">
                                <form action="" method="post">
                                    <label class="form-label" for="LessonID">Lesson's ID</label>
                                    <input type="LessonID" name="lessonID" id="lessonID" class="form-control" />

                            </div>
                            <label class="fw-bold mb-5">Insert your code here</label>

                            <div class="form-outline mb-4" hidden>
                                <input type="FirstName" name="first_name" id="first_name" class="form-control" />
                                <label class="form-label" for="firstName">First Name</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4" hidden>
                                <input type="LastName" name="last_name" id="last_name" class="form-control" />
                                <label class="form-label" for="lastName">Last Name</label>
                            </div>

                            <!-- 2 column grid layout with text inputs for the first and last names -->

                            <div>
                                <textarea rows=" 25" cols="70" name="comments" id="comments">
                                </textarea>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Insert
                            </button>
                            <br />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1576836165612-8bc9b07e7778?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80" class="w-100 rounded-4 shadow-4" alt="" />
                </div>
                <?php

                // echo "The comment that you entered is:" . $comments . "<br>";
                $comments = explode("&", $comments);
                $i = 0;
                foreach ($comments as $value) {
                    // print $lessonID . '<br>';
                    $i++;

                    $sql = "INSERT INTO test_data VALUES ('$i','$value','$lessonID')";
                    if (mysqli_query($conn, $sql)) {

                        //echo nl2br("$email_address\n $lessonID");
                    } else {
                        echo "ERROR: Hush! Sorry $sql. "
                            . mysqli_error($conn);
                    }
                }
                mysqli_close($conn);
                ?>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
</body>

</html>