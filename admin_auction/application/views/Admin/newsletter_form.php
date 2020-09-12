<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.3/js.cookie.min.js"></script>
<div class="container">
    <h2>Modal Example</h2>
    <!-- Modal -->


    <div id="container">
        <button class="button clear-cookie">Clear Cookie</button>
    </div>

    <div class="modal fade" id="modal-content" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="yurEmail" class="control-label">Recipient:</label>
                            <input placeholder="example@email.com" class="form-control" id="yurEmail" name="email" type="email" value="">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default close2" data-dismiss="modal">Close</button>
                    <button id="newsletter" type="submit" class="btn btn-primary subscribed">Subscribe Button</button>
                </div>

            </div>
        </div>
    </div>

<script>
    // modal and cookie js
    $(".clear-cookie").on("click", function() {
        Cookies.remove('ModalShown');
        $(this).replaceWith("<p><em>Cookie cleared. Re-run demo</em></p>");
    });

    $(".subscribed,.close,.close2").on("click", function() {
        $('#modal-content').modal('hide');
        Cookies.set('ModalShown', 'yes', {  expires: 1});
        $(".clear-cookie").fadeIn();
        lastFocus.focus();
    });


    var lastFocus;
    var popupShown = Cookies.get('ModalShown');

    if (popupShown) {
        console.log("Cookie found. No action necessary");
        $(".clear-cookie").show();
    } else {
        console.log("No cookie found. Opening popup in 3 seconds");
        $(".clear-cookie").hide();
        setTimeout(function() {
            lastFocus = document.activeElement;
            $('#modal-content').modal('show');
            $("#yurEmail").focus();
        }, 3000);
    }

/// ajax post request
    $(document).ready(function () {

        $("#newsletter").click(function(e) {
            e.preventDefault();
            var email = $("#yurEmail").val();
            var post_url = "<?= site_url('newsletter/add_new/') ?>";
            $.ajax({
                type: "POST",
                url: post_url,
                data : {"email" : email},
                dataType: "json",
                success: function (data) {
                    console.log(data);
                }
            });

        });

    });

</script>
</div>