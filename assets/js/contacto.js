$(document).ready(function() {
    $("#btnComentarios").click(function(e) {
        e.preventDefault();

        var nombre = $("#nombre").val().trim();
        var correo = $("#correo").val().trim();
        var asunto = $("#asunto").val().trim();
        var mensaje = $("#mensaje").val().trim();

        console.log(nombre + " " + correo + " " + asunto + " " + mensaje + " ");

        mostrarDato();
    }); //end #btnRegistrar

    async function mostrarDato() {
        const datos = new FormData(document.getElementById('contacto2'));

        await fetch('assets/data/contacto.php', {
                method: 'POST',
                body: datos
            })
            .then(response => response.json())
            .then(response => {
                if (response.dato == 'ok') {
                    location.href = "principal.php";
                } else {
                    alert("ERROR EN LOS DATOS");
                }
            })
            .catch(err => {
                console.log(err);
            });
    } //end mostrarDato
});