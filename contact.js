
document.addEventListener("DOMContentLoaded", function () {
 
    //Remplazar con mi propio usuario.
    emailjs.init("-6cMJBOviHkGei8gT"); // Cristian Ninotti
  
    // Captura el formulario
    const form = document.querySelector("form");
  
    form.addEventListener("submit", function (e) {
      e.preventDefault();
  
     // Usa el template // Service_ID //  //Template ID// de Cristian Ninotti
      emailjs.sendForm("service_qf8i4nj", "template_y8n8e76", form) 
        .then(() => {
          alert("Mensaje enviado con éxito");
          form.reset();
        })
        .catch((error) => {
          console.error("Error al enviar mensaje:", error);
          alert("Ocurrió un error al enviar el mensaje");
        });
    });
  });
  