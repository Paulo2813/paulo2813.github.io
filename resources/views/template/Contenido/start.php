<?php
session_start();
?>
<div class="clones">
    <div class="containerStart">
        <h1 class="h1Start">Registration</h1>
        <form action="acciones/procesar.php" method="POST">
            <div class="containerSelect">
                <div>
                    <label for="statSelect">Elegir Stat:</label>
                    <select id="numberSelect"  name="stat">
                        <option value="AT">AT</option>
                        <option value="CT">CT</option>
                        <option value="HP">HP</option>
                        <option value="EV">EV</option>
                        <option value="BL">BL</option>
                    </select>
                </div>
                <div>
                    <label for="numberSelect">N° Clone:</label>
                    <select id="numberSelect" name="number">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                    </select>
                </div>
            </div>
            <div class="input-group">
                <label for="baseValue">Valor Base:</label>
                <input type="number" id="baseValue"  name="baseValue" placeholder="Valor Base" required>
            </div>
            <div class="input-group">
                <label for="baseValue">Valor clone:</label>
                <input type="number" id="cloneValue" name="cloneValue" placeholder="Valor Base" required>
            </div>
            <button type="submit" class="register-btn">Calcular</button>
        </form>
    </div>
    <div class="Respuesta">
        <div class="card">
            <h2 class="card-title">Tu clon es:</h2>
            <p class="card-description" id="resultado">
                <?php
                if (isset($_SESSION['resultado'])) {
                    echo $_SESSION['resultado'];
                    unset($_SESSION['resultado']); 
                } else {
                    echo "Esperando cálculo...";
                }
                ?>
            </p>
        </div>
    </div> 
</div>
