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
                <div class="contact-form">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="text-black" for="firstName">Prénom</label>
                                <input type="text" class="form-control" id="firstName">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="text-black" for="lastName">Nom</label>
                                <input type="text" class="form-control" name='lastName' id="lastName">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="text-black" for="phone-number">Numéro de téléphone</label>
                        <input type="text" class="form-control" id="phone-number">
                    </div>
                    <div class="mb-3">
                        <label class="text-black" for="email">Adresse courriel</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label class="text-black" for="message">Message</label>
                        <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" id="sendButton">Envoyer</button>
                </div>
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

    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
              <div type="button" class="btn-close icon-close2" data-bs-dismiss="modal" aria-label="Close"></div>
            </div>
            <div class="modal-body" id="messageText">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
      </div>

    <script>
        jQuery(document).ready(function() {

            jQuery('#sendButton').click(function(e) {
                e.preventDefault();

                var lastName = jQuery('#lastName').val();
                console.log(lastName);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                jQuery.ajax({
                    url: "{{ url('/message') }}",
                    method: 'post',
                    data: {
                        'lastName' : lastName,
                    },
                    success: function(result) {
                        $("#messageText").text(result.message);

                        var myModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
                        myModal.show();
                    }
                });
            });

        });
    </script>
