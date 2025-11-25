// Arquivo vazio para implementação da interação
// Exemplo de estrutura para o modo noturno (descomente e adapte):

document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.querySelector('#toggle-dark');
    const body = document.body;

    // Verifica se dark mode está salvo
    if (localStorage.getItem('darkMode') === 'enabled') {
        body.classList.add('dark');
        toggleButton.textContent = '☀️';
    }

    toggleButton.addEventListener('click', function() {
        body.classList.toggle('dark');
        if (body.classList.contains('dark')) {
            localStorage.setItem('darkMode', 'enabled');
            toggleButton.textContent = '☀️';
        } else {
            localStorage.setItem('darkMode', 'disabled');
            toggleButton.textContent = '🌙';
        }
    });
});
