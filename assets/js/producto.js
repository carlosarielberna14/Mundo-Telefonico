$(document).ready(function() {
    $("#btnCompra").click(function(e) {
        e.preventDefault();
        buscarProducto();

    });


    async function buscarProducto() {
        const datos = new FormData(document.getElementById('producto'));

        await fetch('assets/data/producto.php', {
                method: 'POST',
                body: datos
            })
            .then(response => response.json())
            .then(response => {
                //console.log(response.datos);
                if (response.dato == 'ok') {
                    location.href = "principal.php";
                } else {
                    alert("Datos incorrectos :(");
                }
            })
            .catch(err => {
                console.log(err);
            });
    }
});