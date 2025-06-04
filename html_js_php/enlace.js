 document.getElementById("miFormulario").addEventListener("submit", async function (e) {
      e.preventDefault();

      const nombre = document.getElementById("nombre").value;
      const edad = document.getElementById("edad").value;

      const datos = {
        nombre,
        edad: parseInt(edad),
      };

      try {
        const response = await fetch("procesar.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(datos),
        });

        const resultado = await response.json();
        document.getElementById("respuesta").innerText = resultado.mensaje;
        if (resultado.status=="ok") {
             alert(resultado.mensaje);     
        }
       
      } catch (error) {
        document.getElementById("respuesta").innerText = "Error al enviar los datos.";
        console.error(error);
      }
    });