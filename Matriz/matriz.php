<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="frankestein.png">
    <script src="scripts.js"></script>
    <link rel="stylesheet" href="matriz.css?ver=2.0">
    <title>Matriz</title>
    <style>
        .selectRiesgos {
            display: none;
        }
    </style>
</head>
<body>
    <nav class="nav">
        <h1>Matriz - Sst</h1>
    </nav>

    <?php
    session_start();
    ?>

<form action="procesar.php" method="POST">
    <table>
        <tr>
            <td><label for="actividad">Actividad</label></td>
            <td>
            <input type="text" name="actividad">
                <div id="info-icon8" class="info-icon8">
                    ?
                    <div id="tooltip9" class="tooltip9">Cada actividad debe comenzar por un verbo ar er ir or ur</div>
                </div>
            </td>
        </tr>

        <tr>
            <td><label for="peligro">Peligro</label></td>
            <td>
                <select name="peligro" id="peligro-select" class="selectPeligros">
                    <option value="">Seleccione un Peligro</option>
                    <option value="biologico">Biológico</option>
                    <option value="fisico">Físico</option>
                    <option value="quimico">Químico</option>
                    <option value="psicosocial">Psicosocial</option>
                    <option value="biomecanico">Biomecánico</option>
                    <option value="seguridad">Condiciones de Seguridad</option>
                    <option value="fenomenos">Fenómenos Naturales</option>
                </select>
                <div class="infoP">
                    ?
                    <div id="tooltip2" class="tooltip2">Selecciona un Peligro para ver más información.</div>
                </div>
            </td>
        </tr>

        <tr>
            <td><label for="riesgo">Riesgo</label></td>
            <td>
                <div class="selectRiesgos" id="riesgo-biologico">
                <select id="RiesgosB" class="riesgosB" onchange="mostrarInfo2(); actualizarRiesgo(this.value);">
                    <option value="">Seleccione un Riesgo</option>
                    <option value="virus">Virus</option>
                    <option value="bacterias">Bacterias</option>
                    <option value="hongos">Hongos</option>
                    <option value="ricketsias">Ricketsias</option>
                    <option value="parasitos">Parásitos</option>
                    <option value="picaduras">Picaduras</option>
                    <option value="mordeduras">Mordeduras</option>
                    <option value="fluidos">Fluidos o Excrementos</option>
                </select>
                <div id="info-icon" class="info-icon">
                    ?
                    <div id="tooltip" class="tooltip">Selecciona un riesgo para ver más información.</div>
                </div>
            </div>
            <!-- Riesgos -->
            <div class="selectRiesgos" id="riesgo-fisico">
                <select id="riesgosF" class="riesgosF" onchange="mostrarInfo3(); actualizarRiesgo(this.value);">
                    <option value="">Seleccione un Riesgo</option>
                    <option value="ruido">Ruido</option>
                    <option value="iluminacion">Iluminacion</option>
                    <option value="vibracion">Vibracion</option>
                    <option value="temperaturas">Temperaturas Extremas</option>
                    <option value="presion">Presion Atmosferica</option>
                    <option value="radiacion">Radiaciones Ionizantes</option>
                    <option value="radiacion2">Radiaciones no Ionizantes</option>
                </select>
                <div id="info-icon2" class="info-icon2">
                    ?
                    <div id="tooltip3" class="tooltip3">Selecciona un riesgo para ver más información.</div>
                </div>
            </div>
            <!-- Riesgos -->
            <div class="selectRiesgos" id="riesgo-quimico">
                <select id="riesgosQ" class="riesgosQ" onchange="mostrarInfo4(); actualizarRiesgo(this.value);">
                    <option value="">Seleccione un Riesgo</option>
                    <option value="polvos">Polvos orgánicos, inorgánicos</option>
                    <option value="fibras">Fibras</option>
                    <option value="liquidos">Liquidos</option>
                    <option value="gases">Gases y Vapores</option>
                    <option value="humos">Humos Metalicos, no Metalicos</option>
                    <option value="material">Material Particulado</option>
                </select>
                <div id="info-icon3" class="info-icon3">
                    ?
                    <div id="tooltip4" class="tooltip4">Selecciona un riesgo para ver más información.</div>
                </div>
            </div>
            <!-- Riesgos -->
            <div class="selectRiesgos" id="riesgo-psicosocial">
                <select name="riesgoP" id="riesgoP" class="riesgoP" onchange="mostrarInfo5(); actualizarRiesgo(this.value);">
                    <option value="">Seleccione un Riesgo</option>
                    <option value="gestion">Gestión Organizacional</option>
                    <option value="carac">Caracteristicas Gestion Organizacional Trabajo</option>
                    <option value="carac2">Caracteristicas Grupo Social Trabajo</option>
                    <option value="condic">Condiciones de la Tarea</option>
                    <option value="interfase">Interface - Persona - Tarea</option>
                    <option value="jornada">Jornada de Trabajo</option>
                </select>
                <div id="info-icon4" class="info-icon4">
                    ?
                    <div id="tooltip5" class="tooltip5">Selecciona un riesgo para ver más información.</div>
                </div>
            </div>
            <!-- Riesgos -->
            <div class="selectRiesgos" id="riesgo-biomecanico">
                <select id="riesgoBio" class="riesgoBio" onchange="mostrarInfo6(); actualizarRiesgo(this.value);">
                    <option value="">Seleccione un Riesgo</option>
                    <option value="postura">Postura</option>
                    <option value="esfuerzo">Esfuerzo</option>
                    <option value="repetitivo">Movimiento repetitivo</option>
                    <option value="manual">Manipulación Manual de Cargas</option>
                </select>
                <div id="info-icon5" class="info-icon5">
                    ?
                    <div id="tooltip6" class="tooltip6">Selecciona un riesgo para ver más información.</div>
                </div>
            </div>
            <!-- Riesgos -->
            <div class="selectRiesgos" id="riesgo-seguridad">
                <select id="riesgoS" class="riesgoS" onchange="mostrarInfo7(); actualizarRiesgo(this.value);">
                    <option value="">Seleccione un Riesgo</option>
                    <option value="mecanico">Mecánico</option>
                    <option value="electrico">Electrico</option>
                    <option value="locativo">Locativo</option>
                    <option value="tecnologico">Tecnologico</option>
                    <option value="accidentes">Accidentes de Transito</option>
                    <option value="publicos">Publicos</option>
                    <option value="alturas">Trabajo en Alturas</option>
                    <option value="confinados">Espacios Confinados</option>
                </select>
                <div id="info-icon6" class="info-icon6">
                    ?
                    <div id="tooltip7" class="tooltip7">Selecciona un riesgo para ver más información.</div>
                </div>
            </div>
            <!-- Riesgos -->
            <div class="selectRiesgos" id="riesgo-fenomenos">
                <select id="riesgoFen" class="riesgoFen" onchange="mostrarInfo8(); actualizarRiesgo(this.value);">
                    <option value="">Seleccione un Riesgo</option>
                    <option value="sismo">Sismo</option>
                    <option value="terremoto">Terremoto</option>
                    <option value="vendaval">Vendaval</option>
                    <option value="inundacion">Inundacion</option>
                    <option value="derrumbe">Derrumbe</option>
                    <option value="precipitaciones">Precipitaciones</option>
                </select>
                <div id="info-icon7" class="info-icon7">
                    ?
                    <div id="tooltip8" class="tooltip8">Selecciona un riesgo para ver más información.</div>
                </div>
            </div>
                
            </td>
        </tr>

        <tr>
            <td><label for="descripcion">Descripción</label></td>
            <td>
                <input type="text" name="descripcion" value="<?php echo isset($_SESSION['descripcion']) ? htmlspecialchars($_SESSION['descripcion']) : ''; ?>">
                <div id="info-icon9" class="info-icon9">
                    ?
                    <div id="tooltip10" class="tooltip10">La descripcion es relacionado con la actividad y todo el suceso que lleva con ella</div>
                </div>
            </td>
        </tr>

        <tr>
            <td><label for="consecuencias">Consecuencias</label></td>
            <td>
                <input type="text" name="consecuencias" value="<?php echo isset($_SESSION['consecuencias']) ? htmlspecialchars($_SESSION['consecuencias']) : ''; ?>">
                <div id="info-icon10" class="info-icon10">
                    ?
                    <div id="tooltip11" class="tooltip11">Las concecuencias son Los posibles resultados negativos de un incidente relacionado con el riesgo. Esto podría incluir lesiones, enfermedades, daños materiales, impacto ambiental, pérdidas económicas, etc.</div>
                </div>
            </td>
        </tr>

        <tr>
            <td><label for="medidas_preventivas">Medidas Preventivas</label></td>
            <td>
                <input type="text" name="medidas_preventivas" value="<?php echo isset($_SESSION['medidas_preventivas']) ? htmlspecialchars($_SESSION['medidas_preventivas']) : ''; ?>">
                <div id="info-icon11" class="info-icon11">
                    ?
                    <div id="tooltip12" class="tooltip12">Las medidas preventivas son para evitar que un riesgo ocurra o para minimizar su probabilidad. Estas medidas se implementan antes de que se produzca un incidente.</div>
                </div>
            </td>
        </tr>

        <tr>
            <td><label for="medidas_correctivas">Medidas Correctivas</label></td>
            <td>
                <input type="text" name="medidas_correctivas" value="<?php echo isset($_SESSION['medidas_correctivas']) ? htmlspecialchars($_SESSION['medidas_correctivas']) : ''; ?>">
                <div id="info-icon12" class="info-icon12">
                    ?
                    <div id="tooltip13" class="tooltip13">Las medidas correctivas se implementan después de que un incidente o un riesgo se ha materializado. El objetivo de estas medidas es mitigar los daños, corregir la situación y prevenir su reaparición en el futuro.</div>
                </div>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="hidden" id="riesgo-seleccionado" name="riesgo">
            </td>
        </tr>

        <tr>
            <td colspan="3">
                <a href="index.html" class="btn-back">Volver al Inicio</a>
                <input type="submit" value="Enviar">
            </td>
        </tr>
    </table>
</form>


    <?php if (isset($_SESSION['descripcion'])): ?>
    <div class="data-summary">
        <h2>Datos Ingresados:</h2>
        <ul>
            <li><strong>Actividad:</strong> <?php echo htmlspecialchars($_SESSION['actividad']); ?></li>
            <li><strong>Peligro:</strong> <?php echo htmlspecialchars($_SESSION['peligro']); ?></li>
            <li><strong>Riesgo:</strong> <?php echo htmlspecialchars($_SESSION['riesgo']); ?></li>
            <li><strong>Descripción:</strong> <?php echo htmlspecialchars($_SESSION['descripcion']); ?></li>
            <li><strong>Consecuencias:</strong> <?php echo htmlspecialchars($_SESSION['consecuencias']); ?></li>
            <li><strong>Medidas Preventivas:</strong> <?php echo htmlspecialchars($_SESSION['medidas_preventivas']); ?></li>
            <li><strong>Medidas Correctivas:</strong> <?php echo htmlspecialchars($_SESSION['medidas_correctivas']); ?></li>
        </ul>
    </div>
<?php endif; ?>
    

</body>

</html>