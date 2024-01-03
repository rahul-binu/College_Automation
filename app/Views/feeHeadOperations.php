<style>
    #new-fee a {
        color: black;
        text-decoration: none;
    }

    label span {
        color: red;
        font-size: 20px;
    }
</style>

<!--model for confirmation -->

<!--model-->
<div class="modal fade" id="feeUpdateModal" tabindex="-1" role="dialog" aria-labelledby="feEditModel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title d-flex justify-content-center" id="feEditModel">Edit fee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <label for="">Fee group</label>
                        <input type="text" class="form-control fee_group_input" name="" id="fee_group_input">
                    </div>
                    <div class="col-6">
                        <label for="">Fee group Acronym</label>
                        <input type="text" class="form-control" name="" id="fee_group_acro_input">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <label for="">Fee head</label>
                        <input type="text" class="form-control" name="" id="fee_head_input">
                    </div>
                    <div class="col-6">
                        <label for="">Fee head acronym</label>
                        <input type="text" class="form-control" name="" id="fee_head_acro_input">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary feeMasterUpdateButton" data-dismiss="modal"
                    aria-label="Close">Update</button>
            </div>
        </div>
    </div>
</div>
<!--model end-->
<div class="container ">
    <div class="card mb-3 p-3">
        <div id="filter">
            <div class="row">
                <div class="col">
                    <h3>Fee Master Details</h3>
                </div>
            </div>
            <br>
            <div id="new-fee" class="mb-4">
                <a href="<?= base_url() ?>FeeManController/feeHeadAdd">
                    <span class="mx-1">Add New Fee Masters</span><i class="bi bi-plus-circle"></i>
                </a>
            </div>
            <!-- <div class="row mb-3  d-flex justify-content-end ">
                <div class="col-sm-12 col-md-6 col-lg-2 mx-5">
                        <input type="search" class="form-control form-control-sm" placeholder="Fee Head">

                </div>
            </div> -->
        </div>
        <div class="card-footer ">
            <div class="container d-flex justify-content-center">
                <table class="table FeeDataTable">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Fee group</th>
                            <th>Fee head</th>
                            <th>Status</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody class="tableBody">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script>
    //function to add data into data base
    $(document).ready(function () {

        $(document).on('click', '#modelPopButton', function () {
            // alert('l');

            if ($.trim($('#fee_group').val()).length == 0) {
                error_msg = 'Please enter the fee head';
                $('#errorPops').text(error_msg);
            } else {

            }

        });

    });
    //function to 
    $(document).ready(function () {
        //function call to display data
        feeDataDisplay();
        //model pop up for edit fee Details
        //  $(document).on('click', '.edit_button', function () {
        //
        //      var fee_head = $(this).closest('tr').find('#feeHead').text();
        //      //alert(fee_head);
        //
        //      $.ajax({
        //          method:"POST",
        //          url:"FeeOps/editFeeMasterData",
        //          data:{
        //              'feeHead':fee_head
        //          },
        //
        //          success: function (response) {
        //             // Extracting fee details from the response for modal inputs
        //             $.each(response.editFee, function (key, editFeeDetails) {
        //                 // uploading different input elements with fee details
        //                 $('#fee_head_input').val(editFeeDetails['fee_head']);
        //                 $('#fee_head_acro_input').val(editFeeDetails['fee_head_acro']);
        //                 $('#fee_group_input').val(editFeeDetails['fee_group']);
        //                 $('#fee_group_acro_input').val(editFeeDetails['fee_group_acro']);
        //         
        //                 // Showing the modal
        //                 $('#feeUpdateModal').modal('show');
        //             });
        //         }
        //
        //      });
        //
        //  });

        $(document).on('click', '.edit_button', function () {
            //function to edit the fee master data
            var fee_head = $(this).closest('tr').find('#feeHead').text();

            $.ajax({
                method: 'POST',
                url: 'FeeOps/editFeeMasterData',
                data: {
                    'feeHead': fee_head
                },
                success: function (response) {
                    $.each(response.editFee, function (key, fee) {
                        // adding value to the model feeUpdateModal
                        $('#fee_head_input').val(fee['fee_head']);
                        $('#fee_head_acro_input').val(fee['fee_head_acro']);
                        $('#fee_group_input').val(fee['fee_group']);
                        $('#fee_group_acro_input').val(fee['fee_group_acro']);

                        // $('#feeUpdateModal').modal('show');
                    });
                }
            });
        });

        $(document).on('click', '.feeMasterUpdateButton', function () {
            //getting datas and upadting the fee master
            // alert('hj');
            var feeData = {
                'feeHead': $('#fee_head_input').val(),
                'feeHeadAcro': $('#fee_head_acro_input').val(),
                'feeGroup': $('#fee_group_input').val(),
                'feeGroupAcro': $('#fee_group_acro_input').val()
            };

            $.ajax({
                method: "POST",
                url: "FeeOps/FeeMasterDataEdit",
                data: feeData,
                success: function (response) {
                    //  $('#feeUpdateModal').modal('hide');
                    $('.tableBody').html("");
                    feeDataDisplay();

                    //  alertify.set('notifier', 'position', 'top-right');
                    //  alertify.success(response.status);
                    //console.log(response);
                }
            });
        });


    });

    //   function feeDataDisplay() {
    //       $.ajax({
    //           method: "POST",
    //           url: "FeeOps/fetchFeeMasterData",
    //           success: function (response) {
    //               // ial numbers
    //               let serialNumber = 1;
    //
    //               // Displaying the data in the table format
    //               $.each(response.fee, function (key, value) {
    //                   // assingin buttob based on status value
    //                   let statusButtonClass = (value['status'] == 1) ? 'btn-success' : 'btn-danger';
    //                   let statusButtonText = (value['status'] == 1) ? 'Active' : 'Inactive';
    //                   let newStatus = (value['status'] == 1) ? '0' : '1';
    //
    //                   $('.tableBody').append(
    //                       '<tr>\
    //           <td>' + serialNumber + '</td>\
    //           <td>' + value['fee_group'] + ' (' + value['fee_group_acro'] + ')' + '</td>\
    //           <td><span id="feeHead">' + value['fee_head'] + '</span> (' + value['fee_head_acro'] + ')' + '</td>\
    //           <td><a href="<?= base_url(); ?>feeOps/feeStatus/'+ value['fee_head'] + '/' + newStatus + '" class="btn ' + statusButtonClass + '">' + statusButtonText + '</a></td>\
    //           <td><a href="" class="btn btn-primary edit_button" data-toggle="modal" data-target="#feeUpdateModal"><i class="bi bi-pencil"></i></a>\
    //           <a href="<?= base_url() ?>feeManController/feeadd/'+ value['fee_head'] + '"><button class="btn btn-info"><i class="bi bi-plus"></i></button></a></td>\
    //           </tr>'
    //                   );
    //                   // increacing the sl number
    //                   serialNumber++;
    //               });
    //           }
    //       });
    //   }

    function feeDataDisplay() {
        $.ajax({
            method: "POST",
            url: "FeeOps/fetchFeeMasterData",
            success: function (response) {
                // ial numbers
                let serialNumber = 1;

                // Displaying the data in the table format
                $.each(response.fee, function (key, value) {
                    // assingin buttob based on status value
                    let statusButtonClass = (value['status'] == 1) ? 'btn-success' : 'btn-danger';
                    let statusButtonText = (value['status'] == 1) ? 'Active' : 'Inactive';
                    let newStatus = (value['status'] == 1) ? '0' : '1';
                    let newStatusButtonText = (value['status'] == 1) ? 'Inactive' : 'Active';

                    $('.tableBody').append(
                        '<tr>\
            <td>' + serialNumber + '</td>\
            <td>' + value['fee_group'] + ' (' + value['fee_group_acro'] + ')' + '</td>\
            <td><span id="feeHead">' + value['fee_head'] + '</span> (' + value['fee_head_acro'] + ')' + '</td>\
            <td>\
            <button class="btn '+ statusButtonClass + '" data-toggle="modal" data-target="#feeStatusModal' + serialNumber + '">' + statusButtonText + '  </button>\
            <div class="modal fade align-center modal-sm " id="feeStatusModal'+ serialNumber + '" >\
                                                <div class="modal-dialog modal-dialog-centered" role="document">\
                                                  <div class="modal-content ">\
                                                    <div class="modal-body">\
                                                      <p class="text-center ">Do you want to change status to '+ newStatusButtonText + '? </p>\
                                                      <div class="row d-flex justify-content-center">\
                                                          <div class="col-6 d-flex justify-content-center">\
                                                          <a href="<?= base_url(); ?>feeOps/feeStatus/'+ value['fee_head'] + '/' + newStatus + '"><button class="btn btn-success"> Yes </button>\</a>\
                                                          </div>\
                                                          <div class="col-6 d-flex justify-content-center"> <button data-dismiss="modal"class="btn btn-danger">No</button> </div>\
                                                      </div>\
                                                    </div>\
                                                  </div>\
                                                </div>\
                                            </div></td>\
                                            <td>\
                            <a href="" class="btn btn-primary edit_button" data-toggle="modal" data-target="#feeUpdateModal"><i class="bi bi-pencil"></i></a>\
                            ' + (value['status'] == 1 ? '<a href="<?= base_url() ?>feeManController/feeadd/' + value['fee_head'] + '"><button class="btn btn-info"><i class="bi bi-plus"></i></button></a>' : '<button class="btn btn-warning"><i class="bi bi-plus"></i></button>') + '\
                        </td>\
            </tr>'
                    );

                    // increacing the sl number
                    serialNumber++;
                });
            }



        });
    }

</script>