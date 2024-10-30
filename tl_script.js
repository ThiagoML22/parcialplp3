function tl_rotarPropiedades() {
    const propiedades = document.querySelectorAll('.tl_propiedad');
    let index = 0;

    function mostrarPropiedad() {
        propiedades.forEach((prop, i) => {
            prop.style.display = i === index ? 'block' : 'none';
        });
        index = (index + 1) % propiedades.length;
    }

    mostrarPropiedad();
    setInterval(mostrarPropiedad, 4000);
}

document.addEventListener('DOMContentLoaded', tl_rotarPropiedades);
