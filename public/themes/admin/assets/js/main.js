(function($) {
    "use strict"

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Disable Button on Submit Form.

    $(document).on('submit', 'form', function(e) {
        var submitBtn = $(this).find('button[type="submit"]')

        submitBtn.addClass('disabled')
        submitBtn.css('pointer-events', 'none')
        submitBtn.html('<i class="fa fa-circle-notch fa-spin mr-0"></i>')
    })

    // Sweet Alert

    $(document).on('click', 'button[data-action="destroy"]', function(e) {
        var url = $(this).attr('data-url')

        Swal.fire({
            icon: 'warning',
            title: 'Are you sure?',
            text: 'Are you sure you want to delete this item?',
            showCancelButton: true
        }).then((result) => {
            if(result.value) {
                $.ajax({
                    url: url, 
                    method: 'DELETE', 
                    success: function(result){
                        Swal.fire({
                            icon: 'success',
                            title: 'Congratulations!',
                            text: 'Deleted item successfully?',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true
                        }).then(() => window.location.reload())
                    },
                    error: function(result){
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops!',
                            text: 'Some thing went wrong.',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true
                        }).then(() => window.location.reload())                      
                    }
                });
            }
        })
    })

    // Auto Generate Slug

    $(document).on('input', 'input[data-action="slugify"]', function() {
        var value = $(this).val()
        $('input[name="slug"]').val(slugify(value))
    })

    function slugify (str) {
        str = str.replace(/^\s+|\s+$/g, ''); // trim
        str = str.toLowerCase();
      
        // remove accents, swap ñ for n, etclắm
        var from = "đàáäâấầắèéëêẹệìíïîòóöốồơớôủữưùúüûñç·/_,:;";
        var to   = "daaaaaaaeeeeeeiiiioooooooouuuuuunc------";
        for (var i=0, l=from.length ; i<l ; i++) {
            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
        }
    
        str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
            .replace(/\s+/g, '-') // collapse whitespace and replace by -
            .replace(/-+/g, '-'); // collapse dashes
    
        return str;
    }    

    // Color Picker Input
    $('.colorpicker').spectrum({preferredFormat: 'hex'})
})(jQuery);