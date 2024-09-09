document.addEventListener('DOMContentLoaded', function() {
    var selectPeligro = document.getElementById('peligro-select');
    
    selectPeligro.addEventListener('change', function() {
        mostrarRiesgo();
        mostrarInfo();
        mostrarInfo4();
    });
});


function actualizarRiesgo(valor) {
    document.getElementById('riesgo-seleccionado').value = valor;
}
function mostrarRiesgo() {
    // Ocultar todos los selects de riesgo
    var riesgos = document.querySelectorAll('.selectRiesgos');
    riesgos.forEach(function(select) {
        select.style.display = 'none';
    });

    // Mostrar solo el select de riesgo correspondiente al peligro seleccionado
    var peligro = document.getElementById('peligro-select').value;
    if (peligro) {
        var riesgoElement = document.getElementById('riesgo-' + peligro);

        
        if (riesgoElement) {
            riesgoElement.style.display = 'block';
        }
    }

}

function mostrarInfo() {
    var tooltip2 = document.getElementById('tooltip2');
    var peligro = document.getElementById('peligro-select').value;

    switch (peligro) {
        case 'biologico':
            tooltip2.innerHTML = "Peligro biológico: Es un riesgo que puede causar enfermedades infecciosas o efectos adversos.";
            break;
        case 'fisico':
            tooltip2.innerHTML = "Peligro físico: Es un riesgo que puede causar daños físicos como golpes o cortes.";
            break;
        case 'quimico':
            tooltip2.innerHTML = "Peligro químico: Incluye sustancias que pueden causar daños por exposición.";
            break;
        case 'psicosocial':
            tooltip2.innerHTML = "Peligro psicosocial: Factores que pueden afectar el bienestar mental y emocional.";
            break;
        case 'biomecanico':
            tooltip2.innerHTML = "Peligro biomecánico: Riesgos relacionados con el movimiento y postura del cuerpo.";
            break;
        case 'seguridad':
            tooltip2.innerHTML = "Condiciones de Seguridad: Aspectos que afectan la seguridad general en el entorno.";
            break;
        case 'fenomenos':
            tooltip2.innerHTML = "Fenómenos Naturales: Riesgos relacionados con eventos naturales como sismos o tormentas.";
            break;
        default:
            tooltip2.innerHTML = "Selecciona un Peligro para ver más información.";
            break;
    }

}

function mostrarInfo2() {

    var tooltip = document.getElementById('tooltip');
    var riesgo = document.getElementById('RiesgosB').value;

    switch (riesgo) {
        case 'virus':
            tooltip.innerHTML = 'Los virus son microorganismos que pueden causar enfermedades infecciosas.';
            break;
        case 'bacterias':
            tooltip.innerHTML = 'Las bacterias pueden ser beneficiosas o patógenas, causando infecciones.';
            break;
        case 'hongos':
            tooltip.innerHTML = 'Los hongos incluyen mohos y levaduras que pueden causar infecciones.';
            break;
        case 'ricketsias':
            tooltip.innerHTML = 'Las rickettsias son bacterias que se transmiten a través de insectos.';
            break;
        case 'parasitos':
            tooltip.innerHTML = 'Los parásitos viven en otros organismos, causando enfermedades.';
            break;
        case 'picaduras':
            tooltip.innerHTML = 'Las picaduras de insectos pueden transmitir enfermedades.';
            break;
        case 'mordeduras':
            tooltip.innerHTML = 'Las mordeduras de animales pueden causar infecciones graves.';
            break;
        case 'fluidos':
            tooltip.innerHTML = 'Los fluidos corporales pueden contener agentes infecciosos.';
            break;
        default:
            tooltip.innerHTML = 'Selecciona un riesgo para ver más información.';
    }
    
}

function mostrarInfo3() {

    var tooltip = document.getElementById('tooltip3');
    var riesgo = document.getElementById('riesgosF').value;

    switch (riesgo) {
        case 'ruido':
            tooltip.innerHTML = 'los Ruidos son de impacto, intermitente y continuo';
            break;
        case 'iluminacion':
            tooltip.innerHTML = 'La iluminacion es luz visible por exfcesi o deficiencia de ella';
            break;
        case 'vibracion':
            tooltip.innerHTML = 'La vibracion es de cuerpo entero o segmentaria(por partes)';
            break;
        case 'temperaturas':
            tooltip.innerHTML = 'Las temperaturas extremas estan calor o frio';
            break;
        case 'presion':
            tooltip.innerHTML = 'La presion atmosferica esta la normal o la ajustada en m o sPa (A nivel del mar)';
            break;
        case 'radiacion':
            tooltip.innerHTML = 'Los rayos ionizantes son: rayos X, la gama, beta y alfa';
            break;
        case 'radiacion2':
            tooltip.innerHTML = 'Los rayos no ionizantes son: laser, ultravioleta, infraroja, radiofrecuencia y microondas';
            break;
        default:
            tooltip.innerHTML = 'Selecciona un riesgo para ver más información.';
    }
    
}


function mostrarInfo4() {
    var tooltip = document.getElementById('tooltip4');
    var riesgos = document.getElementById('riesgosQ').value;

    switch (riesgos) {
        case 'polvos':
            tooltip.innerHTML = 'Los Polvos orgánicos, inorgánicos son: Partículas sólidas en suspensión en el aire, como polvos de harina o minerales.';
            break;
        case 'fibras':
            tooltip.innerHTML = 'Hilos o filamentos delgados, naturales o sintéticos, como fibras de algodón o de vidrio.';
            break;
        case 'liquidos':
            tooltip.innerHTML = 'Sustancias en estado líquido, como aceites, solventes y otros líquidos potencialmente peligrosos.';
            break;
        case 'gases':
            tooltip.innerHTML = 'Los Gases y Vapores son:  Sustancias en estado gaseoso, como vapores químicos o gases industriales.';
            break;
        case 'humos':
            tooltip.innerHTML = 'Los Humos Metalicos, no Metalicos son: Partículas en suspensión producidas por la combustión o reacciones químicas, metálicos o no metálicos.';
            break;
        case 'material':
            tooltip.innerHTML = 'El Material Particulado es: Partículas sólidas o fragmentos en el aire, como residuos industriales o polvos de construcción.';
            break;
        default:
            tooltip.innerHTML = 'Selecciona un riesgo para ver más información.';
    }
}


function mostrarInfo5() {

    var tooltip = document.getElementById('tooltip5');
    var riesgo = document.getElementById('riesgoP').value;

    switch (riesgo) {
        case 'gestion':
            tooltip.innerHTML = 'La Gestión Organizacional Cubre: estilo de mando, pago, contratacion, participacion, induccion y capacitacion, bienestar social, evaluacion del desempeño y manejo de cambios';
            break;
        case 'carac':
            tooltip.innerHTML = 'Las Caracteristicas Gestion Organizacional Trabajo cubren: Comunicaion, tecnologia, organizacion del trabajo, demandas cualitativas y cuantitativas';
            break;
        case 'carac2':
            tooltip.innerHTML = 'Las Caracteristicas Grupo Social de Trabajo son: Relaciones, cohesion, calidad de interacciones y trabajo en equipo';
            break;
        case 'condic':
            tooltip.innerHTML = 'Las Condiciones de la Tarea son: Carga mental, contenido de la tarea, demandas emocionales, sistemas de control, definicion de roles y monotonia';
            break;
        case 'interfase':
            tooltip.innerHTML = 'Interface - Persona - Tarea: Conocimientos, habilidades en relacion con la demandan de la tarea, iniciativa, autonomia y reconocimiento, identificacion de la persona con la tarea y la organizacion';
            break;
        case 'jornada':
            tooltip.innerHTML = 'La Jornada de Trabajo: Pausas, trabajo nocturno, rotacion, horas extra, descansos';
            break;
        default:
            tooltip.innerHTML = 'Selecciona un riesgo para ver más información.';
    }
    
} 

function mostrarInfo6() {

    var tooltip = document.getElementById('tooltip6');
    var riesgo = document.getElementById('riesgoBio').value;

    switch (riesgo) {
        case 'postura':
            tooltip.innerHTML = 'Riesgo asociado a posturas incómodas o forzadas que pueden causar molestias o lesiones.';
            break;
        case 'esfuerzo':
            tooltip.innerHTML = 'Riesgo relacionado con el esfuerzo físico excesivo, como levantar o empujar cargas pesadas.';
            break;
        case 'repetitivo':
            tooltip.innerHTML = 'Riesgo asociado a la realización de movimientos repetitivos que pueden provocar fatiga muscular o lesiones.';
            break;
        case 'manual':
            tooltip.innerHTML = 'Riesgo derivado de la manipulación manual de cargas, lo que puede generar tensiones musculares y lesiones.';
            break;
        default:
            tooltip.innerHTML = 'Selecciona un riesgo para ver más información.';
    }
    
}

function mostrarInfo7() {

    var tooltip = document.getElementById('tooltip7');
    var riesgo = document.getElementById('riesgoS').value;

    switch (riesgo) {
        case 'mecanico':
            tooltip.innerHTML = 'Mecanico: elementos o partes de maquinas, herramientasequipos, piezas a trabajar, materiales proyectados solidos o fluidos' ;
            break;
        case 'electrico':
            tooltip.innerHTML = 'El Electrico: Alta y baja tension, estatica.';
            break; 
        case 'locativo':
            tooltip.innerHTML = 'Locativo es: sistemas y medios de almacenamiento, superficies de trabajo irregulares , deslizantes con diferencia de nivel, condiciones de orden y aseo, caidas de objetos.';
            break;
        case 'tecnologico':
            tooltip.innerHTML = 'Tecnologico es: explosion, fuga, derrame, incendio ';
            break;
        case 'accidentes':
            tooltip.innerHTML = 'Los Accidentes de Tránsito son colisiones o incidentes en la vía pública que involucran vehículos, peatones, ciclistas, u otros usuarios de la vía.';
            break;
        case 'publicos':
            tooltip.innerHTML = 'Los publicos son: robos, atracos, asaltos, atentados, de orden publico, ETC...';
            break;
        case 'alturas':
            tooltip.innerHTML = 'Riesgo asociado a trabajos realizados en alturas, donde existe la posibilidad de caídas.';
            break;
        case 'confinados':
            tooltip.innerHTML = 'Riesgo relacionado con trabajar en espacios confinados, donde puede haber falta de oxígeno o exposición a sustancias peligrosas.';
            break;
        default:
            tooltip.innerHTML = 'Selecciona un riesgo para ver más información.';
    }
    
} 

function mostrarInfo8() {

    var tooltip = document.getElementById('tooltip8');
    var riesgo = document.getElementById('riesgoFen').value;

    switch (riesgo) {
        case 'sismo':
            tooltip.innerHTML = 'Movimiento repentino de la tierra causado por la liberación de energía acumulada en la corteza terrestre.';
            break;
        case 'terremoto':
            tooltip.innerHTML = 'Sismo de gran magnitud que puede causar daños significativos en estructuras y poner en peligro la vida humana.';
            break;
        case 'vendaval':
            tooltip.innerHTML = 'Viento fuerte y sostenido que puede causar daños a edificaciones, árboles y otros objetos no asegurados.';
            break;
        case 'inundacion':
            tooltip.innerHTML = 'Acumulación de agua en áreas normalmente secas, causada por lluvias intensas, desbordamientos de ríos, o marejadas.';
            break;
        case 'derrumbe':
            tooltip.innerHTML = 'Desprendimiento de tierra, rocas o escombros en una pendiente, generalmente causado por lluvias o sismos.';
            break;
        case 'precipitaciones':
            tooltip.innerHTML = 'Cualquier forma de agua, líquida o sólida, que cae desde las nubes a la superficie terrestre, como lluvia, nieve o granizo.';
            break;
        default:
            tooltip.innerHTML = 'Selecciona un riesgo para ver más información.';
    }
    
}

function adjustWidth(input) {
    // Crear un elemento span para medir el contenido
    const span = document.createElement('span');
    span.style.visibility = 'hidden';
    span.style.whiteSpace = 'pre';
    span.style.font = getComputedStyle(input).font; // Copiar el estilo del input
    span.textContent = input.value || input.placeholder; // Contenido del input

    document.body.appendChild(span);
    input.style.width = span.offsetWidth + 'px'; // Ajustar el ancho del input
    document.body.removeChild(span);
}




