<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Contact</h2>
      <h3>Get In Touch With Us</h3>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="info-box mb-4">
          <i class="fa fa-map-marker"></i>
          <h3>Address</h3>
          <p>No: 57 Lloyd's Ave,</p>
          <p> Batticaloa 30000, Sri Lanka.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="info-box  mb-4">
          <i class="fa fa-envelope"></i>
          <h3>Email</h3>
          <p>contact@spmlk.tech</p><br>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="info-box  mb-4">
          <i class="fa fa-phone"></i>
          <h3>Phone</h3>
          <p>+94652226302</p>
          <p>+94740164545</p>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col-lg-6 ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.4260972049717!2d81.7106176291911!3d7.714833999652438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afacd2f95e12af3%3A0xbcee82236f1337cc!2sTrash%20for%20Trade!5e0!3m2!1sen!2slk!4v1602701178866!5m2!1sen!2slk" width="100%" height="365" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

      <div class="col-lg-6">
        <form id="contactForm" action="https://docs.google.com/forms/u/3/d/e/1FAIpQLSdNBT5FZx4KEwodIROZAaql-KHt8LwsFLiKWlyjFkCOKZ4v6Q/formResponse" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" class="form-control" id="name" placeholder="Your Name" name="entry.1275904674" required />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" id="email" placeholder="Your Email" name="entry.243108877" required />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="subject" placeholder="Subject" name="entry.1317536802" required />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="5" id="message" name="entry.149055788" placeholder="Message" required></textarea>
            <div class="validate"></div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
        
        <script>
          document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("contactForm");

            form.addEventListener("submit", function(event) {
              event.preventDefault(); 
              const formData = new FormData(this);
              const url = this.action;

              fetch(url, {
                  method: "POST",
                  body: formData,
                  mode: "no-cors" 
                })
                .then(response => {
                  console.log("Form submission successful!");
                  showConfirmation();
                })
                .catch(error => {
                  console.error("Error submitting form:", error);
                });
            });
            function showConfirmation() {
              var res = confirm("Thank you for your message. \n\nWe will respond to you as soon as possible. \n\nKind regards, \nTrash For SPM Eco");
              if (res == true) {
                window.location.reload();
              }
            }
          });
        </script>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->