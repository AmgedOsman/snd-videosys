            $(function () {
                $(".dropdown-menu li a").click(function () {
                    var text = $(this).html();
                    var htmlText = text + ' <span class="caret"></span>';
                    $(this).closest('.dropdown').find('.dropdown-toggle').html(htmlText);

                });

            });

            function upload_image() {
                var bar = $('#progress-bar');
                var percent = $('#progress-bar');
                $('form').ajaxForm({
                    beforeSubmit: function () {
                        document.getElementById("progress-bar");
                        var percentVal = '0%';
                        bar.width(percentVal)
                        percent.html(percentVal);
                    },

                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentVal = percentComplete + '%';
                        bar.width(percentVal)
                        percent.html(percentVal);
                    },

                    success: function () {
                        var percentVal = '100%';
                        bar.width(percentVal)
                        percent.html(percentVal);
                    },

                    complete: function (xhr) {
                        if (xhr.responseText) {
                            $('#upload').modal('show');
                            setTimeout(function () {
                                location.reload();
                            }, 3000);
                        }
                    }
                });
            }   