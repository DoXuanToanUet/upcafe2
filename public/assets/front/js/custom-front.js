function validationError(msg){
    html = "<ul class='parsley-errors-list filled' id='parsley-id-7' style='color:red;'><li class='parsley-required'>"+msg+"</li></ul>";
    return html;
}

/*clear error message*/
function clearError(){
    $(".parsley-errors-list.filled").each(function(){
        $(this).empty();
    });
}
  
function displayError(data){
    var result = JSON.parse(data);
    for (var key in result) {
        if(result[key]){
            html = validationError(result[key]);
            $("#"+key+"Err").parent().append(html);
            $("input[name='"+key+"']").addClass('parsley-error');
            $("select[name='"+key+"']").addClass('parsley-error');
        } else {
            $("input[name='"+key+"']").removeClass('parsley-error');
            $("select[name='"+key+"']").removeClass('parsley-error');
        }
    }
}

$(document).ready(function() {
    $('.main-option').on('click', function(e) {
        $('#main-option').hide();
        $('#sub-option').show();
    });
    $('.sub-option').on('click', function(e) {
        $('#main-option').show();
        $('#sub-option').hide();
    });

    $('.setup-radio').on('click', function(e){
        $('.setup').hide();
        $('.setup-'+$(this).val()).show();
    });
});

function destroy(id, link, returnlink){
    var id = id;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: link,
        data: {
            'id': id
        },
        beforeSend: function () {
            $("#wait").css("display", "block");
        },
        complete: function () {
            $("#wait").css("display", "none");
        },
        success: function(data){
            location.href = returnlink;
        }, 
    });
}

$(document).on("submit", '#menu', function(event){
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: '/catering',
        data: new FormData(this),
        processData: false,
        contentType: false,
        beforeSend: function () {
            $("#wait").css("display", "block");
        },
        complete: function () {
            $("#wait").css("display", "none");
        },
        success: function(data){
            clearError();
            if(data=='success'){
                location.href = '/review';
            } else {
                displayError(data);
            }
        },
    });
});

$(document).on("submit", '#details', function(event){
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: '/details',
        data: new FormData(this),
        processData: false,
        contentType: false,
        beforeSend: function () {
            $("#wait").css("display", "block");
        },
        complete: function () {
            $("#wait").css("display", "none");
        },
        success: function(data){
            clearError();
            console.log(data);
            swal("Oops...", "An error occurred. Pleas try again.", "success");
            if(data=='success'){
                location.href = '/success';
            } else {
                displayError(data);
            }
        },
        error: function () {
            swal("Oops...", "An error occurred. Pleas try again.", "error");
        }
    });
});

$(document).on("submit", '#contact', function(event){
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: '/contact',
        data: new FormData(this),
        processData: false,
        contentType: false,
        beforeSend: function () {
            $("#wait").css("display", "block");
        },
        complete: function () {
            $("#wait").css("display", "none");
        },
        success: function(data){
            clearError();
            if(data=='success'){
                location.reload();
            } else {
                displayError(data);
            }
        },
    });
});

$(document).on("submit", '#editMenu', function(event){
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: '/edit-menu',
        data: new FormData(this),
        processData: false,
        contentType: false,
        beforeSend: function () {
            $("#wait").css("display", "block");
        },
        complete: function () {
            $("#wait").css("display", "none");
        },
        success: function(data){
            clearError();
            if(data=='success'){
                location.href = '/details';
            } else {
                displayError(data);
            }
        },
    });
});