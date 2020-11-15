<section class="forms">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card  custom-border-radius">
                    <!--                    <div class="card-header d-flex align-items-center">-->
                    <!--                        <h3 class="h4"><i class="fa fa-plus-square"></i> -->
                    <? //= $title ?><!--</h3>-->
                    <!--                    </div>-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label" for="subject">Asunto</label>
                                            <div class="col-sm-6">
                                                <input id="subject" type="text" name="subject" required=""
                                                       class="form-control" placeholder="Asunto ticket">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label">Categoria</label>
                                            <div class="col-sm-6 select">
                                                <select name="category" id="category_dd" class="form-control"
                                                        style="width: 100%">
                                                    <option value="null">Selecionar Categoria</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label">Asignar a</label>
                                            <div class="col-sm-6 select">
                                                <select name="assign_to" id="assign_to_dd" class="form-control">
                                                    <option value="null">Selecionar Nombre</option>                                                   
                                                </select>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label">Gravedad</label>
                                            <div class="col-sm-6 select">
                                                <select name="severity" id="severity_dd" class="form-control">
                                                    <option value="null">Seleccionar Gravedad</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label">Prioridad</label>
                                            <div class="col-sm-6 select">
                                                <select name="priority" id="priority_dd" class="form-control">
                                                    <option value="null">Seleccionar prioridad</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label">Asignar a</label>
                                            <div class="col-sm-6 select">
                                                <select name="cc[]" id="cc_dd" multiple="multiple">
                                                    <option value="null">Seleccionar Nombre</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label">Proposito</label>
                                            <div class="col-sm-6">
                                                <input id="purpose" type="text" name="purpose" required=""
                                                       class="form-control" placeholder="Proposito del ticket">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label">Descripcion</label>
                                            <div class="col-sm-6">
                                                <div id="message"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 form-control-label" for="fileInput"><i
                                                        class="fa fa-paperclip"></i> Adjuntar</label>
                                            <div class="col-sm-6">
                                                <div class="custom-file">
                                                    <input id="fileInput" type="file" class="custom-file-input">
                                                    <label class="custom-file-label" for="customFile">Seleccionar Archivo</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-12" id="file_submit_result" style="">
                                        </div>
                                        <input type="hidden" class="form-control" id="comp_upload_filename">
                                        <input type="hidden" class="form-control" id="file_submit_result_tbox">
                                    </div>
                                    <div class="row" style="margin-top: 1em;">
                                        <div class="offset-2 col-md-6">
                                            <ul id="attached_files">
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-8">
                                            <input type="submit" id="create_ticket" value="Create Ticket" name = "Crear Ticket"
                                                   class="btn btn-success pull-right">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 1em;">
                            <div class="col-md-12" id="result_create_ticket">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {

        var attached_files = [];

        //call a function to handle file upload on select file
        $('input[type=file]').on('change', function (e) {
            var res = fileUpload(e, BASE_URL + 'API/Ticket/upload_attachment', function (res) {
                console.log(res);
                if (res) {
                    attached_files.push(res);
                    var attached_link = getAttachmentLabel(res.file_name, res.path);
                    $('#attached_files').append('<li>' + attached_link + '<span class="remove-this" data-index="' + attached_files.length + '"><i class="fa fa-close"></i></span></li>');
                    removeAttachment();
                }
            });
        });


        var toolbarOptions = [
            [{'font': []}],
            [{'size': ['small', false, 'large', 'huge']}],  // custom dropdown
            [{'header': [1, 2, 3, 4, 5, 6, false]}],
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            ['blockquote', 'code-block'],
            [{'color': []}, {'background': []}],
            [{'align': []}],
            [{'list': 'ordered'}, {'list': 'bullet'}],
            [{'script': 'sub'}, {'script': 'super'}],      // superscript/subscript
            [{'indent': '-1'}, {'indent': '+1'}],          // outdent/indent
            [{'direction': 'rtl'}],                         // text direction
        ];

        var quill = new Quill('#message', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        });

        // create new ticket
        $("#create_ticket").on('click', function (a) {
            a.preventDefault();
            var purpose = $("#purpose").val();
            var subject = $("#subject").val();
            var message = quill.root.innerHTML
            var cc = ($("#cc_dd").val()).join(';');
            var severity = parseInt($("#severity_dd").val());
            var category = parseInt($("#category_dd").val());
            var data = {"attachments": attached_files}
            attached_files = [];
            var fdata = {
                'purpose': purpose,
                'subject': subject,
                'message': message,
                'severity': severity,
                'cc': cc,
                'category': category,
                'data': data
            }
            console.log(fdata);
            if (!purpose || !subject || !message) {
                showNotification('error', 'Please fill all fields.');
            } else {
                $.ajax({
                    type: 'POST',
                    url: BASE_URL + 'API/Ticket/create',
                    dataType: 'text',
                    data: {
                        'purpose': purpose,
                        'subject': subject,
                        'message': message,
                        'severity': severity,
                        'cc': cc,
                        'category': category,
                        'data': data
                    },

                    beforeSend: function () {
                        $("#result_create_ticket").html('<img src="' + BASE_URL + 'assets/img/loader.gif" class="pull-right" style="width: 30px;">');
                    },

                    success: function (response) {
                        console.log(response)
                        if (JSON.parse(response)['data']['result']) {
                            showNotification('Correcto', 'Ticket creado.', {}, function () {
                            });
                            window.location.href = "/tickets/view_ticket/" + JSON.parse(response)['data']['result'];
                        } else {
                            $('#attached_files').html('');
                            showNotification('Error', 'Ups, intentalo otra vez.');
                        }

                    }

                });
            }
        });
    });


    function removeAttachment() {
        $('.remove-this').on('click', function () {
            var index = parseInt($(this).attr('data-index'));
            let attached_files = $("#attached_files");
            attached_files.splice(index, 1);
            console.log(attached_files);
            $(this).parent().remove();
        });
    }
</script>