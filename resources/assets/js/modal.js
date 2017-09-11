$(document).ready(function () {
    // Show the Modal on load
    $("#myModal").modal("show");
    $('#myModal').on('hidden.bs.modal', function () {
        $('#myModal').modal('show');
    });
});

$(document).ready(function () {

    $("#quizModal").modal("show");

});


    $('.carousel').carousel()

