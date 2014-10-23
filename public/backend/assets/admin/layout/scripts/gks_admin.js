var Admin = function() {
    var handleAjaxSubmit = function() {
        $(".ajax-submit").submit(function(event) {
            event.preventDefault();
            Admin.ClearJsMessage();
            var $form = $(this),
                    data = $form.serialize(),
                    url = $form.attr("action");
            _method = $form.find('input[name="_method"]').val();
            Metronic.blockUI({target: ".content", iconOnly: true});
            var request = $.ajax({
                url: url,
                type: "POST",
                data: data,
                dataType: "json"
            });
            request.done(function(data) {
                $(".msg").html('');
                $(".has-error").removeClass('has-error');
                if (data.fail) {
                    $.each(data.errors, function(index, value) {
                        row = $("input[name='" + index + "']").closest("div.form-group");
                        if (!row.length) {
                            row = $("select[name='" + index + "']").closest("div.form-group");
                        }
                        row.addClass("has-error");
                        row.find(".msg").html("<span class='help-inline'>" + value + "</span>");
                    });
                }//has error
                if (data.success) {
                    Admin.ShowSuccess(data.message);
                    if (_method !== 'PUT')
                        $form[0].reset();
                } //success
            }); //done
            request.always(function() {
                Metronic.unblockUI(".content");
            });
            request.fail(function() {
                alert("error");
            });
        });
    };
    // Handle Select2 Dropdowns
    var handleShowMessage = function(message, type) {
        html = '<div class="col-md-12"><div class="alert alert-' + type + ' alert-dismissable">';
        html += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>';
        html += message;
        html += '</div></div>';
        //Container = jQuery('#alert_' + $type).find("div.alert-" + $type);
        //Container.children('span').html(message);
        Contaner = $("#js_message");
        Contaner.html(html);
        return Contaner;
    };
    return {
        init: function() {
            handleAjaxSubmit();
        },
        ShowError: function($msg) {
            el = handleShowMessage($msg, 'danger');
            Metronic.scrollTop();
            return h;
        },
        ShowSuccess: function($msg) {
            el = handleShowMessage($msg, 'success');
            //Metronic.scrollTo(el, 50);
            Metronic.scrollTop();
        },
        ShowInfo: function($msg) {
            h = handleShowMessage($msg, 'info');
            Metronic.scrollTo(el, 50);
            return h;
        },
        ShowWarning: function($msg) {
            h = handleShowMessage($msg, 'warning');
            Metronic.scrollTo(el, 50);
            return h;
        },
        ClearJsMessage: function($msg) {
            $("#js_message").html('');
        }
    }
}();