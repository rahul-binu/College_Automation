




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tc1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">

    <title>Document</title>

    <style>
        body {
            display: grid;
            justify-content: center;
            align-items: center;
        }

        .con {
            position: relative;
            top: 60px;
            width: 50vw;
            height: 143vh;
            box-shadow: 2px 2px 10px rgb(176, 174, 174);
        }

        .container-fluid {
            position: relative;
            top: 70px;
            display: flex;
            justify-content: end;
        }

        button {
            position: relative;
        }

        #heading {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            top: 20px;
        }

        #heading img {
            height: 80%;
            width: 250px;
        }

        #subheading {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            top: 20px;
        }

        #subheading h5 {
            color: rgb(25, 45, 101);
            font-family: Didot, serif;
        }

        #body {
            padding-left: 60px;
        }

        .date {
            justify-content: space-between;
            padding: 50px;
        }

        @media print {
            body {
                display: block;
            }

            .con {
                position: static;
                width: 100%;
                box-shadow: none;
            }

            .container-fluid {
                display: none;
            }
        }
    </style>
</head>

<body>

    <div class="con">

        <div class="row">
            <div class="col-12" id="heading">
                <img src="<?= base_url() ?>public\logonss.png" alt="">
            </div>
            <?php
                date_default_timezone_set('Australia/Melbourne');
                $date = date('d/m/Y', time());
            ?>
            <div class="col-12" id="subheading">
                <h6>Transfer Certificate</h6>
            </div>

            <div class="col-12">
                <div class="date d-flex">
                    <p>No: 214/2024</p>
                    <p>date: <?= $date ?> </p>
                </div>
            </div>

            <?php
                $pro =  $stddata->program;
                if ($pro == 'BCA') {
                    $cour = 'Computer Application';
                } else if ($pro == 'BCOM 1' || $pro == 'BCOM 2') {
                    $cour = 'Commerce';
                } else if ($pro == 'Bsc') {
                    $cour = 'Electronics';
                } else {
                    $cour = 'Electronics';
                }
            ?>
             <div class="col-12" id="body">
                    <div class="row">
                        <div class="col-6"><p>Student Name In Full </p></div>
                        <div class="col-1">:</div>
                        <div class="col-5"><p contenteditable="true"><?= $stddata->student_name; ?></p></div>

                        <div class="col-6"><p>Date of birth( in words ) </p></div>
                        <div class="col-1">:</div>
                        <div class="col-5"><p  contenteditable="true"><?= $stddata->dob; ?><br>(Eighth January Two Thousand Four)</p></div>

                        <div class="col-6"><p>Admission Number </p></div>
                        <div class="col-1">:</div>
                        <div class="col-5"><p contenteditable="true"><?= $stddata->admission_no; ?></p></div>

                        <div class="col-6"><p>Date of admission and class  </p></div>
                        <div class="col-1">:</div>
                        <div class="col-5"><p contenteditable="true">09/05/2021 , 1 <?= $pro; ?></p></div>

                        <div class="col-6"><p>Date of leaving and class </p></div>
                        <div class="col-1">:</div>
                        <div class="col-5"><p  contenteditable="true">17/03/2024 , 3 <?= $pro; ?></p></div>

                        <div class="col-6">
                            <p>Subject studied  </p>
                        </div>
                        <div class="col-1">:</div>
                      
                        <div class="col-5">
                            <p contenteditable="true"><?= $cour; ?></p>
                        </div>

                        <div class="col-6">
                            <p>Whether qualified for promotion to a higher class </p>
                        </div>
                        <div class="col-1">:</div>
                        <div class="col-5">
                            <p contenteditable="true">Course completed</p>
                        </div>

                        <div class="col-6">
                            <p>Whether all fees or other moneys due have been paid </p>
                        </div>
                        <div class="col-1">:</div>
                        <div class="col-5">
                            <p contenteditable="true">Yes</p>
                        </div>

                        <div class="col-6">
                            <p>Name of the examination of University for which the student has been last present from the college </p>
                        </div>
                        <div class="col-1">:</div>
                        <div class="col-5">
                            <p contenteditable="true">6th Semester <?= $pro; ?> Examination, Mahathma Gandhi University</p>
                        </div>

                        <div class="col-6">
                            <p>Register Number of the student and the date of the examination </p>
                        </div>
                        <div class="col-1">:</div>
                        <div class="col-5">
                            <p contenteditable="true"><?= $stddata->register_no; ?>, march 2024</p>
                        </div>

                        <div class="col-6"><p>Whether the student has appeared for the examination </p></div>
                        <div class="col-1">:</div>
                        <div class="col-5"><p contenteditable="true">Yes</p></div>

                        <div class="col-6"><p>Reason for leaving </p></div>
                        <div class="col-1">:</div>
                        <div class="col-5"><p contenteditable="true">As per request</p></div>

                        <div class="col-4 pt-5 mt-3">
                            <p>Clerk</p>
                        </div>
                        <div class="col-4 pt-5 mt-3">
                            <p>superintendent</p>
                        </div>
                        <div class="col-4 pt-5 mt-3">
                            <p>PRINCIPAL</p>
                        </div>
                    </div>
                </div>

        </div>

    </div>


    <div class="container-fluid">
        <button class="btn btn-primary" onclick="printContent()">Print</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <script>
        function printContent() {
            var printWindow = window.open('', '_blank');
            var content = document.querySelector('.con').innerHTML;
            printWindow.document.open();
            printWindow.document.write('<html><head><title>Print</title></head><body>' + content + '</body></html>');
            printWindow.document.close();
            printWindow.print();
        }
    </script>

</body>

</html>



