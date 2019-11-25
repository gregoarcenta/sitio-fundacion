<?php
  include 'templates/navegacion.php'
?>
     <section class="header-demas">
              <div class="header-demas-fondo">
                 <div class="container h-100">
                      <div class="row justify-content-center  align-items-end h-100">
                        <div class="col-12 col-md-8 mb-5">
                              <h1 class="text-center">Contáctanos</h1>
                        </div>
                     </div>
               </div>
              </div>
        </section>
   
           <div class="container my-5 pb-5">
                  <div class="row justify-content-between">
                    <div class="col-lg-4 d-none d-lg-block mt-5">
                        <div class=" slide-contacto text-center p-4">
                          <h3>Contáctate con Nosotros</h3>
                          <p class="mt-3">Queremos saber de ti, completa tus datos en el siguiente formulario y nos contactaremos contigo.</p>
                        </div>
                    </div>
                          <main class="col-lg-8">
                              <h2 class="d-block d-md-none text-uppercase text-center">
                                  Contacto
                              </h2>
                              <form class="p-5 mt-5 formulario-contacto needs-validation" novalidate>
                                    <div class="form-group">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" placeholder="Tu Nombre" required>
                                        <div class="invalid-feedback">
                                           El nombre es obligatorio
                                        </div>
                                        <div class="valid-feedback">
                                          Correcto
                                       </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="number">Teléfono Celular:</label>
                                      <input type="number" class="form-control" id="number" placeholder="Tu Telefono Celular" required>
                                      <div class="invalid-feedback">
                                        El Telefono es obligatorio
                                     </div>
                                     <div class="valid-feedback">
                                       Correcto
                                    </div>
                                  </div>
                                    <div class="form-group">
                                      <label for="email">E-Mail:</label>
                                      <input type="email" class="form-control" id="email" placeholder="Tu Correo" required>
                                      <div class="invalid-feedback">
                                        El correo es obligatorio
                                     </div>
                                     <div class="valid-feedback">
                                       Correcto
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="mensaje">Mensaje:</label>
                                    <textarea id="mensaje" class="form-control"  required></textarea>
                                    <div class="invalid-feedback">
                                      El mensaje es obligatorio
                                   </div>
                                   <div class="valid-feedback">
                                     Correcto
                                  </div>
                                </div>
                                <input type="submit" class="btn btn-warning text-uppercase" value="Enviar">
                              </form>
                          </main>
          
                  </div>
              </div>     
<?php
    include 'templates/footer.php'
?>