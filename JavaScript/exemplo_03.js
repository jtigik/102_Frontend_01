//======= CRIAR OBJETO (JSON) ALUNO ======
let alunos = {
    nome: "Ana", 
    idade: 16,
    matricula: "8AT123",
    ausente: true
};

console.log(alunos);// Imprime a estrutura
console.log(alunos.nome); //Imprime uma Chave
console.log("Nome do(a) aluno(a): %s", alunos.nome);
console.log("Matrícula do(a) aluno(a): %s", alunos.matricula); 

let aluno1 = {
    nome: "Ana", 
    idade: 16,
    matricula: "8AT123",
    ausente: true
}

let aluno2 = {
    nome: "Paulo", 
    idade: 15,
    matricula: "8AT123",
    ausente: true
}

let aluno3 = {
    nome: "Joana", 
    idade: 17,
    matricula: "8AT321",
    ausente: false
}

let turma = [aluno1, aluno2, aluno3]

console.log(turma[0])