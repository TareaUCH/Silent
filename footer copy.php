</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
function toggleContent(storyId) {
    const dots = document.getElementById(`dots-${storyId}`);
    const moreText = document.getElementById(`more-${storyId}`);
    const btn = document.getElementById(`btn-${storyId}`);
    
    // Usamos estilos computados para ver el estado real
    const isExpanded = window.getComputedStyle(moreText).display === "inline";
    
    if (isExpanded) {
        // Contraer el texto
        dots.style.display = "inline";
        moreText.style.display = "none";
        btn.textContent = "▼ Leer más";
    } else {
        // Expandir el texto
        dots.style.display = "none";
        moreText.style.display = "inline";
        btn.textContent = "▲ Leer menos";
    }
}
</script>
</body>
</html>