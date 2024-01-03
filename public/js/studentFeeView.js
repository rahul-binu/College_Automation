$(document).ready(function () {

    $('#filterProgram').on('change', function () {
        //filter using the accadamic year value value
        var selectedProgramme = $(this).val();
         alert(selectedProgramme);
        $('tbody tr').each(function () {
            var programme = $(this).find('td:nth-child(4)').text().toLowerCase();
            if (programme.includes(selectedProgramme)) {
                $(this).show();
            } else {
                $(this).hide();
            }

        });
    });

    $('#filterAccadamicYear').on('input', function () {
        var accadamicYear = $(this).val();
        $('tbody tr').each(function () {
            var newaccadamicYear = $(this).find('td:nth-child(6)').text();
            if (newaccadamicYear.includes(accadamicYear)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });

    $('#filterAdmissionNumber').on('input', function () {
        var addmissionNumber = $(this).val();
        $('tbody tr').each(function () {
            var newAddmissionNumber = $(this).find('td:nth-child(2)').text();
            if (newAddmissionNumber.includes(addmissionNumber)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });

});

function induvidualDetailsPrint() {
    window.print();
}