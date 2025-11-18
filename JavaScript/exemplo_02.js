//Declarar e inicializar a estrutura
let numeros = [1,2,3];
const numbers = [4,8];
//Mostrar e adicionar no FIM
console.log(numeros);
numeros.push(6);
console.log(numeros);
//Mostrar e remover no INÍCIO
numeros.shift();
console.log(numeros);
//Mostrar e adicionar no INÍCIO
numeros.unshift(-3)
console.log(numeros)
//Imprimir um item específico
console.log("Mostrando: "+ numeros[3])

//Inserir um valor em posição específica do array
numeros.splice(2, 0, 17);
console.log(numeros);

numeros.splice(2, 3);
console.log(numeros);

//==============================================================
// ARRAY DE MARCA DE CARROS

let garage = ["BYD", "Tesla", "Dodge", "Audi", "Lamborghini", "Jaguar", "Subaru", "Pagani", "Mazda"];

garage.push("Toyota");

// console.log(garage[6]);

console.log("Tamanho do Array: "+garage.length);

for (let i = 0; i < garage.length; i++) {
    console.log("Carro nº %d:", i+1);
    console.log("Marca: %s", garage[i]);
}
