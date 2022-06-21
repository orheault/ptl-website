@section('contact_section')

    <div class="container py-5 " id="contact-section">
        <div class="row mb-5">
            <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                <div class="heading-wrap">
                    <h2 class="heading">Nous Joindre</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <form class="contact-form needs-validation" id="contact-form">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="text-black" for="firstName">Prénom</label>
                                <input type="text" class="form-control" id="firstName">
                                <span class="text-danger" id="firstName-error"></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="text-black" for="lastName">Nom</label>
                                <input type="text" class="form-control" name='lastName' id="lastName">
                                <span class="text-danger" id="lastName-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-black" for="phoneNumber">Numéro de téléphone</label>
                        <input type="text" class="form-control" id="phoneNumber">
                    </div>
                    <div class="mb-3">
                        <label class="text-black" for="email">Adresse courriel</label>
                        <input type="email" class="form-control" id="email">
                        <span class="text-danger" id="email-error"></span>
                    </div>
                    <div class="mb-3">
                        <label class="text-black" for="message">Message</label>
                        <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
                        <span class="text-danger" id="message-error"></span>
                    </div>
                    <button class="btn btn-primary" id="sendButton">Envoyer</button>
                </form>
            </div>
            <div class="col-lg-5 ml-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="quick-contact-item d-flex align-items-center mb-4">
                    <span class="icon-home"></span>
                    <address class="text">
                        Drummondville, Canada
                    </address>
                </div>
                <div class="quick-contact-item d-flex align-items-center mb-4">
                    <span class="icon-phone"></span>
                    <address class="text">
                        +1 (819) 740-7436
                    </address>
                </div>
                <div class="quick-contact-item d-flex align-items-center mb-4">
                    <span class="icon-envelope"></span>
                    <address class="text">
                        info@ptl-system.com
                    </address>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                    <div type="button" class="btn-close icon-close2" data-bs-dismiss="modal" aria-label="Close"></div>
                </div>
                <div class="modal-body" id="messageText">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        jQuery(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#contact-form').on('submit', function(event) {
                event.preventDefault();
                $( "#sendButton" ).prop( "disabled", true );

                $('#firstName-error').text('');
                $('#lastName-error').text('');
                $('#message-error').text('');
                $('#email-error').text('');
                
                var firstName = $('#firstName').val();
                var lastName = $('#lastName').val();
                var message = $('#message').val();
                var email = $('#email').val();
                var phoneNumber = $('#phoneNumber').val();

                $.ajax({
                    url: "/contact-form",
                    type: "POST",
                    data: {
                        firstName: firstName,
                        lastName: lastName,
                        message: message,
                        email: email,
                        phoneNumber: phoneNumber,
                    },
                    success: function(response) {
                        console.log(response);
                        if (response) {
                            $("#contact-form")[0].reset();
                            $("#messageText").text(response.message);
                            $( "#sendButton" ).prop( "disabled", false );
                            
                            var myModal = new bootstrap.Modal(document.getElementById(
                                'confirmationModal'));
                            myModal.show();
                        }
                    },
                    error: function(response) {
                        console.log("error reponse:");
                        console.log(response);
                        $( "#sendButton" ).prop( "disabled", false );
                        $('#firstName-error').text(response.responseJSON.errors.firstName);
                        $('#lastName-error').text(response.responseJSON.errors.lastName);
                        $('#message-error').text(response.responseJSON.errors.message);
                        $('#email-error').text(response.responseJSON.errors.email);
                    }
                });
            });
        });
    </script>
