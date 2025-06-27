saldo = 1500
deposito  = 100
// saldo += deposito

function realizarDeposito(deposito, saldo){
saldo = saldo + deposito
console.log(saldo)
return saldo 
}

saldo = realizarDeposito(deposito, saldo)
console.log(saldo)