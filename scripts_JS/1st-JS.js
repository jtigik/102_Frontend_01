let numeros = [1, 2, 3];
numeros.push(4); // Adiciona no final
console.log(numeros); // [1, 2, 3, 4]
numeros.pop(); // Remove o último
console.log(numeros);

numeros.unshift(0); // Adiciona no início
console.log(numeros); // [0, 1, 2, 3]
numeros.shift(); // Remove o primeiro
console.log(numeros);

// Adiciona em uma posição específica
numeros.splice(1, 0, 1.5); // Na posição 1, remove 0 elementos e adiciona 1.5
console.log(numeros); // [1, 1.5, 2, 3]

// Remove da posição específica
numeros.splice(2, 1); // Na posição 2, remove 1 elemento
console.log(numeros); // [1, 1.5, 3]

// Substitui na posição específica
numeros.splice(1, 1, 2); // Na posição 1, remove 1 elemento e adiciona 2
console.log(numeros); // [1, 2, 3]

let jsonString = '{"nome": "João", "idade": 15}';
let obj = JSON.parse(jsonString); // Converte string para objeto
console.log(obj.nome); // "João"
let novoJson = JSON.stringify(obj); // Converte objeto para string
console.log(novoJson);

let frutas = ["maçã", "banana", "laranja"]; // Como um vetor no Portugol
console.log(frutas[0]); // "maçã"
frutas[1] = "morango"; // Modifica o item
console.log(frutas);
frutas.push("uva"); // Adiciona um item no final
console.log(frutas);
frutas.splice(1, 1); // Remove o item na posição 1
console.log(frutas);
frutas.push("banana"); // Adiciona "banana" novamente
console.log(frutas)

let notas = [7, 8, 9];
for (let i = 0; i < notas.length; i++) {
console.log("Nota " + (i+1) + ": " + notas[i]);
}
