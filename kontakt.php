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
    <div class="pt-100 contact-boxes division">
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

      <!-- TESTIMONIALS-2
			============================================= -->
      <section id="reviews-2" class="pt-90 reviews-section division">
        <div class="container"> 
          <!-- SECTION TITLE -->
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
              <div class="section-title mb-70">
                <!-- Title -->
                <h2 class="h2-xl">Naši zadovoljni klijenti</h2>

                <!-- Text -->
                <p class="p-xl">
                  Pročitajte što naši klijenti imaju za reći o nama.
                </p>
              </div>
            </div>
          </div>

          <!-- TESTIMONIALS CAROUSEL -->
          <div class="row">
            <div class="col">
              <div class="owl-carousel owl-theme reviews-carousel">
                <!-- TESTIMONIAL #1 -->
                <div class="review-2">
                  <!-- Rating -->
                  <div class="review-rating ico-15 color--yellow">
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                  </div>

                  <!-- Text -->
                  <div class="review-2-txt">
                    <h5>Revolucionirali našu online prisutnost</h5>

                    <!-- Text -->
                    <p>
                      &quot;Naša suradnja s Digitalnim Domom potpuno je
                      transformirala našu online prisutnost, rezultirajući
                      značajnim povećanjem prometa i prodaje.&quot;
                    </p>
                  </div>

                  <!-- Author -->
                  <div class="review-author">
                    <h6>Dominik Vincetić</h6>
                    <p class="p-sm">Vlasnik građevinskog obrta</p>
                  </div>
                </div>
                <!-- END TESTIMONIAL #1 -->

                <!-- TESTIMONIAL #2 -->
                <div class="review-2">
                  <!-- Rating -->
                  <div class="review-rating ico-15 color--yellow">
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                  </div>

                  <!-- Text -->
                  <div class="review-2-txt">
                    <h5>Personalizirani pristup koji isporučuje</h5>

                    <!-- Text -->
                    <p>
                      &quot;Digitalni Dom pristupio je našem projektu s
                      individualiziranom strategijom koja je odgovarala našim
                      specifičnim potrebama, rezultirajući povećanjem
                      prodaje&quot;
                    </p>
                  </div>

                  <!-- Author -->
                  <div class="review-author">
                    <h6>Manuela Kasun</h6>
                    <p class="p-sm">Vlasnica restorana</p>
                  </div>
                </div>
                <!-- END TESTIMONIAL #2 -->

                <!-- TESTIMONIAL #3 -->
                <div class="review-2">
                  <!-- Rating -->
                  <div class="review-rating ico-15 color--yellow">
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                  </div>

                  <!-- Text -->
                  <div class="review-2-txt">
                    <h5>Stručnost koja donosi rezultate</h5>

                    <!-- Text -->
                    <p>
                      &quot;Zahvaljujući stručnosti Digitalnog Doma, uspjeli smo
                      postići vidljivost našeg brenda na globalnoj razini,
                      dosežući nove kupce i povećavajući prihode. &quot;
                    </p>
                  </div>

                  <!-- Author -->
                  <div class="review-author">
                    <h6>Franjo Tomčić</h6>
                    <p class="p-sm">Direktor marketinga IT firme</p>
                  </div>
                </div>
                <!-- END TESTIMONIAL #3 -->

                <!-- TESTIMONIAL #4 -->
                <div class="review-2">
                  <!-- Rating -->
                  <div class="review-rating ico-15 color--yellow">
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                  </div>

                  <!-- Text -->
                  <div class="review-2-txt">
                    <h5>Odgovorna podrška i vođenje</h5>

                    <!-- Text -->
                    <p>
                      &quot;Digitalni Dom pružio nam je iznimnu podršku tijekom
                      cijelog procesa, nudeći nam savjete i smjernice koji su nam
                      pomogli da postignemo željene rezultate.&quot;
                    </p>
                  </div>

                  <!-- Author -->
                  <div class="review-author">
                    <h6>Ena Vlašić</h6>
                    <p class="p-sm">Voditeljica marketinga turističke agencije</p>
                  </div>
                </div>
                <!-- END TESTIMONIAL #4 -->

                <!-- TESTIMONIAL #5 -->
                <div class="review-2">
                  <!-- Rating -->
                  <div class="review-rating ico-15 color--yellow">
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                  </div>

                  <!-- Text -->
                  <div class="review-2-txt">
                    <h5>Postigli Smo Izvanredne Rezultate</h5>

                    <!-- Text -->
                    <p>
                      &quot;Zahvaljujući Digitalnom Domu, naša kampanja postigla
                      je izvanredne rezultate, vidljivo povećavajući našu
                      prisutnost na tržištu i generirajući značajne prihode.&quot;
                    </p>
                  </div>

                  <!-- Author -->
                  <div class="review-author">
                    <h6>Frane Brož</h6>
                    <p class="p-sm">Vlasnik obrta za hortikulturu</p>
                  </div>
                </div>
                <!-- END TESTIMONIAL #5 -->

                <!-- TESTIMONIAL #6 -->
                <div class="review-2">
                  <!-- Rating -->
                  <div class="review-rating ico-15 color--yellow">
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                  </div>

                  <!-- Text -->
                  <div class="review-2-txt">
                    <h5>Profesionalna i Efikasna Suradnja</h5>

                    <!-- Text -->
                    <p>
                      &quot;Suradnja s Digitalnim Domom bila je iznimno
                      profesionalna i efikasna, pružajući nam potrebnu podršku i
                      vođenje za uspješno vođenje marketinških kampanja&quot;
                    </p>
                  </div>

                  <!-- Author -->
                  <div class="review-author">
                    <h6>Antonela Pavletić</h6>
                    <p class="p-sm">Voditeljica marketinga konzulting firme</p>
                  </div>
                </div>
                <!-- END TESTIMONIAL #6 -->

                <!-- TESTIMONIAL #7 -->
                <div class="review-2">
                  <!-- Rating -->
                  <div class="review-rating ico-15 color--yellow">
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                    <span class="flaticon-star"></span>
                  </div>

                  <!-- Text -->
                  <div class="review-2-txt">
                    <h5>Pouzdan Partner za Digitalni Rast</h5>

                    <!-- Text -->
                    <p>
                      &quot;Digitalni Dom pokazao se kao pouzdan partner za naš
                      digitalni rast, pružajući nam stručnost i resurse potrebne
                      za uspješno vođenje online strategija.&quot;
                    </p>
                  </div>

                  <!-- Author -->
                  <div class="review-author">
                    <h6>Karlo Čupić</h6>
                    <p class="p-sm">Direktor marketinga e-trgovine</p>
                  </div>
                </div>
                <!-- END TESTIMONIAL #7 -->
              </div>
            </div>
          </div>
          <!-- END TESTIMONIALS CAROUSEL -->
        </div>
        <!-- End container -->
      </section>
      <!-- END TESTIMONIALS-2 -->

    <!-- BANNER-1
			============================================= -->
    <section id="banner-1" class="pt-100 banner-section">
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
