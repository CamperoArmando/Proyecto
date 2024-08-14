document.addEventListener('DOMContentLoaded', () => {
    const menuItems = [
        { name: 'Hamburguesa Clásica', description: 'Hamburguesa con carne de res, lechuga, tomate y queso.', price: '$10.99' },
        { name: 'Ensalada César', description: 'Ensalada con pollo, lechuga, crutones y aderezo César.', price: '$8.99' },
        { name: 'Pizza Margherita', description: 'Pizza con salsa de tomate, mozzarella y albahaca.', price: '$12.99' },
        { name: 'Tacos de Carnitas', description: 'Tacos rellenos de carnitas de cerdo con cebolla y cilantro.', price: '$9.99' },
    ];

    const menuContainer = document.getElementById('menu-items');

    menuItems.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.classList.add('menu-item');
        itemDiv.innerHTML = `
            <h3>${item.name}</h3>
            <p>${item.description}</p>
            <p><strong>${item.price}</strong></p>
        `;
        menuContainer.appendChild(itemDiv);
    });
});
