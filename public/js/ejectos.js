const frases = [
  "Obras civiles y materiales de calidad a tu alcance",
  "Construimos con seguridad y confianza",
  "Más de 10 años de experiencia nos respaldan"
];

let i = 0;      // índice de frase
let j = 0;      // índice de letra
const speed = 100;     // velocidad de escritura
const holdTime = 20000; // tiempo visible en ms (20 seg)

const typedText = document.getElementById("typed-text");

function typeEffect() {
  const actual = frases[i];

  if (j < actual.length) {
    // Escribir letra por letra
    typedText.textContent = actual.substring(0, j + 1);
    j++;
    setTimeout(typeEffect, speed);
  } else {
    // Cuando termina de escribir, esperar 20s y borrar de golpe
    setTimeout(() => {
      typedText.textContent = "";  
      j = 0;
      i = (i + 1) % frases.length;
      typeEffect();
    }, holdTime);
  }
}

typeEffect();
