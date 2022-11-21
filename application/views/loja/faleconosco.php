<section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">Fale Conosco</h1>
          </div>
        </div>

        <div class="row gy-4">

          <div class="col-md-4">
            <div class="info-item">
              <i class="bi bi-geo-alt"></i>
              <h3>Endereço</h3>
              <address>Rua da Dificuldae 8-97, CEP 17011-887 Bauru-SP</address>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-4">
            <div class="info-item info-item-borders">
              <i class="bi bi-phone"></i>
              <h3>Telefoner</h3>
              <p><a href="tel:+01432429282">(014) 3242-9282</a></p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-4">
            <div class="info-item">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">faleconosco@padariadobarba.com.br</a></p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="form mt-5">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Carregando...</div>
              <div class="error-message"></div>
              <div class="sent-message">Sua mensagem foi enviado com sucesso. Obrigado!</div>
            </div>
            <div class="text-center"><button type="submit">Enviar</button></div>
          </form>
        </div><!-- End Contact Form -->

      </div>
    </section>