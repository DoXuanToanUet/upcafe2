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
  
$(document).on("click", ".new-banner-modal", function () {
    var page = $(this).data('page');
    $('.banner-modal #page').val(page);
});
  
//banner
$(document).on("submit", '#banner', function(event){
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: '/admin/banner',
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

$(document).on("click", ".edit-testimonial", function () {
    var name = $(this).data('name');
    var content = $(this).data('content');
    var id = $(this).data('id');
    $('.edit-testimonial-modal #name').val(name);
    $('.edit-testimonial-modal #content').val(content);
    $('.edit-testimonial-modal #id').val(id);
});

$(document).on("submit", '#testimonial', function(event){
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: '/admin/testimonial',
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

$(document).on("submit", '#editTestimonial', function(event){
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: '/admin/testimonial/edit',
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

$(document).on("submit", '#cafeMenu', function(event){
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: '/admin/cafe',
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

$(document).on("submit", '#site', function(event){
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: '/admin/site-settings',
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

$(document).on("click", ".add-catering", function () {
    var parent = $(this).data('parent');
    $('.catering-modal #parent').val(parent);
});

$(document).on("submit", '#catering', function(event){
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: '/admin/catering/menu',
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

$(document).on('change', '.price_on_request', function (event) {
    $(event.target).closest('form').find('input[name="price"]').prop('disabled', $(event.target).prop('checked'));
});

$(document).on("click", ".edit-catering", function () {
    var parent = $(this).data('parent');
    var name = $(this).data('name');
    var content = $(this).data('content');
    var group = $(this).data('group');
    var price = $(this).data('price');
    var id = $(this).data('id');
    var vegetarian = $(this).data('vegetarian');
    var gluten = $(this).data('gluten');
    var vegan = $(this).data('vegan');

    $('.edit-catering-modal #parent').val(parent);
    $('.edit-catering-modal #name').val(name);
    $('.edit-catering-modal #group').val(group);
    if (price == '-1') {
        $('.edit-catering-modal #price_on_request').prop('checked', true);
        $('.edit-catering-modal #price').prop('disabled', true);
    } else {
        $('.edit-catering-modal #price').val(price);
    }
    $('.edit-catering-modal #id').val(id);

    if(vegetarian){
        $('.edit-catering-modal #vegetarian').prop('checked', true);
    }

    if(gluten){
        $('.edit-catering-modal #gluten').prop('checked', true);
    }

    if(vegan){
        $('.edit-catering-modal #vegan').prop('checked', true);
    }

    if (window.editor.state === undefined) {
        ClassicEditor.create(document.querySelector('#content'))
            .then(editor => {
                window.editor = editor;
                editor.setData(content)});
    }
});

$(document).on("submit", '#editCatering', function(event){
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: '/admin/catering/edit',
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