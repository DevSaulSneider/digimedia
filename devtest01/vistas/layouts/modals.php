<script src="./src/js/modal.js"></script>
<script>
    $(document).on(
        'keydown',
        function(event) {
            if (event.key == "Escape") {
                let cerrar = document.querySelectorAll(".close")[0];
                let modal = document.querySelectorAll(".modal")[0];
                let modalC = document.querySelectorAll(".modal-container")[0];
                modal.classList.toggle("modal-close");
                setTimeout(function() {
                    modalC.style.opacity = "0";
                    modalC.style.visibility = "hidden";
                }, 3000);
                modalC.classList.toggle("modalca");

            }
        });
</script>