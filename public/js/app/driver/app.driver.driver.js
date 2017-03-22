$(document).ready(function() {

    $("#flash_message").css("display", "none");

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var user_member_details_table = $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        "paging": true,
        "lengthMenu": [50, 100],
        pagingType: "simple_numbers",
        ajax: url + "/driver/listDrivers",
        columns: [ {
            data: 'name',
            width: "20%",
            name: 'name',
            "searchable": true,
            "orderable": false,
        }, {
            data: 'address',
            name: 'address',
            "searchable": false,

        }, {
            data: 'age',
            name: 'age',
            "searchable": true,
            "orderable": false,
        },  {
            data: null,
            className: "center",
            "searchable": false,
            "orderable": false,
            render: function(data, type, row) {
                return '<button type="button" class="btn btn-warning btn-edit-memship" data-toggle="modal" id=' + data.id + ' data-target="#myModal">Edit</button>   '+
                '<button type="button" class="btn btn-danger btn-edit-memship" data-toggle="modal" id= "delete"' + data.id + ' data-target="#myModal">Delete</button>'
            },
            //defaultContent: '<button type="button" class="btn btn-warning btn-view-pdf" data-toggle="modal" id='+data.firstname+' data-target="#myModal">Edit</button>'
        }]
    });

    $(document).on("click", ".btn-edit-memship", function(e) { //user click on edit button
        e.preventDefault();
        driverId = $(this).attr("id");
        $.ajax({
            type: "POST",
            url: url + "/driver/details",
            data: {
                "id": driverId,
            },
        }).done(function(driver) {

           
            $("#driver_id").val(driver.id);

            if (driver.name != null && driver.name != "") {
                $("#driver_name").val(driver.name);
            } else {
                $("#driver_name").val("");
            }
            if (driver.address != null && driver.address != "") {
                $("#driver_address").val(driver.address);
            } else {
                $("#driver_address").val("");
            }
            if (driver.age != null && driver.age != "") {
                $("#driver_age").val(driver.age);
            } else {
                $("#driver_age").val("");
            }
            
        });

    });

    $(document).on("click", "#driver_submit", function(e) { //user click on submit button
        e.preventDefault();
        id = $("#driver_id").val();
        name = $("#driver_name").val();
        address = $("#driver_address").val();
        age = $("#driver_age").val();
        $.ajax({
            type: "POST",
            url: url + "/driver/save",
            data: {
                "driver_uid": id,
                "driver_name": name,
                "driver_address": address,
                "driver_age": age,
                
            },
        }).done(function(success) {
            $('#myModal').modal('toggle');
            $("#flash_message").css("display", "block");
            if (success == "true") {
                $("#flash_message").html("Driver details updated successfully");
                $("#flash_message").addClass("alert-success");
                $("#flash_message").show().delay(5000).fadeOut();
                //$('#users-table').DataTable().ajax.reload();
                user_member_details_table.draw("full-hold");
            } else {
                $("#flash_message").html("Sorry! ,Driver details could not updated successfully");
                $("#flash_message").addClass("alert-danger");
                $("#flash_message").show().delay(5000).fadeOut();
            }

        });

    });

});