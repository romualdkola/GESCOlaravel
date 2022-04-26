function showRecord(link){
    $.ajax({
        url: URL,
        type:"GET",
        success: function(html){
            $("#modal").html(html);
            $("#modal div.modal").modal('modal');

            var type = html.type;
            var message = html.message;
            switch(type){
                case 'info':
                    Swal.fire(message, "", "info");
                    break;
                case 'warning':
                    Swal.fire("Attention!", message, "warning");
                    break;
                case 'success':
                    Swal.fire(message, "", "success");
                    break;
                case 'error':
                    Swal.fire("Attention!", message, "error");
                    break;
            }
        },
        error: function(xhr, status, error) {
            swal("Attention!", error, "error");
        }
    });
}