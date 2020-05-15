$(document).ready(function() {
    $(".deleteForm").click(function(e) {
        e.preventDefault();
        let name = $(this).data("name");
        let form = $(this).closest("form");
        swal({
            title: `Are you sure to delete ${name} contact ?`,
            text: "if you delete you cannot recall the data",
            icon: "warning",
            buttons: true,
            dangerMode: true
        }).then(willDelete => {
            if (willDelete) {
                form.submit();
            }
        });
    });
});
