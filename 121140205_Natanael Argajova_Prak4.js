function hitunganjilgenap(){
  const Inputbilangan = parseInt(document.getElementById('inputBilangan').value);
  let ganjil= 0; let genap= 0;
  
if( Inputbilangan > 0 && !isNaN(Inputbilangan)){
  for(let i= 1; i<= Inputbilangan; i++){
    if(i%2 == 0){
        genap++;
    }
    else{
        ganjil++;
    }
}

let hasilPerhitungan =  document.getElementById('hasilPerhitungan');
    hasilPerhitungan.innerHTML = 'Terdapat' + '<br>' + ganjil + ' Jumlah bilangan ganjil '+ '<br> &' + '<br>' + genap + ' Jumlah bilangan genap ';
  }
  else{
    alert("Hanya bisa menghitung bilangan positif/bulat");
}
}

// Natanael Argajova