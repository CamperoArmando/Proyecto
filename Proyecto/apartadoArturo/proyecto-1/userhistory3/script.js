function registrarVenta() {
    const montoInput = document.getElementById('monto');
    const monto = parseFloat(montoInput.value);

    if (!isNaN(monto) && monto > 0) {
        const fecha = new Date().toISOString().split('T')[0]; // Obtener la fecha en formato yyyy-mm-dd
        let ingresos = JSON.parse(localStorage.getItem('ingresos')) || {};
        if (!ingresos[fecha]) {
            ingresos[fecha] = 0;
        }
        ingresos[fecha] += monto;
        localStorage.setItem('ingresos', JSON.stringify(ingresos));

        montoInput.value = '';
        alert('Venta registrada con éxito.');
    } else {
        alert('Monto no válido.');
    }
}

function mostrarIngresos() {
    const resultadosDiv = document.getElementById('resultados');
    const ingresos = JSON.parse(localStorage.getItem('ingresos')) || {};
    const fecha = new Date().toISOString().split('T')[0]; // Obtener la fecha en formato yyyy-mm-dd
    const ingresosDelDia = ingresos[fecha] || 0;

    resultadosDiv.innerHTML = `<p>Total de ingresos del día: $${ingresosDelDia.toFixed(2)}</p>`;
}
