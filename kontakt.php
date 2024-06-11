<?php
  include ("header.php")
?>

    <!-- CONTACTS-1
			============================================= -->
    <section
      id="contacts-1"
      class="gr--snow inner-page-hero pb-60 contacts-section division"
    >
      <div class="container">
        <div class="row">
          <!-- CONTACTS INFO -->
          <div class="col-md-5 col-lg-6">
            <div class="contacts-info">
              <!-- Section ID -->
              <span class="section-id">Kontaktirajte nas</span>

              <!-- Title -->
              <h2 class="h2-title">
                Imate pitanja ili želite započeti suradnju?
              </h2>

              <!-- Text -->
              <p class="p-md">
                Ispunite kontakt formu i naš tim stručnjaka bit će vam na
                raspolaganju za pružanje podrške i rješavanje svih vaših potreba
                vezanih uz digitalni marketing.
              </p>

              <!-- Title -->
              <h6 class="h6-md">Potražite nas i na:</h6>

              <!-- Socials Links -->
              <ul class="contacts-info-socials ico-25">
                <li>
                  <a href="https://www.facebook.com/p/Digitalni-Dom-61556550296157" target="_blank"><span class="flaticon-facebook"></span></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/digitalnidom" target="_blank"><span class="flaticon-instagram"></span></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- END CONTACTS INFO -->

          <!-- CONTACT FORM -->
          <div class="col-md-7 col-lg-6">
            <div class="form-wrapper">
              <form name="contactform" class="row contact-form">
                <!-- Contact Form Input -->
                <div class="col-md-12">
                  <input
                    type="text"
                    name="name"
                    class="form-control name"
                    placeholder="Ime*"
                  />
                </div>

                <div class="col-md-12">
                  <input
                    type="text"
                    name="surname"
                    class="form-control surname"
                    placeholder="Prezime*"
                  />
                </div>

                <div class="col-md-12">
                  <input
                    type="email"
                    name="email"
                    class="form-control email"
                    placeholder="Email*"
                  />
                </div>

                <div class="col-md-12">
                  <input
                    type="number"
                    name="phone"
                    class="form-control website"
                    required
                    placeholder="Broj telefona*"
                  />
                </div>

                <div class="col-md-12">
                  <textarea
                    class="form-control message"
                    name="message"
                    rows="6"
                    placeholder="Postavite Vaše pitanje ovdje"
                  ></textarea>
                </div>

                <!-- Contact Form Button -->
                <div class="col-md-12 form-btn">
                  <button
                    type="submit"
                    class="btn btn--theme hover--theme submit"
                    onclick="sendMessage()"
                  >
                    Pošalji
                  </button>
                </div>

                <!-- Contact Form Message -->
                <div class="col-lg-12 contact-form-msg">
                  <span class="loading"></span>
                </div>
              </form>
              <!-- End contact-form -->
            </div>
            <!-- End form-wrapper -->
          </div>
          <!-- END CONTACT FORM -->
        </div>
        <!-- End row -->
      </div>
      <!-- End container -->
    </section>
    <!-- END CONTACTS-1 -->

    <!-- DIVIDER LINE -->
    <hr class="divider" />

    <!-- CONTACT BOXES
			============================================= -->
    <div class="pt-100 pb-70 contact-boxes division">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
          <!-- CONTACT BOX #1 -->
          <div class="contact-box ico-15">
            <a href="pocetna">
              <!-- Title -->
              <h5>Što sve radimo<span class="flaticon-next"></span></h5>

              <!-- Text -->
              <p>
                Saznajte više o svim uslugama digitalnog marketinga koje nudimo
                i ostvarite Vaš poslovni uspjeh
              </p>
            </a>
          </div>
          <!-- END CONTACT BOX #1 -->

          <!-- PRICING LINK -->
          <div class="contact-box ico-15">
            <a href="o-nama">
              <!-- Title -->
              <h5>O nama<span class="flaticon-next"></span></h5>

              <!-- Text -->
              <p>
                Upoznajte našu priču, misiju, vrijednosti i tim koji je posvećen
                Vašem uspjehu u digitalnom svijetu.
              </p>
            </a>
          </div>
          <!-- END PRICING LINK -->

          <!-- FAQs LINK -->
          <div class="contact-box ico-15">
            <a href="#">
              <!-- Title -->
              <h5>Imate li pitanja? <span class="flaticon-next"></span></h5>

              <!-- Text -->
              <p>
                Ukoliko imate pitanja vezanih za naše poslovanje ili želite
                saznati više, kontaktirajte nas već danas
              </p>
            </a>
          </div>
          <!-- END FAQs LINK -->
        </div>
        <!-- End row -->
      </div>
      <!-- End container -->
    </div>
    <!-- END CONTACT BOXES -->

    <!-- BANNER-1
			============================================= -->
    <section id="banner-1" class="banner-section">
      <div class="container">
        <!-- BANNER-1 WRAPPER -->
        <div class="banner-1-wrapper ba--01 bg--fixed r-16 block--shadow">
          <div class="banner-overlay">
            <div class="row d-flex align-items-center">
              <!-- BANNER-1 TEXT -->
              <div class="col-md-8 col-lg-7">
                <div class="banner-1-txt">
                  <!-- Title -->
                  <h4 class="h4-md">
                    Postanite jedan od<br />
                    naših zadovoljnih partnera
                  </h4>

                  <!-- Text -->
                  <p class="p-md">
                    Zatražite Vašu personaliziranu ponudu već danas
                  </p>

                  <!-- Button -->
                  <a
                    href="#"
                    class="btn btn-sm r-06 btn--theme hover--theme"
                    data-bs-toggle="modal"
                    data-bs-target="#modal-2"
                    >Kontaktirajte nas
                  </a>
                </div>
              </div>
              <!-- END BANNER-1 TEXT -->
            </div>
            <!-- End row -->
          </div>
          <!-- End banner overlay -->
        </div>
        <!-- END BANNER-1 WRAPPER -->
      </div>
      <!-- End container -->
    </section>

    <script>

  function validateForm() {
    var name = document.querySelector('input[name="name"]').value;
    var surname = document.querySelector('input[name="surname"]').value;
    var email = document.querySelector('input[name="email"]').value;
    var phone = document.querySelector('input[name="phone"]').value;

    return name && surname && email && phone;
  }

  function toggleButton() {
    var button = document.querySelector('.submit');
    button.disabled = !validateForm();
  }

  document.querySelectorAll('input, textarea').forEach(function(element) {
    element.addEventListener('input', toggleButton);
  });

  function sendMessage() {
    if (!validateForm()) return;

    var name = document.querySelector('input[name="name"]').value;
    var surname = document.querySelector('input[name="surname"]').value;
    var email = document.querySelector('input[name="email"]').value;
    var phone = document.querySelector('input[name="phone"]').value;
    var message = document.querySelector('textarea[name="message"]').value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "https://digitalnidom-server.up.railway.app/kontakt", true);
    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        alert("Message sent successfully!");
      }
    };

    var data = {
      checkbox: true,
      email: email,
      ime: name,
      prezime: surname,
      telefon: phone,
      textarea: message,
      web: "digitalnidom.com",
    };
    

    console.log(JSON.stringify(data))
    xhr.send(JSON.stringify(data));
  }

  // Initial call to set button state
  toggleButton();
</script>

<?php
  include ("footer.php")
?>
