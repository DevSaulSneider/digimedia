<div class="modal-container">
        <div class="modal">
            <p class="close">X</p>
            <div class="modal-content">
            <img class="imgmodal" src="src/images/fondomodal.webp">
            <div class="form">
                <h1>CONT&Aacute;CTANOS</h1>
                <p> ¿Necesitas una cotización o deseas una asesoría? <br>Déjanos tus
                    datos y te contactamos </p>
               
                    <form id="formContact" action="|" method="post">
                            <div>    
                    <input type="text" placeholder="Nombre" aria-label="Nombre" id="nombre" name="nombre" autocomplete="off" size="23" required>
                        
                            <input type="text" aria-label="First name" placeholder="Tel&eacute;fono" id="telefono" name="telefono" size="23" autocomplete="off" required>

                            <input type="text" aria-label="Subject" value="<?php  include("asunto.php")?> " id="asunto" name="asunto" autocomplete="off" size="23" required disabled>
                            
                            <input type="email" aria-label="Last name" placeholder="Email" id="email" name="email" autocomplete="off" size="23" required>
                            </div>  
                            <div>
                            <button type="submit" id="enviar" name="enviar" value="ENVIAR" class="btn btn-primary"><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;ENVIAR</button>
                            </div>
                    </form>
            </div>
            </div>
            </div>
</div>