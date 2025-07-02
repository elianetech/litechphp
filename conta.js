// a conta tem?
// numero conta, titular, saldo, 
// extrato
// ------------------------
// o que eu posso fazer na conta?
// sacar, depositar, extrato, 
// transferir

class Conta{
    constructor(titular, numConta, 
        saldo=0){
            // this -> palavra reservada 
            // para indicar que a 
            // variavel/função pertence a 
            // classe em questão
            this.titular = titular
            this.numConta = numConta
            this.saldo = saldo
            this.extrato = []
    }
    depositar(valor){
        if(valor > 0){
            this.saldo = this.saldo + valor
            this.extrato.push("Deposito realizado com sucesso")
        }
    }
    realizarSaque(valor){
        if(valor <= 0){
            console.log("Digite um valor válido")
        }
        else if(valor > this.saldo){
            console.log("Não há saldo suficiente")
        }
        // aqui realiza o saque
        else{
            this.saldo = this.saldo - valor
            this.extrato.push("Saque foi bem sucedido")
        }
    }

    transferencia(valor, conta){
        this.extrato.push('Inicio da Transferencia')
        this.realizarSaque(valor)
        conta.depositar(valor)
        this.extrato.push('Fim da Transferencia')
    }
    gerarExtrato(){
        this.extrato.forEach(operacao => {
            console.log(operacao + '\n')
        });
    }

}

conta1 = new Conta('Renan','10235', 100)
console.log(conta1.saldo)
conta1.depositar(50)
console.log(conta1.saldo)
conta1.realizarSaque(50)

conta2 = new Conta('Senac', '10582', 500)
conta1.transferencia(50, conta2)

console.log(conta1.saldo)

conta1.gerarExtrato()